<!doctype php>
<php lang="en">
<head>
    <?php require_once('blocks/head.php'); ?>
    <meta property="og:title" content="MSAC News" />
    <meta name="description" content="News of MILITARY AND SPORTS ALL-ROUND COMPETITION">
    <meta property="og:image" content="http://msac.kiev.ua/img/logo.png" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title>News MSAC</title>   
</head>
<style>
    #news-div img{
        height:150px; 
        margin-bottom: 20px; 
        float: left;
        margin-right: 10px;
    }
    @media screen and (min-width: 992px) {
    p{
        line-height:3px;
    }
    }
</style>

<body data-spy="scroll" data-target=".navbar">
    <!-- Navigation -->
    <?php require_once('blocks/navigation.php'); ?>

    <!-- Intro Header -->
       <!-- About Section -->
       <section id="news" class="content-section text-left color-grey-2">
            <div class="overlay">
                <div class="download-section">
                    <div class="container">
                           <div style="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                               <h1><strong>MSAC News</strong></h1>
                            </div>
                        <hr>

<?php                         
       $line = 1;
       if (($handle = fopen("news.csv", "r")) !== FALSE) 
       {
         while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) 
         {
             if(empty($row[0])){
                 break;
                 echo "null: ".$row[0];
             }
           $num = count($row);
           echo " <div class='container'>
                   <div class='row'>
                     <div id='news-div' class='col-lg-12 col-sm-12 col-xs-12'><br>
                        <img src='img/news/news-".$row[0].".png' class='img-responsive'><br>
                        <p>".$row[1]."</p>
                        <p> Date: ".$row[4]."<p> <br>
                        <a  href='news-one.php?id=".$row[0]."' target='_blank' class='btn btn-default btn-lg'>More info</a>
                     </div>
                    </div> 
                  </div><hr>";
           $line++;   
         }
         fclose($handle);
       }
?>
       </div> 
      </div> 
     </div>
    </section>       
</body>      
     <!-- Footer -->
<?php require_once('blocks/footer-contacts.php'); ?>
<?php require_once('blocks/footer.php'); ?>
<?php require_once('blocks/scripts.php'); ?>
</body>
</php>