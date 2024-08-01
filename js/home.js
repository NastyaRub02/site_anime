var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");

    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// бургер меню
menu.onclick = function myFunction() {
  var x = document.getElementById("myheader_nav");

  if (x.className === "header_nav") {
    x.className += " responsive";
  } else {
    x.className = "header_nav";
  }
};
