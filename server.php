<?php
try{
    $db = new mysqli("localhost","root","","protfolio_info");
}catch (Exception $exc){
    echo $exc->getTraceAsString();
}
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sub']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];


    $is_insert = $db->query("INSERT INTO `visitor_info`(`name`, `email`, `subject`, `description`) VALUES ('$name','$email','$sub','$msg')");

    if($is_insert == TRUE){
        include('index.php');
    }
}