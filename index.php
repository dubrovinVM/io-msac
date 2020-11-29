<!doctype php>
<php lang="en">
<head>
    <?php require_once('blocks/head.php'); ?>
    <meta property="og:title" content="MSAC" />
    <meta name="description" content="MILITARY AND SPORTS ALL-ROUND COMPETITION">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <title>MSAC</title>   
</head>

<body data-spy="scroll" data-target=".navbar">
    <!-- Navigation -->
    <?php require_once('blocks/navigation.php'); ?>

    <!-- Intro Header -->
    <header class="intro" id="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img style="height: 300px; margin-top: 0px;" src="/img/logo.svg">
                        <h1 class="brand-heading">MSAC</h1>
                        <p class="intro-text">PUBLIC ASSOCIATION
                            <br>
                            <h2>"INTERNATIONAL ORGANIZATION OF MILITARY AND SPORTS ALL-ROUND COMPETITION"</h2>
                            <p class="nav">
                                <a href="#about" class=" btn btn-down page-scroll">
                                <i class="fa fa-angle-down animated"></i></a>
                              
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container-fluid content-section about text-center">
        <!-- 3 Section -->
        <div class="col-md-12 h1-padding">
            <h1>Sections:</h1><a id="about"></a>
        </div>
        <div class="col-md-12 text-left">
           
            <div class="col-lg-5 col-lg-offset-1">
                <h2>Combined martial</h2>
                <p style="margin-top:-25px;"> 1. All-Styles fighting versions:</p>
                <p>
                    <ul>
                        <li>B-1 (light contact - to the first technical action)</li>
                        <li>B-2 (dosated contact - to complete the combination)</li>
                        <li>B-3 (full contact - without strikes by elbows and knees)</li>
                        <li>B-4 (full contact - with strikes by elbows and knees in body only)</li>
                        <li>B-5 (no contact - demonstration of receptions)</li>
                        <li>B-6 (Kata)</li>
                    </ul>
                </p>
                <p>2. Shooting (with a pneumatic rifle from 7m distance)</p>
            </div>
            <div class="col-lg-5 col-lg-offset-1">
                <h2>Military and Applied seven-around</h2>
                <p>
                    <ul>
                        <li>swimming 50 meters</li>
                        <li>shooting</li>
                        <li>Running for 100 and 3000 m</li>
                        <li>tightening on the translated</li>
                        <li>overcoming the barrier of obstacles</li>
                        <li>throwing simulation grenades.</li>

                    </ul>
                </p>
            </div>              
        </div>       
        <p class="nav">
                  <a href="#photo" class="btn btn-down page-scroll">
                  <i class="fa fa-angle-down animated"></i></a>
                  <a href="#top" class=" btn btn-down page-scroll">
                  <i class="fa fa-angle-up animated"></i></a>
        </p>      
    </section>

    <section id="photo" class="container-fluid content-section center-text">
           <div class="col-md-12 col-gray center-text">
               <h1>Photo</h1><a id="photo"></a>
               <img width="100%" src="img/intro-1.png">
               <p class="nav">
                  <a href="#video" class="btn btn-down page-scroll">
                  <i class="fa fa-angle-down animated"></i></a>
                  <a href="#top" class=" btn btn-down page-scroll">
                  <i class="fa fa-angle-up animated"></i></a>
               </p>
           </div>
    </section>

    <section id="video" class="container-fluid content-section center-text">
        <div>
            <h1>Video:</h1><a id="video"></a>
        </div>
        <?php require_once('blocks/video.php'); ?>      
        <p class="nav">
               <a href="#download" class=" btn btn-down page-scroll">
               <i class="fa fa-angle-down animated"></i></a>
               <a href="#top" class=" btn btn-down page-scroll">
               <i class="fa fa-angle-up animated"></i></a>
            </p>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="overlay">
            <?php require_once("blocks/afisha.php"); ?>  
        </div>
    </section>

    <section id="news" class="content-section text-center">
            <div class="overlay">
                <div class="download-section">
                    <div class="container">
                        <div>
                            <h1><strong>News</strong></h1><a name="news" id="news"></a>
                        </div>
                        <?php require_once("blocks/news-block.php"); ?>                      
                    </div>  <br>                
                    <a href="news.php" target="_blank" class="btn btn-default btn-lg">All news</a>                   
                </div>
            </div>
            <p class="nav">
                      <a href="#grandmaster" class=" btn btn-down page-scroll">
                      <i class="fa fa-angle-down animated"></i></a>
                      <a href="#top" class=" btn btn-down page-scroll">
                      <i class="fa fa-angle-up animated"></i></a>
            </p>
    </section>

    <section id="grand-master" class="president center-text col-gray2">
            <div class="download-section">
                <div class="container"><a name="grandmaster" id="grandmaster"></a>
                   <div class="row">
                            <div class="col-md-12">
                                <h1>Grand Masters:</h1>
                            </div>                             
                    </div>                        
                   <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h2>Grand Master <br>of fighting style:</h2>
                            </div>
                            <div>
                                <h3><em>Anriy Rishkovets (7 dan)</em></h2>
                            </div>
                            <img src="/img/ryshkovets.png"><br><br>
                            <p>
                                <i class="fa fa-phone"></i> + 38(063) 11-95-715 <br>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:rishkovets.a.m@gmail.com">rishkovets.a.m@gmail.com</a>
                            </p><br><br><br><br>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h2>Grand Master <br>of grampling style:</h2>
                            </div>
                            <div>
                                <h3><em>Sergiy Grimov (7 dan)</em></h2>
                            </div>
                            <img src="/img/grimov.png"><br><br>
                            <p>
                                <i class="fa fa-phone"></i> + 38(066) 422 75 27 <br>
                                <i class="fa fa-envelope"></i> <a
                                    href="mailto:grimov-sergeyy@rambler.ua">grimov-sergeyy@rambler.ua</a>
                            </p><br><br><br><br>
                        </div>                       
                    </div>
                </div>
            <a target="_blank" href="black_belts.php">MSAC Black belts masters list</a>
                <p class="nav">
                      <a href="#president" class=" btn btn-down page-scroll">
                      <i class="fa fa-angle-down animated"></i></a>
                      <a href="#top" class=" btn btn-down page-scroll">
                      <i class="fa fa-angle-up animated"></i></a>
                    </p>
            </div>
    </section>

<!-- Footer -->
<a name="contacts"></a>
<?php require_once('blocks/footer-contacts.php'); ?>
<?php require_once('blocks/footer.php'); ?>
<?php require_once('blocks/scripts.php'); ?>
</body>
</php>