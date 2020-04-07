<?php
    Class PDO_Connection
    {
        var $host = 'host_ou_ip';
        var $database = 'nome_do_banco';
        var $username = 'nome_usuario';
        var $password = 'senha';

        function Connect()
        {
            try
            {
                $conn = new PDO('mysql:host=' .$host. ';dbname=' .$database. ', ' $username', ' .$password.);
            }
            catch(PDOException $e)
            {
                echo 'ERRO: ' . $e->getMessage();
                $conn = null;
            }
            return $conn;
        }
    }     
?>