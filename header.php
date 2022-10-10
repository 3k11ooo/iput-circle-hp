<?php
// Anti-Clickjacking Measures
header('X-Frame-Options: DENY');

if( is_author() ) { # is user page
    $title = "マイページ";
    $slug = "author";

} else if( is_single() ) { # is post page
    $title = get_the_title();
    $slug = "single";

} else { # other page
    $title = get_the_title();
    $slug = get_post(get_the_ID())->post_name;
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Keywords" content="東京国際工科専門職大学,専門職大学,iput" />
        <meta name="Description" content="" />
        <!-- Icon -->
        <link rel="shortcut icon" href="<?=get_theme_file_uri('/src/icon.png')?>" />
        <!-- OGP Settings -->
        <!-- CSS -->
        <link href="<?=get_theme_file_uri("assets/style-$slug.css")?>" rel="stylesheet" type="text/css"/>
        <link href="<?=get_theme_file_uri("assets/style-header.css")?>" rel="stylesheet" type="text/css"/>
        <link href="<?=get_theme_file_uri("assets/style-footer.css")?>" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?=get_stylesheet_uri()?>"/>

        <!-- CSS Bootstrap v5.2.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- CSS Bootstrap Icons v1.9.1 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- Google Fonts Icons | Rounded & Variable -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <!-- jQuery uncompressed v3.6.1 -->
        <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
        <!-- JavaScript Bootstrap v5.2.0 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
        <!-- trix.js v1.3.1 -->
        <link rel="stylesheet" type="text/css" href="<?=get_theme_file_uri("assets/trix1.3.1.css")?>" />
        <script src="<?=get_theme_file_uri("assets/trix1.3.1.js")?>"></script>
        <?=wp_head()?>
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #99CD00;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?=home_url()?>">IPUT学生団体</a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav"
                            aria-controls="top-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="top-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="<?=home_url('index.php/activity')?>">活動</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="<?=home_url('index.php/news')?>">ニュース</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="<?=home_url()?>">サークル</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="<?=home_url('index.php/faq')?>">FAQ</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="<?=home_url('index.php/contact')?>">お問い合わせ</a>
                            </li>
                            <li>
                                <hr class="border-top">
                            </li>
                            <li class="nav-item ms-2 me-2 d-flex justify-content-end">
                                <a href="<?=home_url('index.php/login')?>">
                                    <button type="button" class="btn btn-light rounded-pill">ログイン</button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
