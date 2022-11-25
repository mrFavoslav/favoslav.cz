function sidebar() {
  var element = document.getElementById("sidebar");
  element.classList.toggle("active");
}

function sidebar2() {
  var element = document.getElementById("sidebar");
  if (!element.classList.toggle("active")) {
    element.classList.toggle("active")
  }
}