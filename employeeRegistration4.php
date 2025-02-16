<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "employment";


   $conn = new mysqli($host, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if ($_POST){
        $researchArea = mysqli_real_escape_string($conn, $_POST['researchArea']) ;
        $internationalJournals = mysqli_real_escape_string($conn, $_POST['internationalJournals']) ;
        $nationalJournals = mysqli_real_escape_string($conn, $_POST['nationalJournals']) ;
        $oralPresentation = mysqli_real_escape_string($conn, $_POST['oralPresentation']) ;
        $books = mysqli_real_escape_string($conn, $_POST['books']) ;
        $bookChapters = mysqli_real_escape_string($conn, $_POST['bookChapters']);
        $patents = mysqli_real_escape_string($conn, $_POST['patents']) ;
        $phdprojectsGuided = mysqli_real_escape_string($conn, $_POST['phdprojectsGuided']) ;
        $pgprojectsGuided = mysqli_real_escape_string($conn, $_POST['pgprojectsGuided']) ;
        $ugprojectsGuided = mysqli_real_escape_string($conn, $_POST['ugprojectsGuided']);
        $consul_gen_payment = $_POST['consul_gen_payment'];
        $res_grants_pay = $_POST['res_grants_pay'];
        $ans1 = mysqli_real_escape_string($conn, $_POST['ans1']) ;
        $ans2 = mysqli_real_escape_string($conn, $_POST['ans2']) ;
        $ans3 = mysqli_real_escape_string($conn, $_POST['ans3']);
        $ans4 = mysqli_real_escape_string($conn, $_POST['ans4']) ;
        $name1 = mysqli_real_escape_string($conn, $_POST['name1']);
        $designation1 = mysqli_real_escape_string($conn, $_POST['designation1']) ;
        $organization1 = mysqli_real_escape_string($conn, $_POST['organization1']);
        $mob1 = $_POST['mob1'];
        $email1 = mysqli_real_escape_string($conn, $_POST['email1']) ;
        $name2 = mysqli_real_escape_string($conn, $_POST['name2']);
        $designation2 = mysqli_real_escape_string($conn, $_POST['designation2']) ;
        $organization2 = mysqli_real_escape_string($conn, $_POST['organization2']);
        $person_id = $_POST['reac_person_id'] ;
        $experience_id = $_POST['experience_id'] ;
        $education_id = $_POST['reac_education_id'] ;
        $sign = $_FILES["sign"]["name"];
        $mob2 = $_POST['mob2'] ;
        $email2 = mysqli_real_escape_string($conn, $_POST['email2']) ;
        
        $checkSql = "SELECT * FROM research_expertise WHERE person_id = '$person_id' AND education_id = '$education_id' AND experience_id = '$experience_id'";
        $checkResult = $conn->query($checkSql);

        if ($checkResult->num_rows > 0) {

            $existingData = $result->fetch_assoc();
            $existingPersonID = $existingData['person_id'];
            $emp_id = $existingData['emp_id'];

            if ($_FILES["sign"]["size"] > 500000) {
                return json_encode(["message" => "Sorry, your file is too large."]);
                
             } 
     
             $target_dir = "uploads/".$emp_id.'/';
     
                     $imageFileType = explode(".", $sign);
                     $extension = strtolower($imageFileType[count($imageFileType) - 1]);
                     $sign_path = 'prof_' . time() . '-emp.' . $extension;
             if(!is_dir($target_dir)){
                 mkdir($target_dir, 0755);
             }
              
             
            
             $target_file = $target_dir . $sign_path;
             move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file);


            // Record exists, generate update query
            $updateSql = "UPDATE research_expertise SET
                researchArea = '$researchArea',
                internationalJournals = '$internationalJournals',
                nationalJournals = '$nationalJournals',
                oralPresentation = '$oralPresentation',
                books = '$books',
                bookChapters = '$bookChapters',
                patents = '$patents',
                phdprojectsGuided = '$phdprojectsGuided',
                pgprojectsGuided = '$pgprojectsGuided',
                ugprojectsGuided = '$ugprojectsGuided',
                consul_gen_payment = '$consul_gen_payment',
                res_grants_pay = '$res_grants_pay',
                ans1 = '$ans1',
                ans2 = '$ans2',
                ans3 = '$ans3',
                ans4 = '$ans4',
                name1 = '$name1',
                designation1 = '$designation1',
                organization1 = '$organization1',
                mob1 = '$mob1',
                email1 = '$email1',
                name2 = '$name2',
                designation2 = '$designation2',
                organization2 = '$organization2',
                mob2 = '$mob2',
                email2 = '$email2'
                sign = '$target_file',
                WHERE person_id = '$person_id' AND education_id = '$education_id' AND experience_id = '$experience_id'";

            if ($conn->query($updateSql) === TRUE) {
                $last_id = $person_id; // Assuming person_id is the relevant identifier
                header('Content-Type: application/json');
                echo json_encode(["message" => "success", "data" => $last_id]);
            } else {
                echo json_encode(["message" => "failed"]);
            }
        }else{

            $empID  = "SELECT `person_id` FROM `research_expertise` GROUP BY `person_id` DESC";
            $resultempID = mysqli_fetch_assoc($conn->query($empID));
          
            $emp_id = 'LLOYD'.date('Y'). $resultempID['person_id']+1;

            if ($_FILES["sign"]["size"] > 500000) {
                return json_encode(["message" => "Sorry, your file is too large."]);
                
             } 
     
             $target_dir = "uploads/".$emp_id.'/';
     
                     $imageFileType = explode(".", $sign);
                     $extension = strtolower($imageFileType[count($imageFileType) - 1]);
                     $sign_path = 'prof_' . time() . '-emp.' . $extension;
             if(!is_dir($target_dir)){
                 mkdir($target_dir, 0755);
             }
              
             
            
             $target_file = $target_dir . $sign_path;
             move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file);

            $sql= "INSERT INTO research_expertise (researchArea, internationalJournals, nationalJournals, oralPresentation, books, bookChapters, patents, phdprojectsGuided, pgprojectsGuided, ugprojectsGuided, consul_gen_payment, res_grants_pay, 
            ans1, ans2, ans3, ans4, name1, designation1, organization1, mob1, email1, name2, designation2, organization2, mob2, email2,sign,person_id,education_id,experience_id) 
            VALUES ('$researchArea', '$internationalJournals', '$nationalJournals', '$oralPresentation', '$books', '$bookChapters', '$patents', '$phdprojectsGuided', '$pgprojectsGuided', '$ugprojectsGuided', '$consul_gen_payment', '$res_grants_pay',
            '$ans1', '$ans2', '$ans3', '$ans4', '$name1', '$designation1', '$organization1', '$mob1', '$email1', '$name2', '$designation2', '$organization2', '$mob2', '$email2',$target_file,'$person_id','$education_id','$experience_id')";
            
            if ($conn->query($sql) === TRUE) {
    
                $per_id = mysqli_insert_id($conn);
                header('Content-Type: application/json');
                
                echo json_encode(["message"=>"success","data"=>$per_id]);
            } else {;
                echo json_encode(["message"=>"failed"]);
            }
        }

       
    }

    // Close the database connection
    $conn->close();


?>