var ip = "Join us » SpleefLeague.com";
var onlineip = "Join us » SpleefLeague.com"
var clicktocopy = "Click to copy";
var copied = "IP COPIED";
var error = "Error";
$(document).ready(function () {
    $("#copy").mouseover(function () {
        $("#copy").html(clicktocopy)
    }), $("#copy").mouseleave(function () {
        $("#copy").html(ip)
    }), $("#copy").click(function () {
        $("#copy").html(copied)
    })
});