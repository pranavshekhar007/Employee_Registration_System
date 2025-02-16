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
        $phd1 = mysqli_real_escape_string($conn, $_POST['phd1']) ;
        $phd2 = mysqli_real_escape_string($conn, $_POST['phd2']);
        $phd3 = mysqli_real_escape_string($conn, $_POST['phd3']);
        $phd4 = $_POST['phd4'];
        $phd5 = $_POST['phd5'] ;
        $phd6 = mysqli_real_escape_string($conn, $_POST['phd6']) ;
        $pg1 = mysqli_real_escape_string($conn, $_POST['pg1']) ;
        $pg2 = mysqli_real_escape_string($conn, $_POST['pg2']) ;
        $pg3 = mysqli_real_escape_string($conn, $_POST['pg3']) ;
        $pg4 = $_POST['pg4'] ;
        $pg5 = $_POST['pg5'] ;
        $pg6 = mysqli_real_escape_string($conn, $_POST['pg6']) ;
        $ug1 = mysqli_real_escape_string($conn, $_POST['ug1']) ;
        $ug2 = mysqli_real_escape_string($conn, $_POST['ug2']) ;
        $ug3 = mysqli_real_escape_string($conn, $_POST['ug3']) ;
        $ug4 = $_POST['ug4'];
        $ug5 = $_POST['ug5'];
        $ug6 = mysqli_real_escape_string($conn, $_POST['ug6']);
        $marks_10th1 = mysqli_real_escape_string($conn, $_POST['marks_10th1']);
        $marks_10th2 = mysqli_real_escape_string($conn, $_POST['marks_10th2']);
        $marks_10th3 = mysqli_real_escape_string($conn, $_POST['marks_10th3']);
        $marks_10th4 = $_POST['marks_10th4'] ;
        $marks_10th5 = $_POST['marks_10th5'] ;
        $marks_10th6 = mysqli_real_escape_string($conn, $_POST['marks_10th6']);
        $marks_12th1 = mysqli_real_escape_string($conn, $_POST['marks_12th1']);
        $marks_12th2 = mysqli_real_escape_string($conn, $_POST['marks_12th2']);
        $marks_12th3 = mysqli_real_escape_string($conn, $_POST['marks_12th3']);
        $marks_12th4 = $_POST['marks_12th4'] ;
        $marks_12th5 = $_POST['marks_12th5'] ;
        $marks_12th6 = mysqli_real_escape_string($conn, $_POST['marks_12th6']) ;
        $any_other1 = mysqli_real_escape_string($conn, $_POST['any_other1']);
        $any_other2 = mysqli_real_escape_string($conn, $_POST['any_other2'] );
        $any_other3 = mysqli_real_escape_string($conn, $_POST['any_other3']);
        $any_other4 = $_POST['any_other4'];
        $any_other5 = $_POST['any_other5'] ;
        $person_id = $_POST['person_id'] ;
        $any_other6 = mysqli_real_escape_string($conn, $_POST['any_other6']) ;
        //$last_id = $_POST['last_id'] ;
       
        $sql = "SELECT * FROM educational_details WHERE person_id = '$person_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            $updateSql = "UPDATE educational_details 
              SET phd1 = '$phd1',
                  phd2 = '$phd2',
                  phd3 = '$phd3',
                  phd4 = '$phd4',
                  phd5 = '$phd5',
                  phd6 = '$phd6',
                  pg1 = '$pg1',
                  pg2 = '$pg2',
                  pg3 = '$pg3',
                  pg4 = '$pg4',
                  pg5 = '$pg5',
                  pg6 = '$pg6',
                  ug1 = '$ug1',
                  ug2 = '$ug2',
                  ug3 = '$ug3',
                  ug4 = '$ug4',
                  ug5 = '$ug5',
                  ug6 = '$ug6',
                  marks_10th1 = '$marks_10th1',
                  marks_10th2 = '$marks_10th2',
                  marks_10th3 = '$marks_10th3',
                  marks_10th4 = '$marks_10th4',
                  marks_10th5 = '$marks_10th5',
                  marks_10th6 = '$marks_10th6',
                  marks_12th1 = '$marks_12th1',
                  marks_12th2 = '$marks_12th2',
                  marks_12th3 = '$marks_12th3',
                  marks_12th4 = '$marks_12th4',
                  marks_12th5 = '$marks_12th5',
                  marks_12th6 = '$marks_12th6',
                  any_other1 = '$any_other1',
                  any_other2 = '$any_other2',
                  any_other3 = '$any_other3',
                  any_other4 = '$any_other4',
                  any_other5 = '$any_other5',
                  any_other6 = '$any_other6'
              WHERE person_id = '$person_id'";

            
            if ($conn->query($updateSql) === TRUE) {
                // Fetch the person_id after the update
                $per_id = $person_id;
                header('Content-Type: application/json');
                echo json_encode(["message" => "success", "data" => $per_id]);
            } else {
                echo json_encode(["message" => "failed"]);
            }
            
        }else{
            
        //print_r(mysqli_insert_id($conn)); die();
        $sql1 = "INSERT INTO educational_details (person_id,phd1, phd2, phd3, phd4, phd5, phd6, pg1, pg2, pg3, pg4, pg5, pg6, ug1, ug2, ug3, ug4, ug5, ug6, marks_10th1, marks_10th2, marks_10th3, marks_10th4, marks_10th5, marks_10th6, marks_12th1, marks_12th2, marks_12th3, marks_12th4, marks_12th5, marks_12th6, any_other1, any_other2, any_other3, any_other4, any_other5, any_other6)
        VALUES ('$person_id','$phd1', '$phd2', '$phd3', '$phd4', '$phd5', '$phd6', '$pg1', '$pg2', '$pg3', '$pg4', '$pg5', '$pg6', '$ug1', '$ug2', '$ug3', '$ug4', '$ug5', '$ug6', '$marks_10th1', '$marks_10th2', '$marks_10th3', '$marks_10th4', '$marks_10th5', '$marks_10th6', '$marks_12th1', '$marks_12th2', '$marks_12th3', '$marks_12th4', '$marks_12th5', '$marks_12th6', '$any_other1', '$any_other2', '$any_other3', '$any_other4', '$any_other5', '$any_other6')";

            if ($conn->query($sql1) === TRUE) {

                $per_id = mysqli_insert_id($conn);
                header('Content-Type: application/json');
                
                echo json_encode(["message"=>"success","data"=>$per_id]);
            } else {
                echo json_encode(["message"=>"failed"]);
            }

        }

    }


    // Close the database connection
    $conn->close();


?>