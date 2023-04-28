<?php

include_once(__DIR__."/../vendor/autoload.php");

use App\model\usuario;

if(!isset($_SESSION['uLogado'])){ 
$_SESSION['ULogado'] = "";
}


 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
     if($_POST['nome'] == 'admin' && $_POST['pass'] == 'admin')
    {
        $uAdminPadrao = new usuario();
        $uAdminPadrao->setName('admin');
        $uAdminPadrao->setPass ('admin');
        $_SESSION['uLogado'] = $uAdminPadrao->getName();
        echo 'login realizado com sucesso';
    }
else
{
echo "Falha no Login";
}
//if( $_POST['nome'] == 'admin' && $_POST['pass'] == 'admin'){

}//if ($_SERVER['REQUEST_METHOD'] == 'POST') {