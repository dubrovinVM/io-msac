<!doctype php>
<php lang="en">
<?php 
$id = isset($_GET["id"]) ? $_GET["id"] : "%" ;
if($id==="%")
{
  redirect("news.php");
}
if (($handle = fopen("news.csv", "r")) !== FALSE) 
    {
        while (($row = fgetcsv($handle, 1000, ";")) !== FALSE) 
        {
             if(empty($row[0]))
             {
                break;
             }

             if($row[0]===$id)
             {
                 $title=$row[1];
                 $text=$row[2];
                 $gallery=$row[3];
                 $date=$row[4];
             }
        }
     fclose($handle);
    }
?>
<head>
<?php require_once('blocks/head.php'); ?>
<?php echo "<meta property='og:image'       content='img/news/news-".$id.".png' />"; ?>
<?php echo "<meta property='og:title'       content='".$title."' />"; ?>
<?php echo "<meta property='og:description' content='".$title."' />"; ?>
<?php echo "<meta name='description'        content='".$title."' />"; ?>
<?php echo "<title>".$title."</title>'"; ?>   
</head>
<body data-spy="scroll" data-target=".navbar">
<!-- Navigation -->
<?php require_once('blocks/navigation.php'); ?>

<!-- Intro Header -->
<header class="intro-news" id="intro-news">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  text-left">                       
                        <img style="height: 200px; margin-top: 0px; margin-bottom: 15px;" src="/img/logo.svg">
                        <h1 class="brand-heading"><?php echo $title; ?></h1>
                        <img src="img/news/news-<?php echo $id; ?>.png" style="width:40%; margin-bottom: 10px; margin-right: 15px; float:left;"><br>
                        <p class="intro-text">
                             <?php echo $text; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</header>
     
            <?php
                if(!empty($gallery)){
                    echo " <section id='photo' class='container-fluid content-section'>
                             <section class='container-fluid content-section about text-center'>  
                                <div style='text-align: center'><h1>Gallery:</h1></div>
                                   <div>";
                    $dir = $gallery; // Папка с изображениями
                    $files = scandir($dir); // Берём всё содержимое директории
                    echo "";
                    $k = 0; // Вспомогательный счётчик для перехода на новые строки
                    for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
                        if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
                            $path = $dir.$files[$i]; // Получаем путь к картинке
                            echo " <a style='margin-top:150px;'  data-fancybox='gallery' href='$path'>
                                        <img style='height:180px; width:260px; margin:20px 20px 0 0' src='$path'>
                                   </a>";
                            $k++; // Увеличиваем вспомогательный счётчик
                        }
                    }
                
                    echo "     </div>    
                             </section>
                           </section>";
                    }
             ?>    

<div class="intro-body">
    <div class="container">
        <div class="col-md-12 text-left">
            <a href="index.php" target="_blank" class="btn btn-default btn-lg">Back to main page</a>
        </div>
    </div>
</div> 
<hr>   
<?php require_once('blocks/footer.php'); ?>
<?php require_once('blocks/scripts.php'); ?>
</body>