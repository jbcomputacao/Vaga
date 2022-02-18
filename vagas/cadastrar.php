<?php

require __DIR__.'/vendor/autoload.php'; //chama as classes

use \App\Entity\Vaga;
if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

    $obVagas = new Vaga;
    $obVagas->titulo = $_POST['titulo'];
    $obVagas->descricao = $_POST['descricao'];
    $obVagas->ativo = $_POST['ativo'];
    

    echo "<pre>"; print_r($obVaga); echo"</pre>"; exit;

}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';



