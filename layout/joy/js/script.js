
window.onload = function () {
    let nowImg = 0;
    const silde = document.querySelector(".sliderWrap");



    setTimeout(function () {
        nowImg++;
        silde.style.transition = "all 0.6s";



        silde.style.marginTop = -nowImg * 100 + "%";


    }, 3000);

}