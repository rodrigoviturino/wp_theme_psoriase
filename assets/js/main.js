const btnMobile = document.querySelector("[data-menu='mobile']");
const listMenu = document.querySelector(".header__wrapper__nav-menu");
const t = document.querySelector("#navbarResponsive");

function handleClick(event) {
  listMenu.classList.toggle("active");
  t.classList.toggle("active");
}
btnMobile.addEventListener("click", handleClick);

let menu = document.querySelector(".header");
let headerClassList = menu.classList;

window.addEventListener("scroll", () => {
  if (window.scrollY >= 100) {
    if (!headerClassList.contains("scrollHide")) {
      headerClassList.add("scrollHide");
    }
  } else {
    headerClassList.remove("scrollHide");
  }
});

// const homePosts = document.querySelectorAll(
//   ".home [data-posts='item'] [data-posts='infos'] p"
// );

// function tes() {
//   const tt = document.querySelectorAll(".home [data-posts='item']");
//   tt.forEach((item) => {
//     let t = item.querySelector("p").innerText.substr(0, 2);
//     return t;
//   });
// }

// tes();

// window.onload = function () {
//   lenghtParagrafo();
// };
