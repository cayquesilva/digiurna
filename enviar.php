<?php 
    include('config.php');
    if(isset($_POST)){
        if(!Painel::insertVoto($_POST)){
            Painel::alerta('erro','Ocorreu um erro ao Aprovar!');
        }   
    }
?>