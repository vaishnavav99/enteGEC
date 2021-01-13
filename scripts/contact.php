<?php
require_once("connect_Db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fname = $_POST['fname']; 
    $mname = $_POST['mname']; 
    $lname = $_POST['lname']; 
    $stream = $_POST['stream'];
    $batch = $_POST['batch'];
    $working_value = $_POST['working'];
    $job_desc = $_POST['job_desc'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $connectDb = new Connect_Db();
    $Conn = $connectDb->Connect();
    $sql = "INSERT INTO `gec` (`sl_no`, `fname`, `mname`, `lname`, `stream`, `batch`, `working`, `job_desc`, `email`, `password`) VALUES (NULL, '".$fname."', '".$mname."', '".$lname."', '".$stream."', '".$batch."', '".$working_value."', '".$job_desc."', '".$email."', '".$hash."');";

    if($result = $Conn->query($sql))
    {	
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully Enterd');
            window.location.href='http://localhost/entegec/';
            </script>");
    } 
    else
    {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Error Occured. Please Enter Once More !!');
            window.location.href='http://localhost/entegec/';
            </script>");   
    }
    $connectDb->Disconnect();
}

?>