<?php
$fullname= $_POST['fullname'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$appointment= $_POST['appointment'];
$text= $_POST['text'];

$conn = new mysqli('localhost','root','','anotherlife');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else
{
    $stmt = $conn->prepare("insert into appointment(fullname,phone,email,appointment,text) values(?,?,?,?,?)");
    $stmt->bind_param("sisss",$fullname,$phone,$email,$appointment,$text);
    $stmt->execute();
    echo "Appointment Done";
    $stmt->close();
    $conn->close();
}
//Database Connection
?>