document.querySelector(".jsFilter").addEventListener("click", function () {
    document.querySelector(".filter-menu").classList.toggle("active");
});

// document.querySelector(".grid").addEventListener("click", function () {
//   document.querySelector(".list").classList.remove("active");
//   document.querySelector(".grid").classList.add("active");
//   document.querySelector(".products-area-wrapper").classList.add("gridView");
//   document.querySelector(".products-area-wrapper").classList.remove("tableView");
// });

//   document.querySelector(".list").addEventListener("click", function () {
//   document.querySelector(".list").classList.add("active");
//   document.querySelector(".grid").classList.remove("active");
//   document.querySelector(".products-area-wrapper").classList.remove("gridView");
//   document.querySelector(".products-area-wrapper").classList.add("tableView");
// });

var modeSwitch = document.querySelector(".mode-switch");
modeSwitch.addEventListener("click", function () {
    document.documentElement.classList.toggle("light");
    modeSwitch.classList.toggle("active");
});

const hamburgerIcons = document.getElementById("hamburgerIcons");
const sidebar = document.getElementById("sidebar");


hamburgerIcons.addEventListener("click", () => {

console.log("object");
    // sidebar.classList.toggle("show-sidebar");
    sidebar.style.display === "flex"
        ? (sidebar.style.display = "none")
        : (sidebar.style.display = "flex");
});
