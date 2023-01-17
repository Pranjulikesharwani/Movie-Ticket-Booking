<?php
$email = $_POST['email'];
$password = $_POST['password'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("Login (email,password) value(?,?)");
    $stmt->bind_param("sssssi", $email, $password);
    $stmt->execute();
    echo "Login successfully....";
    $stmt->close();
    $conn->close();
}
?>