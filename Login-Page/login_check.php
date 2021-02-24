<?php
//print_r($_POST);
include ('db.php');
if (isset($_POST['type'])) {
    // echo "asd";
    if ($_POST['type'] == 'login') {
        
        session_start();
     
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from users where email='$email' and password='$password'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                echo json_encode(array("statusCode" => "sucess"));
                $_SESSION["email"] = $email;
                header('Location: '.'index.php');
            }
        } else {
            echo json_encode(array("statusCode" => "fail"));
            $msg = "password is incorrect. please try again";
            // $_SESSION['msg-login'] = $msg;
            header('Location: '.'Login.php');
        }
    }
    if ($_POST['type'] == 'registration') {
      
        session_start();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql_check = "SELECT * FROM users where email='$email' ";
       // echo $sql_check;
        $result_check = mysqli_query($conn, $sql_check);
        if (mysqli_num_rows($result_check) > 0) {
            $row = mysqli_fetch_assoc($result_check);
       
            if ($email == $row['email']) {
                header('Location: '.'Login.php');
                echo json_encode(array("statusCode" => "already_exists"));
            }
        }
 
        
        else {
            $sql = "INSERT INTO users (name, password,email)
VALUES ('$name','$password','$email')";
            if (mysqli_query($conn, $sql)) {
                echo json_encode(array("statusCode" => "sucess"));
                $_SESSION["email"] = $email;
                header('Location: '.'index.php');
            } else {
                echo json_encode(array("statusCode" => "fail"));
                header('Location: '.'Login.php');
               // header('Location: '.'Login.php?msg=Somthing is Missing');
            }
        }
    }
}
    ?>