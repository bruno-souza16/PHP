<?php
    Class Create_MButtons
    {
        function MButtons_Infos()
        {
            $count = 0;
            $array[] = array();
            $name[] = array();
            $path = "C:\\"."\\pasta1\\"."\\pasta2\\"."\\pasta3\\"."\\";
            $diretorio = dir($path);
            while($arquivo = $diretorio -> read()){
                $array[$count] = mb_convert_encoding($path.$arquivo, 'utf-8', 'latin1');
                $name[$count] = $arquivo;
                $count++;	
            }
            for ($i = 2; $i<$count  ; $i++) {	
                echo '<a'.$array[$i].'>'.$name[$i].'</a>';           
            }
            $diretorio -> close();
        }  
    }
?>