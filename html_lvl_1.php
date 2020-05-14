
    <?php require_once('layouts/lvl_top_part.php') ?>

    <div class="container">
        <div class="lvl_num">
            <div>1</div>
        </div>
        <div class="langImg">
            <img src="img/html5_logo.png">
        </div>
        <ul class="progress">
            <li id="lvl"></li>
            <li></li>
            <li class="lvl_3"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="courses">
            <p>Задание: выберите все верные на ваш взгляд варианты ответов про html</p>
            <div class="exercise">
                <div>
                    <input type="radio" id="shipadd2" name="radio" />
                    <label for="shipadd2"><img src="img/radio.png"><img src="img/radio_checked.png"></label>
                    <p>Это один из вариантов ответа, но это ничем тебе не поможет</p>
                </div>

                <div>
                    <input type="radio" id="shipadd1" name="radio" />
                    <label for="shipadd1"><img src="img/radio.png"><img src="img/radio_checked.png"></label>
                    <p>Это верный вариант ответа, но тебе должно быть всё равно</p>
                </div>

                <div>
                    <input type="radio" id="shipadd3" name="radio" />
                    <label for="shipadd3"><img src="img/radio.png"><img src="img/radio_checked.png"></label>
                    <p>Волк не волк, если волк волк, то волк не заявляет о том, что он не волк</p>
                </div>
            </div>
        </div>
        <form action="" target="_self">
            <button>Ответить</button>
        </form>
    </div>

    <?php require_once('layouts/lvl_bottom_part.php') ?>

</html>