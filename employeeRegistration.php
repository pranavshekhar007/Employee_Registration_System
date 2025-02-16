<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "employment";


   $conn = new mysqli($host, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //print_r($_FILES);die;
  
    if ($_POST) {
        // Get form data
       

        $postApplied = mysqli_real_escape_string($conn, $_POST["postApplied"]);
        $specialization = mysqli_real_escape_string($conn, $_POST["Specialization"]);
        $fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
        $fatherName = mysqli_real_escape_string($conn, $_POST["fatherName"]);
        $spouseName = mysqli_real_escape_string($conn, $_POST["spouseName"]);
        $gender = $_POST["gender"];
        $maritalStatus = $_POST["maritalStatus"];
        $category = $_POST["category"];
        $nationality = mysqli_real_escape_string($conn, $_POST["nationality"]);
        $dob = $_POST["dob"];
        $panNumber = mysqli_real_escape_string($conn, $_POST["panNumber"]);
        $aadharNumber = mysqli_real_escape_string($conn, $_POST["aadharNumber"]);
        $personImage = $_FILES["personImage"]["name"]; // Assuming you are storing the image filename in the database
        $address = mysqli_real_escape_string($conn, $_POST["address"]);
        $city = mysqli_real_escape_string($conn, $_POST["city"]);
        $pinCode = $_POST["pinCode"];
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $mobileNo1 = $_POST["mobileNo1"];
        $mobileNo2 = $_POST["mobileNo2"];
        $formType = mysqli_real_escape_string($conn, $_POST["formType"]);

        $sql = "SELECT * FROM person_detail WHERE email = '$email' OR mobileNo1 = '$mobileNo1'";
        $result = $conn->query($sql);        
      
      

        if ($result->num_rows > 0){

            $existingData = $result->fetch_assoc();
            $existingPersonID = $existingData['person_id'];
            $emp_id = $existingData['emp_id'];

            if ($_FILES["personImage"]["size"] > 500000) {
                return json_encode(["message" => "Sorry, your file is too large."]);
                
             } 
     
             $target_dir = "uploads/".$emp_id.'/';
     
                     $imageFileType = explode(".", $personImage);
                     $extension = strtolower($imageFileType[count($imageFileType) - 1]);
                     $personImage_path = 'prof_' . time() . '-emp.' . $extension;
             if(!is_dir($target_dir)){
                 mkdir($target_dir, 0755);
             }
              
             
            
             $target_file = $target_dir . $personImage_path;
             move_uploaded_file($_FILES["personImage"]["tmp_name"], $target_file);



            
            $updateSql = "UPDATE person_detail 
              SET postApplied = '$postApplied',
                  Specialization = '$specialization',
                  fullName = '$fullName',
                  fatherName = '$fatherName',
                  spouseName = '$spouseName',
                  gender = '$gender',
                  maritalStatus = '$maritalStatus',
                  category = '$category',
                  nationality = '$nationality',
                  dob = '$dob',
                  panNumber = '$panNumber',
                  aadharNumber = '$aadharNumber',
                  personImage = '$target_file',
                  address = '$address',
                  city = '$city',
                  pinCode = '$pinCode',
                
                
                  mobileNo2 = '$mobileNo2',
                  formType = '$formType'
              WHERE email = '$email' OR mobileNo1 = '$mobileNo1'";

            if ($conn->query($updateSql) === TRUE) {
                
                $per_id = mysqli_fetch_assoc($conn->query("SELECT person_id FROM person_detail WHERE email = '$email' OR mobileNo1 = '$mobileNo1'"))['person_id'];

                

                header('Content-Type: application/json');
                
                echo json_encode(["message" => "success", "data" => $existingPersonID]);
            } else {
                echo json_encode(["message"=>"failed"]);
                
            }
        }else{
                
            $empID  = "SELECT `person_id` FROM `person_detail` GROUP BY `person_id` DESC";
            $resultempID = mysqli_fetch_assoc($conn->query($empID));
          
            $emp_id = 'LLOYD'.date('Y'). $resultempID['person_id']+1;

            if ($_FILES["personImage"]["size"] > 500000) {
                return json_encode(["message" => "Sorry, your file is too large."]);
                
             } 
     
             $target_dir = "uploads/".$emp_id.'/';
     
                     $imageFileType = explode(".", $personImage);
                     $extension = strtolower($imageFileType[count($imageFileType) - 1]);
                     $personImage_path = 'prof_' . time() . '-emp.' . $extension;
             if(!is_dir($target_dir)){
                 mkdir($target_dir, 0755);
             }
              
             
            
             $target_file = $target_dir . $personImage_path;
             move_uploaded_file($_FILES["personImage"]["tmp_name"], $target_file);
          
    
            $sql = "INSERT INTO person_detail (emp_id,postApplied, Specialization, fullName, fatherName, spouseName, gender, maritalStatus, category, nationality, dob, panNumber, aadharNumber, personImage, address, city, pinCode, email, mobileNo1, mobileNo2, formType)
                VALUES ('$emp_id','$postApplied', '$specialization', '$fullName', '$fatherName', '$spouseName', '$gender', '$maritalStatus', '$category', '$nationality', '$dob', '$panNumber', '$aadharNumber', '$target_file', '$address', '$city', '$pinCode', '$email', '$mobileNo1', '$mobileNo2', '$formType')";
    
            if ($conn->query($sql) === TRUE) {
                $per_id = mysqli_insert_id($conn);

                header('Content-Type: application/json');

                echo json_encode(["message" => "success", "data" => $per_id]);
            } else {
                echo json_encode(["message" => "failed"]);
            }
                
        
        }
        
    }
   

    // Close the database connection
    $conn->close();

?>