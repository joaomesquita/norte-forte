$(window).scroll(function(){
    if($(window).scrollTop() > 0) {
        $(".navbar").css("background-color", "#008859");
        $(".navbar").css("box-shadow","0 0 14px rgba(0,0,0,0.3)");
        $(".navbar").css("padding", "15px 0");
        $(".navbar").css("transition", "0.2s");
    } else {
        $("#nav-home").css("background", "none");
        $(".navbar").css("box-shadow","none");
        $(".navbar").css("padding", "");
    }
});

$(".navbar-toggler").click(function() {
    $(".navbar").toggleClass("bg-green");
})

$ ('[data-fancybox]'). fancybox ({
    animationEffect: 'zoom',
    thumbs: {
        autoStart:  true ,
        hideOnClose:  true
    }
});