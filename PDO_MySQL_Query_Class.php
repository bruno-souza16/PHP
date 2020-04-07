<?php
    include_once('.\backend\PDO_MySql_Conn_Class.php');

    Class PDO_Queries
    {
        var $query = 'SELECT campo1, campo2 FROM tabela1 WHERE (campo4 LIKE "clausula1") GROUP BY campo2 ORDER BY campo2';

        function Query()
        {
            $c = new PDO_Connection();
           
            $connection = $c->Connect();
            $result = $connection->prepare($query);
            $result->execute();
            $num_count = $result->rowCount();
            $row = $result-> fetch( \PDO::FETCH_ASSOC );

            if($num_count > 0){	  
                
                $cont = 0;
                do{	
                    $campo1[$cont] = $row['campo1'];								
                    $campo2[$cont] = floatval($row['campo2']);
                    $campo3[$cont] = intval($row['campo3']);
                    
                    $cont++;
                }while($row = $result-> fetch(\PDO::FETCH_ASSOC));

                $cont = 0;
                do{				
                    '<p>'.$campo1[$cont].' - '.$campo2[$cont].' - '.$campo3[$cont].'</p>'
                    $cont++;
                }while($cont < $num_count);          
            }else{
                echo "<p>Sem dados</p><";
            }   
        }
    }
?>