const mobile = document.querySelector(".mobile");
const menu = document.querySelector(".menu");
const body = document.querySelector("body");

mobile.addEventListener('click',() => {
    mobile.classList.toggle("active");
    menu.classList.toggle("active");
    bodyzd.classList.toggle("active");
})


if( navigator.userAgent.match(/iPhone/i)
|| navigator.userAgent.match(/webOS/i)
|| navigator.userAgent.match(/Android/i)
|| navigator.userAgent.match(/iPad/i)
|| navigator.userAgent.match(/iPod/i)
|| navigator.userAgent.match(/BlackBerry/i)
|| navigator.userAgent.match(/Windows Phone/i)
){

document.write('<code html pour mobile>');

} else {

document.write('<code html pour ordi>');

}
