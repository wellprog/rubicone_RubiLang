<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RubiLang</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="slider.css">

    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>



    <script type="text/javascript">$(window).on('load', function () {
            var $preloader = $('#p_prldr'),
                $svg_anm = $preloader.find('.fade2');
            $svg_anm.fadeOut();
            $preloader.delay(500).fadeOut('slow');
        });</script>
</head>

<body>
    <div id="p_prldr"><span class="fade1">RubiLang</span><span class="fade2 fade1">Пожалуйста, подождите</span></div>

    <header>

        <div class="top-line">
            <button class="BTN_TopMenu" onclick="menu_mobile()"><img src="img/menu.png"></button>
            <button class="BTN_TopMenu BTN_Menu_none" onclick="menu_mobile()"><img src="img/menu_close.png"></button>
            <img>
            <div class="Topmenu">
                <form action="index.php" target="_self">
                    <button><img src="img/CoursesBTN.png">
                        <p>На главную</p>
                    </button>
                </form>

                <form action="index.php" target="_self">
                    <button><img src="img/CoursesBTN.png">
                        <p>Аккаунт</p>
                    </button>
                </form>

                <form action="index.php" target="_self">
                    <button><img src="img/CoursesBTN.png">
                        <p>Курсы</p>
                    </button>
                </form>

                <form action="index.php" target="_self">
                    <button><img src="img/FAQ.png">
                        <p>FAQ</p>
                    </button>
                </form>

                <form action="#service" target="_self">
                    <button><img src="img/CoursesBTN.png">
                        <p>Поддержка</p>
                    </button>
                </form>

            </div>
        </div>
    </header>


    <main>

        <div class="menu menu_container">
            <button class="BTN_Menu" onclick="menu_desctop()"><img src="img/menu.png"></button>
            <button class="BTN_Menu BTN_Menu_none" onclick="menu_desctop()"><img src="img/menu_close.png"></button>
            <form action="index.php" target="_self">
                <button><img src="img/CoursesBTN.png"></button>
            </form>

            <form action="index.php" target="_self">
                <button><img src="img/CoursesBTN.png"></button>
            </form>

            <form action="index.php" target="_self">
                <button><img src="img/CoursesBTN.png"></button>
            </form>

            <form action="index.php" target="_self">
                <button><img src="img/FAQ.png"></button>
            </form>

            <form action="#service" target="_self">
                <button><img src="img/CoursesBTN.png"></button>
            </form>

        </div>
        <div class="add_menu menu_container">
            <form>
                <button></button>
            </form>
            <form action="index.php" target="_self">
                <button>На главную</button>
            </form>

            <form action="index.php" target="_self">
                <button>Аккаунт</button>
            </form>

            <form action="index.php" target="_self">
                <button>Курсы</button>
            </form>

            <form action="index.php" target="_self">
                <button>FAQ</button>
            </form>

            <form action="#service" target="_self">
                <button>Поддержка</button>
            </form>

        </div>


        <div class="page">
                <button class="back_btn" onclick="history.back(-2); return false;"></button>