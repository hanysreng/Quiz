

<?php 
require "src/GetValue_class.php";

if(isset($_POST['btn'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $email = $_POST['email'];

     echo  getValue();
    
}