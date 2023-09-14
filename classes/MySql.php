<?php 
    class MySql{

        private static $pdo;
        public static function conectar(){
           /*FORMA NÃO SEGURA. SE DER ERRO MOSTRA A SENHA
            if(isset(self::$pdo)){
                return $pdo;
            }else{
                self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD); 
            }*/
            if(self::$pdo == null){
                try{
                    //conecta usando os dados existentes no config.php
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
                }catch(Exception $e){
                    echo '<h2>Erro ao conectar!</h2>';
                }
            }
            return self::$pdo;
        }
    
    }


    //Necessário criar tabela com as seguintes informações:
        //banco de dados votacao
            //tabela tb_votos
                //colunas: id, voto[varchar(6)],horario_voto[datetime],ip_client[varchar255]
?>