/* HEADER */

let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};

const navLinks = document.querySelectorAll(".navbar a");

const offsetMargin = 200;

function changeActiveLink() {
  let fromTop = window.scrollY + offsetMargin;

  navLinks.forEach((link) => {
    const section = document.querySelector(link.getAttribute("href"));

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      navLinks.forEach((link) => link.classList.remove("active"));

      link.classList.add("active");
    }
  });
}

window.addEventListener("scroll", changeActiveLink);

/* SLIDER */

let slider = document.querySelector(".slider .list");
let items = document.querySelectorAll(".slider .list .item");
let next = document.getElementById("next");
let prev = document.getElementById("prev");
let dots = document.querySelectorAll(".slider .dots li");

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function () {
  active = active + 1 <= lengthItems ? active + 1 : 0;
  reloadSlider();
};
prev.onclick = function () {
  active = active - 1 >= 0 ? active - 1 : lengthItems;
  reloadSlider();
};
let refreshInterval = setInterval(() => {
  next.click();
}, 5000);

function reloadSlider() {
  slider.style.left = -items[active].offsetLeft + "px";
  //
  let last_active_dot = document.querySelector(".slider .dots li.active");
  last_active_dot.classList.remove("active");
  dots[active].classList.add("active");

  clearInterval(refreshInterval);
  refreshInterval = setInterval(() => {
    next.click();
  }, 5000);
}

dots.forEach((li, key) => {
  li.addEventListener("click", () => {
    active = key;
    reloadSlider();
  });
});
window.onresize = function (event) {
  reloadSlider();
};

/* POSTGRADOS */

const postgrados = document.querySelectorAll(".postgrado-item");

postgrados.forEach((item) => {
  item.addEventListener("mouseenter", () => {
    const info = item.querySelector(".postgrado-info");
    info.style.maxHeight = info.scrollHeight + "px";
  });

  item.addEventListener("mouseleave", () => {
    const info = item.querySelector(".postgrado-info");
    info.style.maxHeight = "0";
  });
});

/* BACKTOTOP */

const backToTopButton = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTopButton.classList.add("show");
  } else {
    backToTopButton.classList.remove("show");
  }
});

backToTopButton.addEventListener("click", (e) => {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth", //
  });
});
