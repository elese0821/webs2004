// window.onload = function () {
//     document.querySelectorAll(".nav>ul>li").addEventListener("mouseover", function () {
//         document.querySelectorAll(".nav>ul>li").querySelector(".submenu").style.display = "block"
//     })
// }

window.onload = function () {

    // nav
    document.querySelectorAll(".nav>ul>li").forEach(function (li) {
        li.addEventListener("mouseover", function () {
            li.querySelector(".submenu").style.height = "220px";
        })

        li.addEventListener("mouseout", function () {
            li.querySelector(".submenu").style.height = "0";
        })
    }
    )

    // slider
    const sliderwrap = document.querySelector(".slider__wrap");
    const clone = sliderwrap.firstElementChild.cloneNode(true);
    sliderwrap.appendChild(clone);

    let currentIndex = 0;

    setInterval(function () {

        currentIndex++;
        sliderwrap.style.transition = "all 0.6s";
        sliderwrap.style.marginLeft = -currentIndex * 100 + "%";

        if (currentIndex == 3) {
            setTimeout(function () {
                sliderwrap.style.transition = "all 0s";
                sliderwrap.style.marginLeft = "0";
                currentIndex = 0;
            }, 1000)
        }
    }, 3000)
















}

