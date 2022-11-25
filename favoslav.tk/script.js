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



function imgs() {
      if (element.webkitFullscreenElement || element.fullscreenElement) {
        if (element.exitFullscreen) { element.exitFullscreen(); }
        else if (element.webkitExitFullscreen) { element.webkitExitFullscreen(); }
      } else {
        if (element.requestFullscreen) { element.requestFullscreen(); }
        else if (element.webkitRequestFullscreen) { element.webkitRequestFullscreen(); }
      }
}

