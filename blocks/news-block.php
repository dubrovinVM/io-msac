<?php 

       include 'blocks/php.php';    
       $newsCount = getNewsCount();  
       $line = 1;
       if (($handle = fopen("news.csv", "r")) !== FALSE) 
       {
         while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) 
         {
             if(empty($row[0]))
             {
                 break;
             }
             if($line >= $newsCount - 2){
                echo "   <div class='col-lg-6'><br>
                             <img src='img/news/news-".$row[0].".png' style='height:150px; margin-bottom: 20px;'><br>
                             <p>".$row[1]."</p>
                             <a href='news-one.php?id=".$row[0]."' target='_blank' class='btn btn-default btn-lg'>More info</a>
                         </div>";
             }
           $num = count($row);          
           $line++;   
         }
         fclose($handle);
        }      
?>