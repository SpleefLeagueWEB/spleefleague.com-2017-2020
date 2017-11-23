var currentTime = new Date().getHours();

if (7 <= currentTime && currentTime < 19) {
  document.body.background = "./assets/img/day.jpg";
}	else {
  document.body.background = "./assets/img/night.jpg";
}
