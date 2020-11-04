<?php
require_once("connect_Db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name']; 
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $branch = $_POST['branch'];
    $batch = $_POST['batch'];
    $email = $_POST['email'];
    $mobile = $_POST['mno1'];
    $f_mobile = $_POST['mno2'];
    $higher_education = $_POST['edu'];
    $working = $_POST['working'];

    $connectDb = new Connect_Db();
    $Conn = $connectDb->Connect();
    $sql = "INSERT INTO `gec` (`sl_no`, `name`, `address`, `gender`, `branch`, `batch`, `email`, `mobile`, `f_mobile`, `higher_education`, `working`) VALUES (NULL, '".$name."', '".$address."', '".$gender."', '".$branch."', '".$batch."', '".$email."', '".$mobile."', '".$f_mobile."', '".$higher_education."', '".$working."');";

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