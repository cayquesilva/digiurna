<?php

    class Painel{

        public static function insertVoto($arr){
            $nome_tabela = 'tb_votos';
            $query = "INSERT INTO `$nome_tabela` VALUES (null,?,?,?)";
            $certo = true;

            $parametros[] = $arr['voto'];

            if($certo){
                $parametros[] = date("Y-m-d H:i:s");
                $parametros[] = Painel::pegaIp();
                $sql = MySql::conectar()->prepare($query);
                //usa o array criado para substituir as "?"
                $sql->execute($parametros);
            };      
            return $certo;
        }

        public static function pegaIp(){
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if(isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }

        public static function alerta($tipo,$mensagem){
            if($tipo == 'erro'){
                echo '<div class="box-alerta erro"><i class="fa fa-times"></i> '.$mensagem.'</div>';
            }
        }
    }
?>