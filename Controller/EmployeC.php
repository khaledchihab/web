<?php
include '../Model/Employe.php';
class EmployeC {

    function show($Employe) {

        echo '
        <table border="1">
        <tr>
        <td>lastname</td>
        <td>firstname</td>
        <td>password</td>
        <td>DOB</td>
        <td>email</td>
        <td>phone</td>
        
        
        </tr>
        <tr>
        <td>'. $Employe->getLastName() .'</td>
        <td>'. $Employe->getFirstName() .'</td>
        <td>'. $Employe->getPassword() .'</td>
        <td>'. $Employe->getDOB() .'</td>
        <td>'. $Employe->getEmail() .'</td>
        <td>'. $Employe->getPhone() .'</td>
        </tr>
        </table>
        ';
    }
}



?>