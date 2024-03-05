<?php  
class Employe{

private ?int $id = null;
private ?string $fName = null;
private ?string $lName = null;
private ?string $email = null;
private ?DateTime $DOB = null;

  
public function __construct($a = null,$b,$c,$d,$e)
{
    $this->id = $a;
    $this->fName = $b;
    $this->lName = $c;
    $this->email = $e;
    $this->DOB = $d;
}
public function getId(){

    return $this->id;

}
public function getFName()
{
    return $this->fName;

}
public function getLName()
{
    return $this->lName;

}
public function getEmail()
{
    return $this->email;

}
public function getDOB()
{
    return $this->DOB;

}
public function setId($id)
{
    $this->id = $id;

}
public function setFName($fName)
{
    $this->fName = $fName;

}
public function setLName($lName)
{
    $this->lName = $lName;

}
public function setEmail($email)
{
    $this->email = $email;

}
public function setDOB($DOB)
{
    $this->DOB = $DOB;

}   
}
?>
