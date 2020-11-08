<?php
function getNewsCount() {
    $line = 1;
       if (($handle = fopen("news.csv", "r")) !== FALSE) 
       {
         while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) 
         {
             if(empty($row[0]))
             {
                 break;
             }
           $num = count($row);          
           $line++;   
         }
         fclose($handle);
        }
        return  $line;
}

?>