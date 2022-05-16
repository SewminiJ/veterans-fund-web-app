let menu = document.querySelector("#menu-bars");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

let themeToggler = document.querySelector('#theme-toggler');

themeToggler .onclick = () =>{
    themeToggler.classList.toggle('fa-sun');
    if (themeToggler.classList.contains('fa-sun')){
        document.body.classList.add('active');
    }else{
        document.body.classList.remove('active');
    }
}

let section = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header .navbar a");

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

document.querySelector("#search-icon").onclick = () => {
  document.querySelector("#search-form").classList.toggle("active");
};

document.querySelector("#close").onclick = () => {
  document.querySelector("#search-form").classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
  grabCursor: true,
});

window.onload = fadeOut;

function sendEmail() {
  Email.send({
    Host: "smtp.gmail.com",
    Username: "ishanijayaeeera@gmail.com",
    Password: "jkdimvpbojzdwuer",
    To: "veteransfund6@gmail.com",
    From: document.getElementById("email").value,
    Subject: "New Contact Form Enquiry",
    Body:
      "Name: " +
      document.getElementById("name").value +
      "<br> Email: " +
      document.getElementById("email").value +
      "<br> Subject: " +
      document.getElementById("subject").value +
      "<br> Message: " +
      document.getElementById("message").value,
  }).then((message) => alert("Thank you! Your Mail Sent successfully!"));
}

let button = document.querySelector("body .container-card a");
button.addEventListener("click", ()=>{
  const span = document.querySelector("a span");
  button.style.paddingRight = "10px";
  span.style.visibility = "visible";
  setTimeout(() => {
    span.style.visibility = "hidden";
    button.style.transistion = ".3s ease-in-out";
    button.style.paddingRight = "0px";
  }, 3000);
})

const search = () => {
  const searchitem = document.getElementById("search-box").value.toUpperCase();
  const search = document.querySelectorAll("section-container")
  const items = document.querySelectorAll("container-card")
  const pname = search.getElementByTagName("h2")

  for (var i = 0; i < pname.length; i++) {
    let match = items[i].getElementsByTagName("h2")[0];
    if (match) {
      let textvalue = match.textContent || match.innerHTML

      if (textvalue.toUpperCase().indexOf(searchitem) > -1) {
        items[i].style.display = "block";
      } else {
        items[i].style.display = "none";
      }
      }
    }
}