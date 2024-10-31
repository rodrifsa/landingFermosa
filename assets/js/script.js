/* HEADER: Toggle menu */
let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navbar.classList.toggle("open");
};

/* Navbar: Cambio de la clase "active" y desplazamiento suave */
const navLinks = document.querySelectorAll(".navbar a");
const offsetMargin = 88;

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

navLinks.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const section = document.querySelector(this.getAttribute("href"));
    window.scrollTo({
      top: section.offsetTop - offsetMargin,
      behavior: "smooth",
    });
  });
});

window.addEventListener("scroll", changeActiveLink);

/* SLIDER: Desplazamiento automático y control manual */
let slider = document.querySelector(".slider .list");
let items = document.querySelectorAll(".slider .list .item");
let next = document.getElementById("next");
let prev = document.getElementById("prev");
let dots = document.querySelectorAll(".slider .dots li");

let active = 0;
const lengthItems = items.length - 1;

function reloadSlider() {
  slider.style.left = -items[active].offsetLeft + "px";
  document.querySelector(".slider .dots li.active").classList.remove("active");
  dots[active].classList.add("active");
  resetSliderInterval();
}

next.onclick = () => {
  active = active < lengthItems ? active + 1 : 0;
  reloadSlider();
};

prev.onclick = () => {
  active = active > 0 ? active - 1 : lengthItems;
  reloadSlider();
};

dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    active = index;
    reloadSlider();
  });
});

function resetSliderInterval() {
  clearInterval(sliderInterval);
  sliderInterval = setInterval(() => {
    next.click();
  }, 5000);
}

let sliderInterval = setInterval(() => {
  next.click();
}, 5000);

window.onresize = reloadSlider;

/* POSTGRADOS: Acordeón al pasar el cursor */
document.querySelectorAll(".postgrado-item").forEach((item) => {
  item.addEventListener("mouseenter", () => {
    item.querySelector(".postgrado-info").style.maxHeight =
      item.querySelector(".postgrado-info").scrollHeight + "px";
  });

  item.addEventListener("mouseleave", () => {
    item.querySelector(".postgrado-info").style.maxHeight = "0";
  });
});

/* BACKTOTOP: Mostrar botón al hacer scroll */
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
    behavior: "smooth",
  });
});

// Elementos del chatbox
const chatboxContainer = document.querySelector(".chatbox-container");
const openChatButton = document.getElementById("openChat");
const closeChatButton = document.getElementById("closeChat");
const sendMessageButton = document.getElementById("sendMessage");
const chatInput = document.getElementById("chatInput");
const chatboxMessages = document.querySelector(".chatbox-messages");

// Abrir y cerrar el chatbox
openChatButton.addEventListener("click", () => {
  chatboxContainer.style.display = "flex";
  openChatButton.style.display = "none"; // Ocultar el botón al abrir el chatbox
});

closeChatButton.addEventListener("click", () => {
  chatboxContainer.style.display = "none";
  openChatButton.style.display = "block"; // Mostrar el botón al cerrar el chatbox
});

// Enviar mensaje del usuario
sendMessageButton.addEventListener("click", sendMessage);
chatInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") {
    sendMessage();
  }
});

function sendMessage() {
  const message = chatInput.value;
  if (message.trim() !== "") {
    // Crear el mensaje del usuario
    const userMessage = document.createElement("div");
    userMessage.classList.add("message", "user");
    userMessage.textContent = message;
    chatboxMessages.appendChild(userMessage);

    // Limpiar el campo de entrada
    chatInput.value = "";

    // Respuesta automática del asistente después de un pequeño retraso
    setTimeout(() => {
      receiveAssistantMessage("Este es un mensaje del asistente.");
    }, 1000);

    // Desplazar hacia abajo para ver el último mensaje
    chatboxMessages.scrollTop = chatboxMessages.scrollHeight;
  }
}

// Función para agregar el mensaje del asistente
function receiveAssistantMessage(message) {
  // Crear el contenedor del mensaje del asistente
  const assistantMessage = document.createElement("div");
  assistantMessage.classList.add("message", "assistant");

  // Crear el logo del asistente
  const logo = document.createElement("div");
  logo.classList.add("logo");
  const img = document.createElement("img");

  // Usar la ruta relativa a tu imagen
  img.src = "assets/img/icon/favicons/icon.png"; // Reemplaza con la ruta correcta
  logo.appendChild(img);

  // Crear el texto del mensaje del asistente
  const text = document.createElement("div");
  text.classList.add("text");
  text.textContent = message;

  // Agregar el logo y el texto al mensaje del asistente
  assistantMessage.appendChild(logo);
  assistantMessage.appendChild(text);

  // Agregar el mensaje del asistente al chatbox
  chatboxMessages.appendChild(assistantMessage);

  // Desplazar hacia abajo para ver el último mensaje
  chatboxMessages.scrollTop = chatboxMessages.scrollHeight;
}
