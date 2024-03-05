<?php
include '../config.php';

class EmployeC
{
    public function afficherEmploye()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }
    public function supprimerEmploye($id)
    {
        $sql = "DELETE FROM employe WHERE ID = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }
    public function addEmploy($emp){
        var_dump($emp);
        $sql="INSERT INTO employe VALUES(NULL,:fName,:lName,:email,:DOB)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->execute([
                'fName' => $emp->getFName(),
                'lName' => $emp->getLName(),
                'email' => $emp->getEmail(),
                'DOB' => $emp->getDOB()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            die('Erreur' . $e->getMessage());
        }
    }
}
?>