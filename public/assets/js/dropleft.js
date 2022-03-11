function showMenu() {
    open_menu_button = document.getElementById("svg-id");
    dropdown_item_menu = document.getElementById("dropleft-items-id");

    if(dropdown_item_menu.display == "") {
        dropdown_item_menu.style.display = "block";
    }
}

function hideMenu() {
    open_menu_button = document.getElementById("svg-id");
    dropdown_item_menu = document.getElementById("dropleft-items-id");

    if(dropdown_item_menu.display == "block") {
        dropdown_item_menu.style.display = "";
    }
}