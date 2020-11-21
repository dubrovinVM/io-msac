<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Viktor Dubrovin">
<meta name="keywords" Content="msac, sport, fighters, fight in ukraine, martial, arts">
<meta property="og:description" content="MSAC Documents" />
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/basicelement.css" rel="stylesheet">
<!-- Custom Fonts -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> 
<meta property="og:title" content="MSAC Documents" />
<meta name="description" content="MSAC Documents">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<title>Black Documents</title>  

<body data-spy="scroll" data-target=".navbar">
 <!-- Navigation -->
 <?php require_once('blocks/navigation.php'); ?>

<!-- Intro Header -->
   <!-- About Section -->
   <section id="news" class="content-section text-left color-grey-2">
        <div class="overlay">
            <div class="download-section">
                <div class="container">
                       <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                          <div style="">
                              <img src="img/documents.png" style="max-width:350px; max-height:300px;"/>
                          </div><br><br>
                        </div>
                        <h1>MSAC Documents:</h1>

<?php    
  $dir = "files/public/*";
  foreach(glob($dir) as $file) 
  {  
      $pathinfo = pathinfo($file);
      $fileinfo = $pathinfo['filename'];
      echo "<p>- <a href='https://www.io-msac.com/files/public/$fileinfo'>$fileinfo</a></p>";            
  }
?>

       </div> 
      </div> 
      <hr>
     </div>      
    </section>       
   
</body>      
     <!-- Footer -->
<?php require_once('blocks/footer-contacts.php'); ?>
<?php require_once('blocks/footer.php'); ?>
<?php require_once('blocks/scripts.php'); ?>
</body>
