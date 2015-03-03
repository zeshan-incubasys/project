function setValues(){
    var h = $(window).height();
    $('.detail').height(h);
    $(".row").height(h / 3);
    $(".row2").height(h / 3 * 2);
    $.each($(".image-hold .overlay .description"), function (i, v) {

        var a = ($(v).height() / 2);

        $(v).css("margin-top", "-" + a + "px");
    });

    if($(window).width()>768){

        if($('.page6 .right-col').height()<$('.page6 .left-col').height())
        {
            $('.page6 .right-col').height($('.page6 .left-col').height());
        }else
        {
            $('.page6 .left-col').height($('.page6 .right-col').height());
        }
    }


}
$(window).ready(function () {
   // console.log($(window).width());
    $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 768,
        loop: false,
        easing: "ease",
        animationTime: 1000,
        pagination: true,
        updateURL: true,
        beforeMove: function (index) {
        },
        afterMove: function (index) {
        },
        keyboard: true,                  // You can activate the keyboard controls
        direction: "vertical"
    });
    $.each($(".onepage-pagination li"), function (i, v) {
        var a = $(v).find("a");
        a.addClass("tooltip");
        if(i==0)
            a.html("<span>Home</span>");
        else if(i==1)
            a.html("<span>Games</span>");
        else if(i==2)
            a.html("<span>UNIQUE</span>");
        else if(i==3)
            a.html("<span>About Us</span>");
        else if(i==4)
            a.html("<span>Media</span>");
        else if(i==5)
            a.html("<span>Footer</span>");
        else
            a.html("<span>Section " + (i + 1) + " </span>");
    });
    var h = $(window).height();
    setValues();
    $("#menu").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        resizable: false,
        width: "100%",
        title: "Menu",
        height: h,
        position: { my: "left top", at: "left top", of: window },
        hide: {
            effect: "slideUp",
            duration: 1000
        },
        dialogClass: "menu"
    });
    $("#game-desc").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        resizable: false,
        width: "100%",
        title: "Game Description",
        height: h,
        position: { my: "left top", at: "left top", of: window },
        hide: {
            effect: "slideUp",
            duration: 1000
        },
        dialogClass: "desc-dialog"
    });

    $(".opener").click(function () {
        $("#menu").dialog("open");
    });
    if($(window).width()>768){
        $(".game-desc").click(function () {
            $("#game-desc").html($("#game3").html());
            $("#game-desc").dialog("open");
        });
    }else {
        $(".image-hold,.game-desc").click(function () {
            $("#game-desc").html($("#game3").html());
            $("#game-desc").dialog("open");
        });
    }




    $('.desc-dialog').on("click", '.image-slide li', function () {
        $(this).addClass('active').siblings().removeClass("active");
        var src = $(this).find('img').attr('src');
        var bg = src.replace("-thumb", "");
        $(".desc-dialog.ui-widget-content").css("background-image", "url(" + bg + ")");

    });


    $(".meter > span").each(function() {
        $(this)
            .data("origWidth", $(this).width())
            .width(0)
            .animate({
                width: $(this).data("origWidth")
            }, 1200);
    });
    $(window).on("resize",function(){
        setValues();
    });

        $('#email').keydown(function(event){
            if(event.keyCode == 13) {
                $('.contact-form').submit();
            }
        });


});
