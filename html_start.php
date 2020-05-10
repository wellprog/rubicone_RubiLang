<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RubiLang</title>

    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="stylesheet" type="text/css" href="./css/slider.css">

    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>



    <script type="text/javascript">$(window).on('load', function () {
            var $preloader = $('#p_prldr'),
                $svg_anm = $preloader.find('.fade2');
            $svg_anm.fadeOut();
            $preloader.delay(500).fadeOut('slow');
        });</script>
</head>
<body>
    <?php require_once('layouts/lvl_top_part.php') ?>
    
    <div class="container">
                <div class="langImg">
                    <img src="img/html5_logo.png">
                </div>
                <div class="courses">

                    <div class="space">
                        <div class="lesson lesson_done">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="html_lvl_1.php" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>

                    <div class="space">
                        <div class="lesson">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>

                    <div class="space">
                        <div class="lesson lesson_closed">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>

                    <div class="space">
                        <div class="lesson lesson_closed">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>

                    <div class="space">
                        <div class="lesson lesson_closed">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>

                    <div class="space">
                        <div class="lesson lesson_closed">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>

                    <div class="space">
                        <div class="lesson lesson_closed">
                            <div>
                                <p>Введение</p>
                            </div>
                            <form action="" target="_self">
                                <button><img src="img/lvl_done.png"></button>
                                <button><img src="img/lvl_start.png"></button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>

    <?php require_once('layouts/lvl_bottom_part.php') ?>
</html>