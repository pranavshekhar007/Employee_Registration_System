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
        
        $acm_org1 =  mysqli_real_escape_string($conn, $_POST['acm_org1']);
        $acm_post1 = mysqli_real_escape_string($conn, $_POST['acm_post1']) ;
        $acm_joiningDate1 = $_POST['acm_joiningDate1']  ;
        $acm_leavingDate1 = $_POST['acm_leavingDate1'] ;
        $acm_salary1 = $_POST['acm_salary1']  ;
        $acm_org2 = mysqli_real_escape_string($conn, $_POST['acm_org2'])  ;
        $acm_post2 = mysqli_real_escape_string($conn, $_POST['acm_post2']) ;
        $acm_joiningDdate2 = $_POST['acm_joiningDdate2']  ;
        $acm_leavingDate2 = $_POST['acm_leavingDate2']  ;
        $acm_salary2 = $_POST['acm_salary2']  ;
        $acm_org3 = mysqli_real_escape_string($conn, $_POST['acm_org3'])  ;
        $acm_post3 = mysqli_real_escape_string($conn, $_POST['acm_post3']) ;
        $acm_joiningDdate3 = $_POST['acm_joiningDdate3']  ;
        $acm_leavingDate3 = $_POST['acm_leavingDate3']  ;
        $acm_salary3 = $_POST['acm_salary3'] ;
        $acm_org4 = mysqli_real_escape_string($conn, $_POST['acm_org4']) ;
        $acm_post4 = mysqli_real_escape_string($conn, $_POST['acm_post4']) ;
        $acm_joiningDdate4 = $_POST['acm_joiningDdate4']  ;
        $acm_leavingDate4 = $_POST['acm_leavingDate4']  ;
        $acm_salary4 = $_POST['acm_salary4']  ;
        $acm_org5 = mysqli_real_escape_string($conn, $_POST['acm_org5'])  ;
        $acm_post5 = mysqli_real_escape_string($conn, $_POST['acm_post5'])  ;
        $acm_joiningDdate5 = $_POST['acm_joiningDdate5'] ;
        $acm_leavingDate5 = $_POST['acm_leavingDate5'] ;
        $acm_salary5 = $_POST['acm_salary5']  ;
        $ind_org1 = mysqli_real_escape_string($conn, $_POST['ind_org1']) ;
        $ind_post1 = mysqli_real_escape_string($conn, $_POST['ind_post1']);
        $ind_joiningDate1 = $_POST['ind_joiningDate1'] ;
        $ind_leavingDate1 = $_POST['ind_leavingDate1'] ;
        $ind_salary1 = $_POST['ind_salary1'];
        $ind_org2 = mysqli_real_escape_string($conn, $_POST['ind_org2']);
        $ind_post2 = mysqli_real_escape_string($conn, $_POST['ind_post2']) ;
        $ind_joiningDate2 = $_POST['ind_joiningDate2'];
        $ind_leavingDate2 = $_POST['ind_leavingDate2'] ;
        $ind_salary2 = $_POST['ind_salary2'] ;
        $ind_org3 = mysqli_real_escape_string($conn, $_POST['ind_org3']);
        $ind_post3 = mysqli_real_escape_string($conn, $_POST['ind_post3']);
        $ind_joiningDate3 = $_POST['ind_joiningDate3'] ;
        $ind_leavingDate3 = $_POST['ind_leavingDate3'];
        $ind_salary3 = $_POST['ind_salary3'] ;
        $ind_org4 = mysqli_real_escape_string($conn, $_POST['ind_org4']) ;
        $ind_post4 = mysqli_real_escape_string($conn, $_POST['ind_post4']);
        $ind_joiningDate4 = $_POST['ind_joiningDate4']  ;
        $ind_leavingDate4 = $_POST['ind_leavingDate4'] ;
        $ind_salary4 = $_POST['ind_salary4'];
        $ind_org5 = mysqli_real_escape_string($conn, $_POST['ind_org5']) ;
        $ind_post5 = mysqli_real_escape_string($conn, $_POST['ind_post5']);
        $ind_joiningDate5 = $_POST['ind_joiningDate5'];
        $ind_leavingDate5 = $_POST['ind_leavingDate5']; 
        $ind_salary5 = $_POST['ind_salary5'];
        $person_id = $_POST['edu_person_id'];
        $education_id = $_POST['education_id'];
        $experience = $_POST['experience'] ;
        // $last_id = $_POST['last_id'] ;
      
        // Check if the record already exists
        $checkSql = "SELECT * FROM academic_experience WHERE person_id = '$person_id' AND education_id = '$education_id'";
        $checkResult = $conn->query($checkSql);

        if ($checkResult->num_rows > 0) {
            // Record exists, generate update query
            $updateSql = "UPDATE academic_experience SET
                experience = '$experience',
                acm_org1 = '$acm_org1',
                acm_post1 = '$acm_post1',
                acm_joiningDate1 = '$acm_joiningDate1',
                acm_leavingDate1 = '$acm_leavingDate1',
                acm_salary1 = '$acm_salary1',
                acm_org2 = '$acm_org2',
                acm_post2 = '$acm_post2',
                acm_joiningDdate2 = '$acm_joiningDdate2',
                acm_leavingDate2 = '$acm_leavingDate2',
                acm_salary2 = '$acm_salary2',
                acm_org3 = '$acm_org3',
                acm_post3 = '$acm_post3',
                acm_joiningDdate3 = '$acm_joiningDdate3',
                acm_leavingDate3 = '$acm_leavingDate3',
                acm_salary3 = '$acm_salary3',
                acm_org4 = '$acm_org4',
                acm_post4 = '$acm_post4',
                acm_joiningDdate4 = '$acm_joiningDdate4',
                acm_leavingDate4 = '$acm_leavingDate4',
                acm_salary4 = '$acm_salary4',
                acm_org5 = '$acm_org5',
                acm_post5 = '$acm_post5',
                acm_joiningDdate5 = '$acm_joiningDdate5',
                acm_leavingDate5 = '$acm_leavingDate5',
                acm_salary5 = '$acm_salary5',
                ind_org1 = '$ind_org1',
                ind_post1 = '$ind_post1',
                ind_joiningDate1 = '$ind_joiningDate1',
                ind_leavingDate1 = '$ind_leavingDate1',
                ind_salary1 = '$ind_salary1',
                ind_org2 = '$ind_org2',
                ind_post2 = '$ind_post2',
                ind_joiningDate2 = '$ind_joiningDate2',
                ind_leavingDate2 = '$ind_leavingDate2',
                ind_salary2 = '$ind_salary2',
                ind_org3 = '$ind_org3',
                ind_post3 = '$ind_post3',
                ind_joiningDate3 = '$ind_joiningDate3',
                ind_leavingDate3 = '$ind_leavingDate3',
                ind_salary3 = '$ind_salary3',
                ind_org4 = '$ind_org4',
                ind_post4 = '$ind_post4',
                ind_joiningDate4 = '$ind_joiningDate4',
                ind_leavingDate4 = '$ind_leavingDate4',
                ind_salary4 = '$ind_salary4',
                ind_org5 = '$ind_org5',
                ind_post5 = '$ind_post5',
                ind_joiningDate5 = '$ind_joiningDate5',
                ind_leavingDate5 = '$ind_leavingDate5',
                ind_salary5 = '$ind_salary5'
                WHERE person_id = '$person_id' AND education_id = '$education_id'";

            if ($conn->query($updateSql) === TRUE) {
                $last_id = $person_id; // Using person_id as the last insert ID
                header('Content-Type: application/json');
                echo json_encode(["message" => "success", "data" => $last_id]);
            } else {
                echo json_encode(["message" => "failed", "error" => $conn->error]);
            }
        }else{
                
        $sql = "INSERT INTO academic_experience (experience,person_id,education_id, acm_org1, acm_post1, acm_joiningDate1, acm_leavingDate1, acm_salary1, acm_org2, acm_post2, acm_joiningDdate2, acm_leavingDate2, acm_salary2, acm_org3, acm_post3, acm_joiningDdate3, acm_leavingDate3, acm_salary3, acm_org4, acm_post4, acm_joiningDdate4, acm_leavingDate4, acm_salary4, acm_org5, acm_post5, acm_joiningDdate5, acm_leavingDate5, acm_salary5,
        ind_org1, ind_post1, ind_joiningDate1, ind_leavingDate1, ind_salary1, ind_org2, ind_post2, ind_joiningDate2, ind_leavingDate2, ind_salary2, ind_org3, ind_post3, ind_joiningDate3, ind_leavingDate3, ind_salary3, ind_org4, ind_post4, ind_joiningDate4, ind_leavingDate4, ind_salary4, ind_org5, ind_post5, ind_joiningDate5, ind_leavingDate5, ind_salary5)
        VALUES ('$experience','$person_id','$education_id','$acm_org1', '$acm_post1', '$acm_joiningDate1', '$acm_leavingDate1', '$acm_salary1', '$acm_org2', '$acm_post2', '$acm_joiningDdate2', '$acm_leavingDate2', '$acm_salary2', '$acm_org3', '$acm_post3', '$acm_joiningDdate3', '$acm_leavingDate3', '$acm_salary3', '$acm_org4', '$acm_post4', '$acm_joiningDdate4', '$acm_leavingDate4', '$acm_salary4', '$acm_org5', '$acm_post5', '$acm_joiningDdate5', '$acm_leavingDate5', '$acm_salary5', 
        '$ind_org1', '$ind_post1', '$ind_joiningDate1', '$ind_leavingDate1', '$ind_salary1', '$ind_org2', '$ind_post2', '$ind_joiningDate2', '$ind_leavingDate2', '$ind_salary2', '$ind_org3', '$ind_post3', '$ind_joiningDate3', '$ind_leavingDate3', '$ind_salary3', '$ind_org4', '$ind_post4', '$ind_joiningDate4', '$ind_leavingDate4', '$ind_salary4', '$ind_org5', '$ind_post5', '$ind_joiningDate5', '$ind_leavingDate5', '$ind_salary5')";

        if ($conn->query($sql) === TRUE) {

            $per_id = mysqli_insert_id($conn);
            header('Content-Type: application/json');
            
            echo json_encode(["message"=>"success","data"=>$per_id]);
        } else {;
            echo json_encode(["message"=>"failed"]);
        }

            // $experience_id = mysqli_insert_id($conn);
            // echo $experience_id;
        }
        
    }

    // Close the database connection
    $conn->close();

?>