<?php require_once('layouts/lvl_top_part.php') ?>

<div class="container">
    <div class="lvl_num">
        <div>2</div>
    </div>
    <div class="langImg">
        <img src="img/html5_logo.png">
    </div>
    <ul class="progress">
        <li id="lvl"></li>
        <li id="lvl"></li>
        <li class="lvl_3"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="courses">
        <p>Задание: выберите все верные на ваш взгляд варианты ответов про html</p>
        <div class="exercise">
            <div>
                <input type="checkbox" id="check1" name="check">
                <label for="check1"><img src="img/checkbox.png"><img src="img/checkbox_checked.png"></label>
                <p>Это один из вариантов ответа, но это ничем тебе не поможет</p>
            </div>

            <div>
                <input type="checkbox" id="check2" name="check">
                <label for="check2"><img src="img/checkbox.png"><img src="img/checkbox_checked.png"></label>
            </div>

            <div>
                <input type="checkbox" id="check3" name="check">
                <label for="check3"><img src="img/checkbox.png"><img src="img/checkbox_checked.png"></label>
            </div>

            <div>
                <input type="checkbox" id="check4" name="check">
                <label for="check4"><img src="img/checkbox.png"><img src="img/checkbox_checked.png"></label>
            </div>

        </div>
    </div>
    <form action="" target="_self">
        <button>Ответить</button>
    </form>
</div>

<?php require_once('layouts/lvl_bottom_part.php') ?>

</html>