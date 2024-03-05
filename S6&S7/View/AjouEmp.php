<?php
include '../Controller/EmployeC.php';
include '../Model/Employe.php';
$error=null;
$emp=null;
if (isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['email']) && isset($_POST['DOB'])) {
   if (!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['email']) && !empty($_POST['DOB'])) {
       $emp = new Employe(null,
       $_POST['fName'],
       $_POST['lName'],
       new DateTime($_POST['DOB']),
       $_POST['email']);
       
       $empC = new EmployeC();
       $empC->addEmploy($emp);
      
       header('Location:ListEmploye.php');
    }
   else {
       $error="Missing information";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter Employe</title>
</head>
<body>
    <form action="AjouEmp.php" method="post">
        <label for="fName">Nom</label>
        <input type="text" name="fName" id="fName">
        <label for="lName">Prénom</label>
        <input type="text" name="lName" id="lName">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="DOB">Date de naissance</label>
        <input type="date" name="DOB" id="DOB">
        <input type="submit" value="Ajouter">
    </form>
    <?php  echo $error ;?>
</body>
</html>