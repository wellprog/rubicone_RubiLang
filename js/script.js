

function menu_desctop() {
    var BTN_Menu = document.getElementsByClassName("BTN_Menu");
    var add_menu = document.getElementsByClassName("add_menu");

    BTN_Menu[0].onclick = function () {
        BTN_Menu[0].classList.add("BTN_Menu_none");
        BTN_Menu[1].classList.remove("BTN_Menu_none");
        add_menu[0].classList.add("BTN_Menu_x");

    }
    BTN_Menu[1].onclick = function () {
        BTN_Menu[1].classList.add("BTN_Menu_none");
        BTN_Menu[0].classList.remove("BTN_Menu_none");
        add_menu[0].classList.remove("BTN_Menu_x");
    }
}

function menu_mobile() {
    var BTN_Menu = document.getElementsByClassName("BTN_TopMenu");
    var add_menu = document.getElementsByClassName("Topmenu");

    BTN_Menu[0].onclick = function () {
        BTN_Menu[0].classList.add("BTN_Menu_none");
        BTN_Menu[1].classList.remove("BTN_Menu_none");
        add_menu[0].classList.add("BTN_Menu_x");

    }
    BTN_Menu[1].onclick = function () {
        BTN_Menu[1].classList.add("BTN_Menu_none");
        BTN_Menu[0].classList.remove("BTN_Menu_none");
        add_menu[0].classList.remove("BTN_Menu_x");
    }
}
