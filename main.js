var currentTime = new Date().getHours();

if (7 <= currentTime && currentTime < 19) {
  document.body.background = "img/day.jpg";
}	else {
  document.body.background = "img/night.jpg";
}


$(document).ready(function () {
  var interval = 1000;   //number of mili seconds between each call
  var refresh = function() {
    $.getJSON("https://mcapi.ca/query/box.spleefleague.com/players",function(json){
      if (json.status !== true) {
        // error
		$("#players .p1").text('The server is Offline').addClass('server-error');
      } else {
        // success
        $("#players .p1").text('There are');
		$("#players .p2").text('players online');
		$(".player-count").html(json.players.online);
		setTimeout(function(){ $('.player-count').removeClass('zoomIn').addClass('zoomOut') }, 14350); 
		setTimeout(function(){ $('.player-count').removeClass('zoomOut').addClass('zoomIn') }, 0);
      }
});

      setTimeout(function() {
        refresh();
      }, interval);
      }
      refresh();
});