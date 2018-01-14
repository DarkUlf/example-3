<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= config('title') ?>">
    <meta property="og:title" content="Смелее мечтайте!">
    <meta property="og:description" content="Спонтанное путешествие ждёт!">
    <meta property="og:url" content="http://<?= DOMAIN ?>/index.php">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="http://<?= DOMAIN ?>/imgs/65.png">
    <meta property="og:image:width" content="782">
    <meta property="og:image:height" content="609">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Смелее мечтайте!">
    <meta name="twitter:description" content="Спонтанное путешествие ждёт!">
    <meta name="twitter:image:src" content="http://<?= DOMAIN ?>/imgs/65.png">
    <meta name="twitter:url" content="http://<?= DOMAIN ?>/index.php">
    <meta name="twitter:domain" content="<?= DOMAIN ?>">
    
    <link rel="shortcut icon" href="/imgs/6.png">
    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="/css/main.css">
    
    <title><?= config('title') ?></title>    
</head>
<body>
    
<?php
require_once '_page.php';
require_once '_widgets.php';
?>    
    
<footer>
    <div class="">
        <div id="f-tx">
            <p>
                Разработано агентством <a href="http://pelican.bz/">&#171;PELICAN&#187;</a>
            </p>
        </div>
    </div>
    <div class="clearfix"></div>
</footer>
<script type="text/javascript" src="/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="/swiper/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/js/jquery.equalheights.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

</body>
</html>