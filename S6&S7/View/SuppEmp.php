<?php
include '../Controller/EmployeC.php';
$empC = new EmployeC();
$empC->supprimerEmploye($_GET['id']);
header('Location:ListEmploye.php');
?>