$(document).ready(function() {

    $(window).on("scroll", function() {

        var fromTop = $(window).scrollTop();

        $("header").toggleClass("small", (fromTop > 400));
				$('.nav_list_item').toggleClass("smalli", (fromTop > 400));
        $("#logo").toggleClass("smallimg", (fromTop > 400));

    });

    $(".scrollOnClick").click(function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $(this.hash).offset().top
        }, 800);
    });

    



});
