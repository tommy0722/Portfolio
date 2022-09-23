<?php include_once "./base.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/css.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.css' />
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            /* height: 100%; */
        }

        h3,
        p {
            color: black;
            font-weight: bolder;
        }

        .backendup {
            width: 100%;
            height: 300px;
        }

        .backend {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position:0px center;
            width: 100%;
            height: 600px;
            opacity:0.7;
            
        }

    </style>
</head>

<body>
    <div>


        <header>
            <div style="background-image: url('./assets/img/backendup1.jpg')" class="backendup">
                <h1 style="color:blue; display: flex;text-align: center;background-image:url('./title/title.png');background-size: Cover ;height:300px;align-items: center;justify-content: center;;">
                    後臺管理
                </h1>
        </header>
        <div id="cover" style="display:none; ">
            <div id="coverr">
                <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
                <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
            </div>
        </div>
        <div style="background-image: url('./assets/img/back.jpg');" class="backend">

            <div class="title-back justify-content-center d-flex" style="position: relative;">
                <div>
                    <a href="?do=admin">帳號管理</a>
                    <a href="?do=abme">基本資料</a>
                    <a href="?do=pro">作品管理</a>
                    <a href="?do=footer">頁尾管理</a>
                    <!-- <a href="/s1100414">前台管理</a> -->
                    <a href="./index.php">前台管理</a>
                </div>
                <div style="position: absolute;right:0;top:0;">
                    <a href="./api/logout.php"> <button class="bg-danger text-white">登出</button></a>
                </div>
            </div>
            <?php
            $do = $_GET['do'] ?? 'admin';
            $file = "back/" . $do . ".php";
            include_once file_exists($file) ? $file : 'backend/admin.php';
            ?>

            <footer>SHIN 個人網站作品集</footer>
</body>

</html>