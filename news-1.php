<!doctype php>
<php lang="en">
<head>
    <?php require_once('blocks/head.php'); ?>
    <meta property="og:title" content="World Championship 2019" />
    <meta name="description" content="World Championship 2019 of MILITARY AND SPORTS ALL-ROUND COMPETITION">
    <meta property="og:image" content="img/news/news-1.png" />
    <title>World Championship 2019</title>
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
                    <h1 class="brand-heading">World Championship</h1>
                    <img src="img/news/news-1.png" style="width:40%; margin-bottom: 10px; margin-right: 10px; float:left;"><br>
                    <p class="intro-text">The 14th World Championship in Military and Sports All-round competitions (MSAC) was held in Ukraine in the city of Kharkov from November 22 to 24, 2019</p>
                    <p>About 300 athletes from 16 countries of the world took part in the competitions.</p>
                    <p>The fights were very intense and exciting. Also, high-level masters competed in versions of the demonstration of technology - kata and combat techniques.</p>
                    <p>In the overall classification, the command places were distributed in an offensive manner: </p> 
                    <p>- 1st place - team of Ukraine</p>
                    <p>- 2nd place - the team of Belarus</p>
                    <p>- 3rd place - Turkmenistan team </p>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="photo" class="container-fluid content-section">

    <section class="container-fluid content-section about text-center">
        <div style="text-align: center">
            <h1>Gallery:</h1>
        </div>
        <div>
            <?php
                $dir = "img/2019/"; // Папка с изображениями
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
             ?>           
        </div>
    </section>
</section>
<?php require_once('blocks/footer.php'); ?>
<?php require_once('blocks/scripts.php'); ?>
</body>
</php>
