<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $site['config']['title'];?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo $site['url']['file']['css'];?>materialize.min.css" rel="stylesheet" media="screen, projection" />
        <link href="<?php echo $site['url']['file']['css'];?>default.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <!-- 머리 부분 { -->
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#!" class="brand-logo center">My Portfolio</a>
                    <a href="#" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="side-nav" id="menu">
                        <li><a href="#">TEST</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- } 머리 부분 -->
        <!-- 컨텐츠 부분 { -->
        <div class="container">
            <ul class="collection">
                <li class="collection-item">Portfolio</li>
            </ul>
        </div>
        <!-- } 컨텐츠 부분 -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $site['url']['file']['js'];?>materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo $site['url']['file']['js'];?>default.js"></script>
    </body>
</html>
