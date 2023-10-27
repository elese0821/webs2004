$(".nav > ul >li").mouseover(function(){
    $(this).find(".submenu").stop().slideDown();
});
$(".nav > ul >li").mouseout(function(){
    $(this).find(".submenu").stop().slideUp();
})


$(function(){
    let currentIndex=0;
    $(".slideWrap").append($(".s1").first().clone(true));
    
    setInterval(()=> {
        currentIndex++;
        $(".slideWrap").animate({marginLeft: -1200*currentIndex+"px"},600);

        if(currentIndex == 3){
            setTimeout(() => {
                $(".slideWrap").animate({marginLeft: 0},0);
            }, 600)
            currentIndex=0;
        }
    },3000);
})

$(".popup-close").click(function(){
    $(".popup").hide();
});

$(".popup-btn").click(function(){
    $(".popup").show();
});


