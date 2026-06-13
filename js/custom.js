document.addEventListener("DOMContentLoaded", function () {

  const cols = document.querySelectorAll(".col");
  const bg = document.querySelector(".overlay-bg");

  // safety check
  if (!bg) {
    console.error("overlay-bg not found");
    return;
  }

  bg.style.backgroundImage = "url('../images/celebration-day-gallery.webp')";

  cols.forEach(col => {
    col.addEventListener("mouseenter", function () {
      const img = this.getAttribute("data-bg");
      if (img) {
        bg.style.backgroundImage = "url('" + img + "')";
      }
    });
  });

});
document.addEventListener("DOMContentLoaded", function () {

  document.querySelectorAll(".letter-animation").forEach(function (el) {

    let text = el.textContent.trim();
    el.innerHTML = "";
    let delay = 0;

    text.split("").forEach(function (letter) {

      if (letter === " ") {
        el.appendChild(document.createTextNode(" "));
      } else {
        let span = document.createElement("span");
        span.textContent = letter;
        span.style.animationDelay = delay + "s";
        delay += 0.08;
        el.appendChild(span);
      }

    });

  });

});


window.addEventListener("load", function () {
  const firstCol = document.querySelector(".services .col");
  const overlay = document.querySelector(".services .overlay-bg");

  if (firstCol && overlay) {
    overlay.style.backgroundImage = `url(${firstCol.getAttribute("data-bg")})`;
  }
});

const boxes = document.querySelectorAll(".animate-box");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const animation = el.getAttribute("data-animate");

      el.classList.add("animate__animated", animation, "show");

      observer.unobserve(el); // once மட்டும் animate ஆகும்
    }
  });
}, {
  threshold: 0.2
});

boxes.forEach(box => {
  observer.observe(box);
});

window.addEventListener("scroll", function () {
  document.getElementById("header-wrap").classList.toggle("scrolled", window.scrollY > 50);
});


document.querySelectorAll(".toggle-btn").forEach(function (btn) {
  btn.addEventListener("click", function (e) {
    e.preventDefault();

    let parent = this.parentElement;

    // close other menus (optional)
    document.querySelectorAll(".dropdown").forEach(function (item) {
      if (item !== parent) {
        item.classList.remove("active");
      }
    });

    // toggle current
    parent.classList.toggle("active");
  });
});


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

var vid = document.getElementById("myVideo");
function load() {
  vid.autoplay = true;
  vid.load();
}
window.onload = load;

window.onload = function () {
  setTimeout(function () {
    document.getElementById("preloader").style.display = "none";
    document.getElementByClass("page-container").style.display = "block";
  }, 500);
};


let current = 1;
const total = 3;

setInterval(() => {
  current++;
  if (current > total) current = 1;
  document.getElementById("img-" + current).checked = true;
}, 1500); // 3 seconds





AOS.init({
  duration: 1000,
  once: true
});


document.addEventListener("DOMContentLoaded", function () {

    const activity_btn = document.querySelectorAll(".slide1-buttons button");
    const items = document.querySelectorAll(".academics-5 .box");

    items.forEach(item => item.style.display = "none");

    document.querySelector(".box.assessment").style.display = "block";

    activity_btn.forEach(button => {

        button.addEventListener("click", () => {

            activity_btn.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            const filter = button.getAttribute("data-filter").trim();

            items.forEach(item => {

                if (item.classList.contains(filter)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }

            });

        });

    });

}); 

