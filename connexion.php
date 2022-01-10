<?php
try{
    $con = new PDO("mysql:host=localhost;dbname=ecom","root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); 
}catch(Exeption $e)
{
    $e->getMessage();
}

?>
