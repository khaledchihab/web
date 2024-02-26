<?php
include '../Model/Employe.php';
include '../Controller/EmployeC.php';

$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$employe1 = new Employe($fName, $lName, $phone, $email, $dob, $pass1);

var_dump($employe1);
$employeC = new EmployeC();
$employeC->show($employe1);

?>