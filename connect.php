<?php
$name = $_POST['name'];
$name = $_POST['email'];
$name = $_POST['phone'];
$name = $_POST['textarea'];

//Database Connection
$conn= new mysqli('localhost','root','','parks');
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(name,email,phone,textarea)
    values(?,?,?,?)");
    
    $stmt->bind_param("sssi",$name,$email,$phone,$textarea);
    $stmt->execute();
    echo "Registration Successfully....";
    $stmt->close();
    $conn->close();
}

?>