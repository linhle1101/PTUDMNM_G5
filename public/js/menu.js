document.addEventListener("DOMContentLoaded", function () {
    let menuTrigger = document.querySelector(".menu-trigger");
    let submenu = document.querySelector(".submenu");

    console.log("menu.js loaded!");

    if (menuTrigger && submenu) {
        console.log("menuTrigger:", menuTrigger);
        console.log("submenu:", submenu);

        menuTrigger.addEventListener("click", function (event) {
            event.preventDefault(); // Ngăn chặn chuyển trang khi click
            console.log("Before toggle: ", submenu.style.display);
            
            // Kiểm tra trạng thái hiện tại và toggle
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }

            console.log("After toggle: ", submenu.style.display);
        });
    }
});
