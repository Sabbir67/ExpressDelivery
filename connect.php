<?
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $phoneNo = $_POST['phoneNo'];

    // Database Connection

    $conn = new mysqli('localhost', 'root', '', 'express');
    if($conn -> connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
       $stmt = $conn-> prepare("insert into frontpagequery(email, fullName, phoneNo ) values(?,?,?) ");
       $stmt -> bind_param("sss", $email, $fullName , $phoneNo);
       $stmt-> execute();
       echo "Registration Successfully ......"; 
       $stmt -> close();
       $conn -> close();
    }
?>