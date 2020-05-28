var currentTime = new Date().getHours();

if (7 <= currentTime && currentTime < 19) {
    var dayImagesArray = ["1.png", "3.png", "6.png", "8.png", "9.png"];
    var num = Math.floor(Math.random() * 4); // 0...6
    document.body.background = './assets/img/backgrounds/' + dayImagesArray[num];


} else {


    var nightImagesArray = ["2.png", "4.png", "5.png", "7.png", "10.png"];


    var num = Math.floor(Math.random() * 4); // 0...6
    document.body.background = './assets/img/backgrounds/' + nightImagesArray[num];

}