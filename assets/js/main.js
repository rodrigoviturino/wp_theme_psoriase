const btnMobile = document.querySelector("[data-menu='mobile']");
const listMenu = document.querySelector(".header__wrapper__nav-menu");

function handleClick(event) {
  listMenu.classList.toggle("active");
}
btnMobile.addEventListener("click", handleClick);

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
