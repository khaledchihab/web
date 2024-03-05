<?php
include '../Controller/EmployeC.php';
$empC = new EmployeC();
$liste = $empC->afficherEmploye();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des employés</title>       
</head>
<body>
    <h1>Liste des employés</h1>
  
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Date de naissance</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php
        foreach ($liste as $emp) {
        ?>
        <tr>
            <td><?php echo $emp['ID']; ?></td>
            <td><?php echo $emp['fName']; ?></td>
            <td><?php echo $emp['lName']; ?></td>
            <td><?php echo $emp['email']; ?></td>
            <td><?php echo $emp['DOB']; ?></td>
            <td><input type="submit" value="Modifier"></td>
            <td><a href="SuppEmp.php?id=<?php echo $emp['ID']; ?>">Supprimer</a></td>
            
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
