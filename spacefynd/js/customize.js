$(document).ready(function () {
    //$('input[type=number]').numeric();

    //chat box for footer
//     var chatXpos = $('.inner>div').offset().top;
//     var chatHeight = $('.inner>div').height();
//     var footerXpos = $('footer').offset().top - 10;
//     $(window).scroll(function(){
////        var scroll = $(window).scrollTop();
//        if((chatXpos + chatHeight) >= footerXpos){
//           $('.inner>div').css({"position":"absolute"});
//        }
//    });
//     if()
//     

    $("#top-venue select").change(function () {

        var parent = $(this)
        if (parent.val() == $("#top-venue select option:first").val()) {
            $(this).css("color", "rgba(0,0,0,0.6)");
        } else
            $(this).css("color", "#000");

    });


    $("#delete-dialog").on("click", function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        $("#confirmDialog").dialog({
            resizable: false,
            height: 180,
            width: 400,
            modal: true,
            buttons: {
                "Delete": function () {

                    window.location = url;
                },
                Cancel: function () {
                    $(this).dialog("close");
                }
            }
        });

    });



    // binds to onchange event of your FILE input field
    $('.file_inputs').bind('change', function () {
        if (this.files[0].size > 1048576) {
            $(this).val('');
            alert('Please select a file of size less than 1 MB');
        }
    });

    // Stop the enter event on fields having autocomplete address
    $('.address_edit_fields').keypress(function (e) {
        var keyCode = e.keyCode || e.which;

        if (keyCode == 9) {
            //alert('anything');
        }
        else {
            preventEnterSubmit(e);
        }
    });

    // Put the value of the city back into it even after blur as happened, for BUG on edit user info
    $('.address_edit_fields').keydown(function (e) {
        var keyCode = e.keyCode || e.which;

        if (keyCode === 9) {
            autocomplete = new google.maps.places.Autocomplete(
                    /** @type {HTMLInputElement} */($(".address-field")[0]),
                    {types: ['geocode']});

            google.maps.event.clearListeners(autocomplete, 'place_changed');

//            setTimeout(function(){
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                fillInAddress();
            });
//            }, 10);
        }
    });

    $('#scroll-btn, #scroll-btn1, ul.fnav a').on('click', function (e) {
        //e.preventDefault();
        var clickedItem = $(this).attr("href");
        var Xpos = $(clickedItem).offset().top;
        $('html, body').animate({scrollTop: Xpos}, 800);
    });
    $('.password-popup').on('click', function (e) {
        //e.preventDefault()
        $('html, body').animate({scrollTop:0}, 800);
    });
    $(".action-class").blur(function () {

        if ($(this).attr("id") != "autocomplete") {
            make_url();
        }

    });


    $(".common-field-address").blur(function () {

//        $(this).next().show();
//        if ($(this).val() == $(this).next().val())
//            $(this).next().val($(this).val());
//        $(this).hide();
//        
    })

    $(".address-field").next().on("click", function () {


        var nxt = $(this);
        nxt.prev().val(nxt.val());
//        $(".address-field-autocomplete-city").val(nxt.val());

        nxt.hide();
        nxt.prev().show();

        nxt.prev().focus();


    });

    // Trigger form submit on enter/return key
    $('form input').on('keyup', function (e) {
        if (e.which == 13) {
            $(this).siblings().trigger('click');
        }
    });

    // if ($("#locality").length > 0)
    initialize_map_field('(cities)');
    //else
    //  initialize_map_field('geocode');

    /*Footer bottom*/
    var windowWidth = $(window).width();
    if (windowWidth > 767) {
        var windowHeight = $(window).height();
        var headerHeight = $('header, #header').innerHeight();
        var footerHeight = $('footer, #footer').innerHeight();
        var mainHeight = $('#main').innerHeight();
        var mainSuggHeight = windowHeight - (headerHeight + footerHeight);
        var mainPaddingTop = $('#main').css("padding-top");
        var mainPaddingBottom = $('#main').css("padding-bottom");
        var mainTotalPadding = parseInt(mainPaddingTop, 10) + parseInt(mainPaddingBottom, 10);
        if (mainHeight <= mainSuggHeight) {
            $('#main').height(mainSuggHeight - mainTotalPadding);
        }
    }

    /*$('.slider, .slider .image-holder').height($(window).height()-$('header').height());
     var pad=(($(window).height()-$('header').height())-$('.slider .holder').innerHeight())/2;
     if($('.slider, .slider .image-holder').height()>400)
     $('.slider .holder').css('padding-top',parseInt(pad)+"px");
     else
     $('.slider .holder').css('padding-top',"20px");*/
    // user-area structure
    var windowWidth = $(window).width();
    if (windowWidth > 767) {
        var windowHeight = $(window).height();
        var headerHeight = $('header').innerHeight();
        var footerHeight = $('footer').innerHeight();
        var sidebarPaddingTop = $('#sidebar').css('padding-top');
        var sidebarPaddingBottom = $('#sidebar').css('padding-bottom')
        var parseval = parseInt(sidebarPaddingTop, 10) + parseInt(sidebarPaddingBottom, 10);
        var netHeight = windowHeight - (headerHeight + footerHeight + parseval);
        $('.side-menu').height(netHeight);
        //padding for li's
        var listItems = $('.side-menu').find('li').length;
        var textHeight = $('.side-menu').find('li').css('line-height');
        var itemPadding = ((netHeight - (parseInt(textHeight) * listItems)) / listItems) / 2;
        $('.side-menu li').find('a').css({'padding-top': itemPadding + 'px', 'padding-bottom': itemPadding + 'px'});
    }
    // user-area structure ENDS

    //login-area center
    $('#main.login').height(windowHeight);
    var intialActive = $('.tab-menu .active').find('a').attr('href');

    $('.tab-content .tabs, .tab-area .tabs').hide();
    $('.tab-content ' + intialActive).show();
    $('.tab-area .tabs').eq(0).show();
    $('.tab-menu a').on('click', function (e) {
        e.preventDefault();
        var active = $(this).attr('href');
        if ($(this).parent('li').hasClass('active')) {

        } else {
            $('.tab-menu li').removeClass('active');
            $(this).parent('li').addClass('active');
            //alert($(this).parents("iframe").html());
            var myElem = window.parent.document.getElementById("fancybox-content");
            if (myElem != null) {

                if ($(this).text() == "Venue Log In")
                {
                    $('#signup-error').html('').hide();
                    window.parent.document.getElementById("fancybox-content").style.height = '405px';
                } else
                {
                    $('#login-error').html('').hide();
                    window.parent.document.getElementById("fancybox-content").style.height = '625px';
                }
            }

            $('.tab-content .tabs').hide();
            $(active).show();
        }
    });



    $('.side-menu li a').on('click', function (e) {
        e.preventDefault();
        var active = $(this).attr('href');
        $(this).parents('ul').addClass('js-slide-hidden');
        if ($(this).parent('li').hasClass('active-menu')) {

        } else {
            $('.side-menu li').removeClass('active-menu');
            $(this).parent('li').addClass('active-menu');
            $('.tab-area .tabs').hide();
            $(active).show();
        }

        if (active == "#tab-photos") {


            $('#photo').scrollGallery({
                mask: '.mask',
                slider: '.slideset',
                slides: '.slide',
                btnPrev: 'a.btn-prev',
                btnNext: 'a.btn-next',
                stretchSlideToMask: false,
                maskAutoSize: false,
                autoRotation: true,
                switchTime: 3000,
                animSpeed: 500,
                step: 1
            });

        }
    });

    $('.here').on('click', function (e) {
        e.preventDefault();
        var id = $(this).parents('.tabs').attr('id');

        $('.tab-menu li').addClass('active');
        $('.tab-menu a[href="#' + id + '"]').parents('li').removeClass('active');
        if (id == 'tab1') {
            $('#' + id).css({'display': 'none'});
            $('#tab2').removeClass('js-tab-hidden').css({'display': 'block', 'width': 'auto'});
            window.parent.document.getElementById("fancybox-content").style.height = '625px';
        }
        if (id == 'tab2') {
            $('#' + id).css({'display': 'none'});
            $('#tab1').removeClass('js-tab-hidden').css({'display': 'block', 'width': 'auto'});
            window.parent.document.getElementById("fancybox-content").style.height = '405px';
            $('#tab-login').trigger('click');
        }

        $('#login-error').html('').hide();
    });
    //login-area center ENDS
    initCarousel();
    initCarousel2();
    $("#email-us").validate({
        rules: {
            "email": {
                required: true,
                email: true
            }
        },
        success: function () {
            postEmail();
            event.preventDefault();
        }
    });
    $("#dialog").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });

    $("#opener").click(function () {
        $("#dialog").dialog("open");
    });
    if ($(window).width() > 991)
    {


        var mainBlock = $('.slide-images');
        var totalWidth = mainBlock.width();
        var itemsNum = mainBlock.find('div.slide').length + 1;
        mainBlock.find('.active').siblings().find('.description p').hide();

        var itemsWidth = totalWidth / itemsNum;
        mainBlock.find('div.slide').width(itemsWidth);
        mainBlock.find('div.slide').eq(0).addClass('active').width(itemsWidth * 2);
        mainBlock.find('.description').css({'width': itemsWidth});
        mainBlock.on('mouseenter', 'div.slide', function () {
            mainBlock.find('.active').siblings().find('.description p').hide();
            if (!$(this).hasClass('active')) {
                mainBlock.find('div.slide').removeClass('active');
                $(this).addClass('active');
                mainBlock.find('div.slide').css({'width': itemsWidth});
                mainBlock.find('.active').css({'width': itemsWidth * 2});
                mainBlock.find('.description').css({'width': itemsWidth});
                $('.slide-images .active').find('.description').css({'width': itemsWidth * 2});
                setTimeout(function () {
                    $('.slide-images .active').find('.description p').fadeIn('slow');
                }, 800);

            }
        });
        mainBlock.on('mouseleave', 'div.slide', function () {
            mainBlock.find('.active').siblings().find('.description p').hide();
        });


        $(window).load(function () {
            var intialheight = $('.slide-images').find('img').eq(1).height();
            $('.slide-images').height(intialheight);
            $('.slide-images .slide').height(intialheight);
            $('.slide-images .active').find('.description').css({'width': itemsWidth * 2});
            $('.slide-images img').css({'width': itemsWidth * 2});
            $('.slide-images .active').find('p').show();
        });
    }




});
// page init
jQuery(function () {
    //initCarousel();

});

// scroll gallery init
function initCarousel2() {
    jQuery('#photo').scrollGallery({
        mask: '.mask',
        slider: '.slideset',
        slides: '.slide',
        btnPrev: 'a.btn-prev',
        btnNext: 'a.btn-next',
        stretchSlideToMask: false,
        maskAutoSize: false,
        autoRotation: true,
        switchTime: 3000,
        animSpeed: 500,
        step: 1
    });
}
function initCarousel() {
    jQuery('.slider').scrollGallery({
        mask: '.mask',
        slider: '.slideset',
        slides: '.slide',
        btnPrev: 'a.btn-prev',
        btnNext: 'a.btn-next',
        stretchSlideToMask: true,
        maskAutoSize: true,
        autoRotation: true,
        switchTime: 3000,
        animSpeed: 500,
        step: 1
    });
    jQuery('.slider-venue').scrollGallery({
        mask: '.mask',
        slider: '.slideset',
        slides: '.slide',
        btnPrev: 'a.btn-prev',
        btnNext: 'a.btn-next',
        stretchSlideToMask: false,
        maskAutoSize: false,
        autoRotation: true,
        switchTime: 3000,
        animSpeed: 500,
        step: 1
    });
}
var postEmail = function () {
    $.ajax({
        url: base_url + "emailus.php",
        data: $('#email-us').serialize(),
        method: 'POST',
        success: function (result)
        {
            console.log(result);
        }
    });
}

/*
 * jQuery Carousel plugin
 */
;
(function ($) {
    function ScrollGallery(options) {
        this.options = $.extend({
            mask: 'div.mask',
            slider: '>*',
            slides: '>*',
            activeClass: 'active',
            disabledClass: 'disabled',
            btnPrev: 'a.btn-prev',
            btnNext: 'a.btn-next',
            generatePagination: false,
            pagerList: '<ul>',
            pagerListItem: '<li><a href="#"></a></li>',
            pagerListItemText: 'a',
            pagerLinks: '.pagination li',
            currentNumber: 'span.current-num',
            totalNumber: 'span.total-num',
            btnPlay: '.btn-play',
            btnPause: '.btn-pause',
            btnPlayPause: '.btn-play-pause',
            galleryReadyClass: 'gallery-js-ready',
            autorotationActiveClass: 'autorotation-active',
            autorotationDisabledClass: 'autorotation-disabled',
            stretchSlideToMask: false,
            circularRotation: true,
            disableWhileAnimating: false,
            autoRotation: false,
            pauseOnHover: isTouchDevice ? false : true,
            maskAutoSize: false,
            switchTime: 4000,
            animSpeed: 600,
            event: 'click',
            swipeThreshold: 15,
            handleTouch: true,
            vertical: false,
            useTranslate3D: false,
            step: false
        }, options);
        this.init();
    }
    ScrollGallery.prototype = {
        init: function () {
            if (this.options.holder) {
                this.findElements();
                this.attachEvents();
                this.refreshPosition();
                this.refreshState(true);
                this.resumeRotation();
                this.makeCallback('onInit', this);
            }
        },
        findElements: function () {
            // define dimensions proporties
            this.fullSizeFunction = this.options.vertical ? 'outerHeight' : 'outerWidth';
            this.innerSizeFunction = this.options.vertical ? 'height' : 'width';
            this.slideSizeFunction = 'outerHeight';
            this.maskSizeProperty = 'height';
            this.animProperty = this.options.vertical ? 'marginTop' : 'marginLeft';

            // control elements
            this.gallery = $(this.options.holder).addClass(this.options.galleryReadyClass);
            this.mask = this.gallery.find(this.options.mask);
            this.slider = this.mask.find(this.options.slider);
            this.slides = this.slider.find(this.options.slides);
            this.btnPrev = this.gallery.find(this.options.btnPrev);
            this.btnNext = this.gallery.find(this.options.btnNext);
            this.currentStep = 0;
            this.stepsCount = 0;

            // get start index
            if (this.options.step === false) {
                var activeSlide = this.slides.filter('.' + this.options.activeClass);
                if (activeSlide.length) {
                    this.currentStep = this.slides.index(activeSlide);
                }
            }

            // calculate offsets
            this.calculateOffsets();

            // create gallery pagination
            if (typeof this.options.generatePagination === 'string') {
                this.pagerLinks = $();
                this.buildPagination();
            } else {
                this.pagerLinks = this.gallery.find(this.options.pagerLinks);
                this.attachPaginationEvents();
            }

            // autorotation control buttons
            this.btnPlay = this.gallery.find(this.options.btnPlay);
            this.btnPause = this.gallery.find(this.options.btnPause);
            this.btnPlayPause = this.gallery.find(this.options.btnPlayPause);

            // misc elements
            this.curNum = this.gallery.find(this.options.currentNumber);
            this.allNum = this.gallery.find(this.options.totalNumber);
        },
        attachEvents: function () {
            // bind handlers scope
            var self = this;
            this.bindHandlers(['onWindowResize']);
            $(window).bind('load resize orientationchange', this.onWindowResize);

            // previous and next button handlers
            if (this.btnPrev.length) {
                this.prevSlideHandler = function (e) {
                    e.preventDefault();
                    self.prevSlide();
                };
                this.btnPrev.bind(this.options.event, this.prevSlideHandler);
            }
            if (this.btnNext.length) {
                this.nextSlideHandler = function (e) {
                    e.preventDefault();
                    self.nextSlide();
                };
                this.btnNext.bind(this.options.event, this.nextSlideHandler);
            }

            // pause on hover handling
            if (this.options.pauseOnHover && !isTouchDevice) {
                this.hoverHandler = function () {
                    if (self.options.autoRotation) {
                        self.galleryHover = true;
                        self.pauseRotation();
                    }
                };
                this.leaveHandler = function () {
                    if (self.options.autoRotation) {
                        self.galleryHover = false;
                        self.resumeRotation();
                    }
                };
                this.gallery.bind({mouseenter: this.hoverHandler, mouseleave: this.leaveHandler});
            }

            // autorotation buttons handler
            if (this.btnPlay.length) {
                this.btnPlayHandler = function (e) {
                    e.preventDefault();
                    self.startRotation();
                };
                this.btnPlay.bind(this.options.event, this.btnPlayHandler);
            }
            if (this.btnPause.length) {
                this.btnPauseHandler = function (e) {
                    e.preventDefault();
                    self.stopRotation();
                };
                this.btnPause.bind(this.options.event, this.btnPauseHandler);
            }
            if (this.btnPlayPause.length) {
                this.btnPlayPauseHandler = function (e) {
                    e.preventDefault();
                    if (!self.gallery.hasClass(self.options.autorotationActiveClass)) {
                        self.startRotation();
                    } else {
                        self.stopRotation();
                    }
                };
                this.btnPlayPause.bind(this.options.event, this.btnPlayPauseHandler);
            }

            // enable hardware acceleration
            if (isTouchDevice && this.options.useTranslate3D) {
                this.slider.css({'-webkit-transform': 'translate3d(0px, 0px, 0px)'});
            }

            // swipe event handling
            if (isTouchDevice && this.options.handleTouch && window.Hammer && this.mask.length) {
                this.swipeHandler = new Hammer.Manager(this.mask[0]);
                this.swipeHandler.add(new Hammer.Pan({
                    direction: self.options.vertical ? Hammer.DIRECTION_VERTICAL : Hammer.DIRECTION_HORIZONTAL,
                    threshold: self.options.swipeThreshold
                }));

                this.swipeHandler.on('panstart', function () {
                    if (self.galleryAnimating) {
                        self.swipeHandler.stop();
                    } else {
                        self.pauseRotation();
                        self.originalOffset = parseFloat(self.slider.css(self.animProperty));
                    }
                }).on('panmove', function (e) {
                    var tmpOffset = self.originalOffset + e[self.options.vertical ? 'deltaY' : 'deltaX'];
                    tmpOffset = Math.max(Math.min(0, tmpOffset), self.maxOffset);
                    self.slider.css(self.animProperty, tmpOffset);
                }).on('panend', function (e) {
                    self.resumeRotation();
                    if (e.distance > self.options.swipeThreshold) {
                        if (e.offsetDirection === Hammer.DIRECTION_RIGHT || e.offsetDirection === Hammer.DIRECTION_DOWN) {
                            self.nextSlide();
                        } else {
                            self.prevSlide();
                        }
                    } else {
                        self.switchSlide();
                    }
                });
            }
        },
        onWindowResize: function () {
            if (!this.galleryAnimating) {
                this.calculateOffsets();
                this.refreshPosition();
                this.buildPagination();
                this.refreshState();
                this.resizeQueue = false;
            } else {
                this.resizeQueue = true;
            }
        },
        refreshPosition: function () {
            this.currentStep = Math.min(this.currentStep, this.stepsCount - 1);
            this.tmpProps = {};
            this.tmpProps[this.animProperty] = this.getStepOffset();
            this.slider.stop().css(this.tmpProps);
        },
        calculateOffsets: function () {
            var self = this, tmpOffset, tmpStep;
            if (this.options.stretchSlideToMask) {
                var tmpObj = {};
                tmpObj[this.innerSizeFunction] = this.mask[this.innerSizeFunction]();
                this.slides.css(tmpObj);
            }

            this.maskSize = this.mask[this.innerSizeFunction]();
            this.sumSize = this.getSumSize();
            this.maxOffset = this.maskSize - this.sumSize;

            // vertical gallery with single size step custom behavior
            if (this.options.vertical && this.options.maskAutoSize) {
                this.options.step = 1;
                this.stepsCount = this.slides.length;
                this.stepOffsets = [0];
                tmpOffset = 0;
                for (var i = 0; i < this.slides.length; i++) {
                    tmpOffset -= $(this.slides[i])[this.fullSizeFunction](true);
                    this.stepOffsets.push(tmpOffset);
                }
                this.maxOffset = tmpOffset;
                return;
            }

            // scroll by slide size
            if (typeof this.options.step === 'number' && this.options.step > 0) {
                this.slideDimensions = [];
                this.slides.each($.proxy(function (ind, obj) {
                    self.slideDimensions.push($(obj)[self.fullSizeFunction](true));
                }, this));

                // calculate steps count
                this.stepOffsets = [0];
                this.stepsCount = 1;
                tmpOffset = tmpStep = 0;
                while (tmpOffset > this.maxOffset) {
                    tmpOffset -= this.getSlideSize(tmpStep, tmpStep + this.options.step);
                    tmpStep += this.options.step;
                    this.stepOffsets.push(Math.max(tmpOffset, this.maxOffset));
                    this.stepsCount++;
                }
            }
            // scroll by mask size
            else {
                // define step size
                this.stepSize = this.maskSize;

                // calculate steps count
                this.stepsCount = 1;
                tmpOffset = 0;
                while (tmpOffset > this.maxOffset) {
                    tmpOffset -= this.stepSize;
                    this.stepsCount++;
                }
            }
        },
        getSumSize: function () {
            var sum = 0;
            this.slides.each($.proxy(function (ind, obj) {
                sum += $(obj)[this.fullSizeFunction](true);
            }, this));
            this.slider.css(this.innerSizeFunction, sum);
            return sum;
        },
        getStepOffset: function (step) {
            step = step || this.currentStep;
            if (typeof this.options.step === 'number') {
                return this.stepOffsets[this.currentStep];
            } else {
                return Math.min(0, Math.max(-this.currentStep * this.stepSize, this.maxOffset));
            }
        },
        getSlideSize: function (i1, i2) {
            var sum = 0;
            for (var i = i1; i < Math.min(i2, this.slideDimensions.length); i++) {
                sum += this.slideDimensions[i];
            }
            return sum;
        },
        buildPagination: function () {
            if (typeof this.options.generatePagination === 'string') {
                if (!this.pagerHolder) {
                    this.pagerHolder = this.gallery.find(this.options.generatePagination);
                }
                if (this.pagerHolder.length && this.oldStepsCount != this.stepsCount) {
                    this.oldStepsCount = this.stepsCount;
                    this.pagerHolder.empty();
                    this.pagerList = $(this.options.pagerList).appendTo(this.pagerHolder);
                    for (var i = 0; i < this.stepsCount; i++) {
                        $(this.options.pagerListItem).appendTo(this.pagerList).find(this.options.pagerListItemText).text(i + 1);
                    }
                    this.pagerLinks = this.pagerList.children();
                    this.attachPaginationEvents();
                }
            }
        },
        attachPaginationEvents: function () {
            var self = this;
            this.pagerLinksHandler = function (e) {
                e.preventDefault();
                self.numSlide(self.pagerLinks.index(e.currentTarget));
            };
            this.pagerLinks.bind(this.options.event, this.pagerLinksHandler);
        },
        prevSlide: function () {
            if (!(this.options.disableWhileAnimating && this.galleryAnimating)) {
                if (this.currentStep > 0) {
                    this.currentStep--;
                    this.switchSlide();
                } else if (this.options.circularRotation) {
                    this.currentStep = this.stepsCount - 1;
                    this.switchSlide();
                }
            }
        },
        nextSlide: function (fromAutoRotation) {
            if (!(this.options.disableWhileAnimating && this.galleryAnimating)) {
                if (this.currentStep < this.stepsCount - 1) {
                    this.currentStep++;
                    this.switchSlide();
                } else if (this.options.circularRotation || fromAutoRotation === true) {
                    this.currentStep = 0;
                    this.switchSlide();
                }
            }
        },
        numSlide: function (c) {
            if (this.currentStep != c) {
                this.currentStep = c;
                this.switchSlide();
            }
        },
        switchSlide: function () {
            var self = this;
            this.galleryAnimating = true;
            this.tmpProps = {};
            this.tmpProps[this.animProperty] = this.getStepOffset();
            this.slider.stop().animate(this.tmpProps, {duration: this.options.animSpeed, complete: function () {
                    // animation complete
                    self.galleryAnimating = false;
                    if (self.resizeQueue) {
                        self.onWindowResize();
                    }

                    // onchange callback
                    self.makeCallback('onChange', self);
                    self.autoRotate();
                }});
            this.refreshState();

            // onchange callback
            this.makeCallback('onBeforeChange', this);
        },
        refreshState: function (initial) {
            if (this.options.step === 1 || this.stepsCount === this.slides.length) {
                this.slides.removeClass(this.options.activeClass).eq(this.currentStep).addClass(this.options.activeClass);
            }
            this.pagerLinks.removeClass(this.options.activeClass).eq(this.currentStep).addClass(this.options.activeClass);
            this.curNum.html(this.currentStep + 1);
            this.allNum.html(this.stepsCount);

            // initial refresh
            if (this.options.maskAutoSize && typeof this.options.step === 'number') {
                this.tmpProps = {};
                this.tmpProps[this.maskSizeProperty] = this.slides.eq(Math.min(this.currentStep, this.slides.length - 1))[this.slideSizeFunction](true);
                this.mask.stop()[initial ? 'css' : 'animate'](this.tmpProps);
            }

            // disabled state
            if (!this.options.circularRotation) {
                this.btnPrev.add(this.btnNext).removeClass(this.options.disabledClass);
                if (this.currentStep === 0)
                    this.btnPrev.addClass(this.options.disabledClass);
                if (this.currentStep === this.stepsCount - 1)
                    this.btnNext.addClass(this.options.disabledClass);
            }

            // add class if not enough slides
            this.gallery.toggleClass('not-enough-slides', this.sumSize <= this.maskSize);
        },
        startRotation: function () {
            this.options.autoRotation = true;
            this.galleryHover = false;
            this.autoRotationStopped = false;
            this.resumeRotation();
        },
        stopRotation: function () {
            this.galleryHover = true;
            this.autoRotationStopped = true;
            this.pauseRotation();
        },
        pauseRotation: function () {
            this.gallery.addClass(this.options.autorotationDisabledClass);
            this.gallery.removeClass(this.options.autorotationActiveClass);
            clearTimeout(this.timer);
        },
        resumeRotation: function () {
            if (!this.autoRotationStopped) {
                this.gallery.addClass(this.options.autorotationActiveClass);
                this.gallery.removeClass(this.options.autorotationDisabledClass);
                this.autoRotate();
            }
        },
        autoRotate: function () {
            var self = this;
            clearTimeout(this.timer);
            if (this.options.autoRotation && !this.galleryHover && !this.autoRotationStopped) {
                this.timer = setTimeout(function () {
                    self.nextSlide(true);
                }, this.options.switchTime);
            } else {
                this.pauseRotation();
            }
        },
        bindHandlers: function (handlersList) {
            var self = this;
            $.each(handlersList, function (index, handler) {
                var origHandler = self[handler];
                self[handler] = function () {
                    return origHandler.apply(self, arguments);
                };
            });
        },
        makeCallback: function (name) {
            if (typeof this.options[name] === 'function') {
                var args = Array.prototype.slice.call(arguments);
                args.shift();
                this.options[name].apply(this, args);
            }
        },
        destroy: function () {
            // destroy handler
            $(window).unbind('load resize orientationchange', this.onWindowResize);
            this.btnPrev.unbind(this.options.event, this.prevSlideHandler);
            this.btnNext.unbind(this.options.event, this.nextSlideHandler);
            this.pagerLinks.unbind(this.options.event, this.pagerLinksHandler);
            this.gallery.unbind('mouseenter', this.hoverHandler);
            this.gallery.unbind('mouseleave', this.leaveHandler);

            // autorotation buttons handlers
            this.stopRotation();
            this.btnPlay.unbind(this.options.event, this.btnPlayHandler);
            this.btnPause.unbind(this.options.event, this.btnPauseHandler);
            this.btnPlayPause.unbind(this.options.event, this.btnPlayPauseHandler);

            // destroy swipe handler
            if (this.swipeHandler) {
                this.swipeHandler.destroy();
            }

            // remove inline styles, classes and pagination
            var unneededClasses = [this.options.galleryReadyClass, this.options.autorotationActiveClass, this.options.autorotationDisabledClass];
            this.gallery.removeClass(unneededClasses.join(' '));
            this.slider.add(this.slides).removeAttr('style');
            if (typeof this.options.generatePagination === 'string') {
                this.pagerHolder.empty();
            }
        }
    };

    // detect device type
    var isTouchDevice = /Windows Phone/.test(navigator.userAgent) || ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch;

    // jquery plugin
    $.fn.scrollGallery = function (opt) {
        return this.each(function () {
            $(this).data('ScrollGallery', new ScrollGallery($.extend(opt, {holder: this})));
        });
    };
}(jQuery));

/*! Hammer.JS - v2.0.4 - 2014-09-28
 * http://hammerjs.github.io/
 *
 * Copyright (c) 2014 Jorik Tangelder;
 * Licensed under the MIT license */
if (Object.create) {
    !function (a, b, c, d) {
        "use strict";
        function e(a, b, c) {
            return setTimeout(k(a, c), b)
        }
        function f(a, b, c) {
            return Array.isArray(a) ? (g(a, c[b], c), !0) : !1
        }
        function g(a, b, c) {
            var e;
            if (a)
                if (a.forEach)
                    a.forEach(b, c);
                else if (a.length !== d)
                    for (e = 0; e < a.length; )
                        b.call(c, a[e], e, a), e++;
                else
                    for (e in a)
                        a.hasOwnProperty(e) && b.call(c, a[e], e, a)
        }
        function h(a, b, c) {
            for (var e = Object.keys(b), f = 0; f < e.length; )
                (!c || c && a[e[f]] === d) && (a[e[f]] = b[e[f]]), f++;
            return a
        }
        function i(a, b) {
            return h(a, b, !0)
        }
        function j(a, b, c) {
            var d, e = b.prototype;
            d = a.prototype = Object.create(e), d.constructor = a, d._super = e, c && h(d, c)
        }
        function k(a, b) {
            return function () {
                return a.apply(b, arguments)
            }
        }
        function l(a, b) {
            return typeof a == kb ? a.apply(b ? b[0] || d : d, b) : a
        }
        function m(a, b) {
            return a === d ? b : a
        }
        function n(a, b, c) {
            g(r(b), function (b) {
                a.addEventListener(b, c, !1)
            })
        }
        function o(a, b, c) {
            g(r(b), function (b) {
                a.removeEventListener(b, c, !1)
            })
        }
        function p(a, b) {
            for (; a; ) {
                if (a == b)
                    return!0;
                a = a.parentNode
            }
            return!1
        }
        function q(a, b) {
            return a.indexOf(b) > -1
        }
        function r(a) {
            return a.trim().split(/\s+/g)
        }
        function s(a, b, c) {
            if (a.indexOf && !c)
                return a.indexOf(b);
            for (var d = 0; d < a.length; ) {
                if (c && a[d][c] == b || !c && a[d] === b)
                    return d;
                d++
            }
            return-1
        }
        function t(a) {
            return Array.prototype.slice.call(a, 0)
        }
        function u(a, b, c) {
            for (var d = [], e = [], f = 0; f < a.length; ) {
                var g = b ? a[f][b] : a[f];
                s(e, g) < 0 && d.push(a[f]), e[f] = g, f++
            }
            return c && (d = b ? d.sort(function (a, c) {
                return a[b] > c[b]
            }) : d.sort()), d
        }
        function v(a, b) {
            for (var c, e, f = b[0].toUpperCase() + b.slice(1), g = 0; g < ib.length; ) {
                if (c = ib[g], e = c ? c + f : b, e in a)
                    return e;
                g++
            }
            return d
        }
        function w() {
            return ob++
        }
        function x(a) {
            var b = a.ownerDocument;
            return b.defaultView || b.parentWindow
        }
        function y(a, b) {
            var c = this;
            this.manager = a, this.callback = b, this.element = a.element, this.target = a.options.inputTarget, this.domHandler = function (b) {
                l(a.options.enable, [a]) && c.handler(b)
            }, this.init()
        }
        function z(a) {
            var b, c = a.options.inputClass;
            return new (b = c ? c : rb ? N : sb ? Q : qb ? S : M)(a, A)
        }
        function A(a, b, c) {
            var d = c.pointers.length, e = c.changedPointers.length, f = b & yb && d - e === 0, g = b & (Ab | Bb) && d - e === 0;
            c.isFirst = !!f, c.isFinal = !!g, f && (a.session = {}), c.eventType = b, B(a, c), a.emit("hammer.input", c), a.recognize(c), a.session.prevInput = c
        }
        function B(a, b) {
            var c = a.session, d = b.pointers, e = d.length;
            c.firstInput || (c.firstInput = E(b)), e > 1 && !c.firstMultiple ? c.firstMultiple = E(b) : 1 === e && (c.firstMultiple = !1);
            var f = c.firstInput, g = c.firstMultiple, h = g ? g.center : f.center, i = b.center = F(d);
            b.timeStamp = nb(), b.deltaTime = b.timeStamp - f.timeStamp, b.angle = J(h, i), b.distance = I(h, i), C(c, b), b.offsetDirection = H(b.deltaX, b.deltaY), b.scale = g ? L(g.pointers, d) : 1, b.rotation = g ? K(g.pointers, d) : 0, D(c, b);
            var j = a.element;
            p(b.srcEvent.target, j) && (j = b.srcEvent.target), b.target = j
        }
        function C(a, b) {
            var c = b.center, d = a.offsetDelta || {}, e = a.prevDelta || {}, f = a.prevInput || {};
            (b.eventType === yb || f.eventType === Ab) && (e = a.prevDelta = {x: f.deltaX || 0, y: f.deltaY || 0}, d = a.offsetDelta = {x: c.x, y: c.y}), b.deltaX = e.x + (c.x - d.x), b.deltaY = e.y + (c.y - d.y)
        }
        function D(a, b) {
            var c, e, f, g, h = a.lastInterval || b, i = b.timeStamp - h.timeStamp;
            if (b.eventType != Bb && (i > xb || h.velocity === d)) {
                var j = h.deltaX - b.deltaX, k = h.deltaY - b.deltaY, l = G(i, j, k);
                e = l.x, f = l.y, c = mb(l.x) > mb(l.y) ? l.x : l.y, g = H(j, k), a.lastInterval = b
            } else
                c = h.velocity, e = h.velocityX, f = h.velocityY, g = h.direction;
            b.velocity = c, b.velocityX = e, b.velocityY = f, b.direction = g
        }
        function E(a) {
            for (var b = [], c = 0; c < a.pointers.length; )
                b[c] = {clientX: lb(a.pointers[c].clientX), clientY: lb(a.pointers[c].clientY)}, c++;
            return{timeStamp: nb(), pointers: b, center: F(b), deltaX: a.deltaX, deltaY: a.deltaY}
        }
        function F(a) {
            var b = a.length;
            if (1 === b)
                return{x: lb(a[0].clientX), y: lb(a[0].clientY)};
            for (var c = 0, d = 0, e = 0; b > e; )
                c += a[e].clientX, d += a[e].clientY, e++;
            return{x: lb(c / b), y: lb(d / b)}
        }
        function G(a, b, c) {
            return{x: b / a || 0, y: c / a || 0}
        }
        function H(a, b) {
            return a === b ? Cb : mb(a) >= mb(b) ? a > 0 ? Db : Eb : b > 0 ? Fb : Gb
        }
        function I(a, b, c) {
            c || (c = Kb);
            var d = b[c[0]] - a[c[0]], e = b[c[1]] - a[c[1]];
            return Math.sqrt(d * d + e * e)
        }
        function J(a, b, c) {
            c || (c = Kb);
            var d = b[c[0]] - a[c[0]], e = b[c[1]] - a[c[1]];
            return 180 * Math.atan2(e, d) / Math.PI
        }
        function K(a, b) {
            return J(b[1], b[0], Lb) - J(a[1], a[0], Lb)
        }
        function L(a, b) {
            return I(b[0], b[1], Lb) / I(a[0], a[1], Lb)
        }
        function M() {
            this.evEl = Nb, this.evWin = Ob, this.allow = !0, this.pressed = !1, y.apply(this, arguments)
        }
        function N() {
            this.evEl = Rb, this.evWin = Sb, y.apply(this, arguments), this.store = this.manager.session.pointerEvents = []
        }
        function O() {
            this.evTarget = Ub, this.evWin = Vb, this.started = !1, y.apply(this, arguments)
        }
        function P(a, b) {
            var c = t(a.touches), d = t(a.changedTouches);
            return b & (Ab | Bb) && (c = u(c.concat(d), "identifier", !0)), [c, d]
        }
        function Q() {
            this.evTarget = Xb, this.targetIds = {}, y.apply(this, arguments)
        }
        function R(a, b) {
            var c = t(a.touches), d = this.targetIds;
            if (b & (yb | zb) && 1 === c.length)
                return d[c[0].identifier] = !0, [c, c];
            var e, f, g = t(a.changedTouches), h = [], i = this.target;
            if (f = c.filter(function (a) {
                return p(a.target, i)
            }), b === yb)
                for (e = 0; e < f.length; )
                    d[f[e].identifier] = !0, e++;
            for (e = 0; e < g.length; )
                d[g[e].identifier] && h.push(g[e]), b & (Ab | Bb) && delete d[g[e].identifier], e++;
            return h.length ? [u(f.concat(h), "identifier", !0), h] : void 0
        }
        function S() {
            y.apply(this, arguments);
            var a = k(this.handler, this);
            this.touch = new Q(this.manager, a), this.mouse = new M(this.manager, a)
        }
        function T(a, b) {
            this.manager = a, this.set(b)
        }
        function U(a) {
            if (q(a, bc))
                return bc;
            var b = q(a, cc), c = q(a, dc);
            return b && c ? cc + " " + dc : b || c ? b ? cc : dc : q(a, ac) ? ac : _b
        }
        function V(a) {
            this.id = w(), this.manager = null, this.options = i(a || {}, this.defaults), this.options.enable = m(this.options.enable, !0), this.state = ec, this.simultaneous = {}, this.requireFail = []
        }
        function W(a) {
            return a & jc ? "cancel" : a & hc ? "end" : a & gc ? "move" : a & fc ? "start" : ""
        }
        function X(a) {
            return a == Gb ? "down" : a == Fb ? "up" : a == Db ? "left" : a == Eb ? "right" : ""
        }
        function Y(a, b) {
            var c = b.manager;
            return c ? c.get(a) : a
        }
        function Z() {
            V.apply(this, arguments)
        }
        function $() {
            Z.apply(this, arguments), this.pX = null, this.pY = null
        }
        function _() {
            Z.apply(this, arguments)
        }
        function ab() {
            V.apply(this, arguments), this._timer = null, this._input = null
        }
        function bb() {
            Z.apply(this, arguments)
        }
        function cb() {
            Z.apply(this, arguments)
        }
        function db() {
            V.apply(this, arguments), this.pTime = !1, this.pCenter = !1, this._timer = null, this._input = null, this.count = 0
        }
        function eb(a, b) {
            return b = b || {}, b.recognizers = m(b.recognizers, eb.defaults.preset), new fb(a, b)
        }
        function fb(a, b) {
            b = b || {}, this.options = i(b, eb.defaults), this.options.inputTarget = this.options.inputTarget || a, this.handlers = {}, this.session = {}, this.recognizers = [], this.element = a, this.input = z(this), this.touchAction = new T(this, this.options.touchAction), gb(this, !0), g(b.recognizers, function (a) {
                var b = this.add(new a[0](a[1]));
                a[2] && b.recognizeWith(a[2]), a[3] && b.requireFailure(a[3])
            }, this)
        }
        function gb(a, b) {
            var c = a.element;
            g(a.options.cssProps, function (a, d) {
                c.style[v(c.style, d)] = b ? a : ""
            })
        }
        function hb(a, c) {
            var d = b.createEvent("Event");
            d.initEvent(a, !0, !0), d.gesture = c, c.target.dispatchEvent(d)
        }
        var ib = ["", "webkit", "moz", "MS", "ms", "o"], jb = b.createElement("div"), kb = "function", lb = Math.round, mb = Math.abs, nb = Date.now, ob = 1, pb = /mobile|tablet|ip(ad|hone|od)|android/i, qb = "ontouchstart"in a, rb = v(a, "PointerEvent") !== d, sb = qb && pb.test(navigator.userAgent), tb = "touch", ub = "pen", vb = "mouse", wb = "kinect", xb = 25, yb = 1, zb = 2, Ab = 4, Bb = 8, Cb = 1, Db = 2, Eb = 4, Fb = 8, Gb = 16, Hb = Db | Eb, Ib = Fb | Gb, Jb = Hb | Ib, Kb = ["x", "y"], Lb = ["clientX", "clientY"];
        y.prototype = {handler: function () {
            }, init: function () {
                this.evEl && n(this.element, this.evEl, this.domHandler), this.evTarget && n(this.target, this.evTarget, this.domHandler), this.evWin && n(x(this.element), this.evWin, this.domHandler)
            }, destroy: function () {
                this.evEl && o(this.element, this.evEl, this.domHandler), this.evTarget && o(this.target, this.evTarget, this.domHandler), this.evWin && o(x(this.element), this.evWin, this.domHandler)
            }};
        var Mb = {mousedown: yb, mousemove: zb, mouseup: Ab}, Nb = "mousedown", Ob = "mousemove mouseup";
        j(M, y, {handler: function (a) {
                var b = Mb[a.type];
                b & yb && 0 === a.button && (this.pressed = !0), b & zb && 1 !== a.which && (b = Ab), this.pressed && this.allow && (b & Ab && (this.pressed = !1), this.callback(this.manager, b, {pointers: [a], changedPointers: [a], pointerType: vb, srcEvent: a}))
            }});
        var Pb = {pointerdown: yb, pointermove: zb, pointerup: Ab, pointercancel: Bb, pointerout: Bb}, Qb = {2: tb, 3: ub, 4: vb, 5: wb}, Rb = "pointerdown", Sb = "pointermove pointerup pointercancel";
        a.MSPointerEvent && (Rb = "MSPointerDown", Sb = "MSPointerMove MSPointerUp MSPointerCancel"), j(N, y, {handler: function (a) {
                var b = this.store, c = !1, d = a.type.toLowerCase().replace("ms", ""), e = Pb[d], f = Qb[a.pointerType] || a.pointerType, g = f == tb, h = s(b, a.pointerId, "pointerId");
                e & yb && (0 === a.button || g) ? 0 > h && (b.push(a), h = b.length - 1) : e & (Ab | Bb) && (c = !0), 0 > h || (b[h] = a, this.callback(this.manager, e, {pointers: b, changedPointers: [a], pointerType: f, srcEvent: a}), c && b.splice(h, 1))
            }});
        var Tb = {touchstart: yb, touchmove: zb, touchend: Ab, touchcancel: Bb}, Ub = "touchstart", Vb = "touchstart touchmove touchend touchcancel";
        j(O, y, {handler: function (a) {
                var b = Tb[a.type];
                if (b === yb && (this.started = !0), this.started) {
                    var c = P.call(this, a, b);
                    b & (Ab | Bb) && c[0].length - c[1].length === 0 && (this.started = !1), this.callback(this.manager, b, {pointers: c[0], changedPointers: c[1], pointerType: tb, srcEvent: a})
                }
            }});
        var Wb = {touchstart: yb, touchmove: zb, touchend: Ab, touchcancel: Bb}, Xb = "touchstart touchmove touchend touchcancel";
        j(Q, y, {handler: function (a) {
                var b = Wb[a.type], c = R.call(this, a, b);
                c && this.callback(this.manager, b, {pointers: c[0], changedPointers: c[1], pointerType: tb, srcEvent: a})
            }}), j(S, y, {handler: function (a, b, c) {
                var d = c.pointerType == tb, e = c.pointerType == vb;
                if (d)
                    this.mouse.allow = !1;
                else if (e && !this.mouse.allow)
                    return;
                b & (Ab | Bb) && (this.mouse.allow = !0), this.callback(a, b, c)
            }, destroy: function () {
                this.touch.destroy(), this.mouse.destroy()
            }});
        var Yb = v(jb.style, "touchAction"), Zb = Yb !== d, $b = "compute", _b = "auto", ac = "manipulation", bc = "none", cc = "pan-x", dc = "pan-y";
        T.prototype = {set: function (a) {
                a == $b && (a = this.compute()), Zb && (this.manager.element.style[Yb] = a), this.actions = a.toLowerCase().trim()
            }, update: function () {
                this.set(this.manager.options.touchAction)
            }, compute: function () {
                var a = [];
                return g(this.manager.recognizers, function (b) {
                    l(b.options.enable, [b]) && (a = a.concat(b.getTouchAction()))
                }), U(a.join(" "))
            }, preventDefaults: function (a) {
                if (!Zb) {
                    var b = a.srcEvent, c = a.offsetDirection;
                    if (this.manager.session.prevented)
                        return void b.preventDefault();
                    var d = this.actions, e = q(d, bc), f = q(d, dc), g = q(d, cc);
                    return e || f && c & Hb || g && c & Ib ? this.preventSrc(b) : void 0
                }
            }, preventSrc: function (a) {
                this.manager.session.prevented = !0, a.preventDefault()
            }};
        var ec = 1, fc = 2, gc = 4, hc = 8, ic = hc, jc = 16, kc = 32;
        V.prototype = {defaults: {}, set: function (a) {
                return h(this.options, a), this.manager && this.manager.touchAction.update(), this
            }, recognizeWith: function (a) {
                if (f(a, "recognizeWith", this))
                    return this;
                var b = this.simultaneous;
                return a = Y(a, this), b[a.id] || (b[a.id] = a, a.recognizeWith(this)), this
            }, dropRecognizeWith: function (a) {
                return f(a, "dropRecognizeWith", this) ? this : (a = Y(a, this), delete this.simultaneous[a.id], this)
            }, requireFailure: function (a) {
                if (f(a, "requireFailure", this))
                    return this;
                var b = this.requireFail;
                return a = Y(a, this), -1 === s(b, a) && (b.push(a), a.requireFailure(this)), this
            }, dropRequireFailure: function (a) {
                if (f(a, "dropRequireFailure", this))
                    return this;
                a = Y(a, this);
                var b = s(this.requireFail, a);
                return b > -1 && this.requireFail.splice(b, 1), this
            }, hasRequireFailures: function () {
                return this.requireFail.length > 0
            }, canRecognizeWith: function (a) {
                return!!this.simultaneous[a.id]
            }, emit: function (a) {
                function b(b) {
                    c.manager.emit(c.options.event + (b ? W(d) : ""), a)
                }
                var c = this, d = this.state;
                hc > d && b(!0), b(), d >= hc && b(!0)
            }, tryEmit: function (a) {
                return this.canEmit() ? this.emit(a) : void(this.state = kc)
            }, canEmit: function () {
                for (var a = 0; a < this.requireFail.length; ) {
                    if (!(this.requireFail[a].state & (kc | ec)))
                        return!1;
                    a++
                }
                return!0
            }, recognize: function (a) {
                var b = h({}, a);
                return l(this.options.enable, [this, b]) ? (this.state & (ic | jc | kc) && (this.state = ec), this.state = this.process(b), void(this.state & (fc | gc | hc | jc) && this.tryEmit(b))) : (this.reset(), void(this.state = kc))
            }, process: function () {
            }, getTouchAction: function () {
            }, reset: function () {
            }}, j(Z, V, {defaults: {pointers: 1}, attrTest: function (a) {
                var b = this.options.pointers;
                return 0 === b || a.pointers.length === b
            }, process: function (a) {
                var b = this.state, c = a.eventType, d = b & (fc | gc), e = this.attrTest(a);
                return d && (c & Bb || !e) ? b | jc : d || e ? c & Ab ? b | hc : b & fc ? b | gc : fc : kc
            }}), j($, Z, {defaults: {event: "pan", threshold: 10, pointers: 1, direction: Jb}, getTouchAction: function () {
                var a = this.options.direction, b = [];
                return a & Hb && b.push(dc), a & Ib && b.push(cc), b
            }, directionTest: function (a) {
                var b = this.options, c = !0, d = a.distance, e = a.direction, f = a.deltaX, g = a.deltaY;
                return e & b.direction || (b.direction & Hb ? (e = 0 === f ? Cb : 0 > f ? Db : Eb, c = f != this.pX, d = Math.abs(a.deltaX)) : (e = 0 === g ? Cb : 0 > g ? Fb : Gb, c = g != this.pY, d = Math.abs(a.deltaY))), a.direction = e, c && d > b.threshold && e & b.direction
            }, attrTest: function (a) {
                return Z.prototype.attrTest.call(this, a) && (this.state & fc || !(this.state & fc) && this.directionTest(a))
            }, emit: function (a) {
                this.pX = a.deltaX, this.pY = a.deltaY;
                var b = X(a.direction);
                b && this.manager.emit(this.options.event + b, a), this._super.emit.call(this, a)
            }}), j(_, Z, {defaults: {event: "pinch", threshold: 0, pointers: 2}, getTouchAction: function () {
                return[bc]
            }, attrTest: function (a) {
                return this._super.attrTest.call(this, a) && (Math.abs(a.scale - 1) > this.options.threshold || this.state & fc)
            }, emit: function (a) {
                if (this._super.emit.call(this, a), 1 !== a.scale) {
                    var b = a.scale < 1 ? "in" : "out";
                    this.manager.emit(this.options.event + b, a)
                }
            }}), j(ab, V, {defaults: {event: "press", pointers: 1, time: 500, threshold: 5}, getTouchAction: function () {
                return[_b]
            }, process: function (a) {
                var b = this.options, c = a.pointers.length === b.pointers, d = a.distance < b.threshold, f = a.deltaTime > b.time;
                if (this._input = a, !d || !c || a.eventType & (Ab | Bb) && !f)
                    this.reset();
                else if (a.eventType & yb)
                    this.reset(), this._timer = e(function () {
                        this.state = ic, this.tryEmit()
                    }, b.time, this);
                else if (a.eventType & Ab)
                    return ic;
                return kc
            }, reset: function () {
                clearTimeout(this._timer)
            }, emit: function (a) {
                this.state === ic && (a && a.eventType & Ab ? this.manager.emit(this.options.event + "up", a) : (this._input.timeStamp = nb(), this.manager.emit(this.options.event, this._input)))
            }}), j(bb, Z, {defaults: {event: "rotate", threshold: 0, pointers: 2}, getTouchAction: function () {
                return[bc]
            }, attrTest: function (a) {
                return this._super.attrTest.call(this, a) && (Math.abs(a.rotation) > this.options.threshold || this.state & fc)
            }}), j(cb, Z, {defaults: {event: "swipe", threshold: 10, velocity: .65, direction: Hb | Ib, pointers: 1}, getTouchAction: function () {
                return $.prototype.getTouchAction.call(this)
            }, attrTest: function (a) {
                var b, c = this.options.direction;
                return c & (Hb | Ib) ? b = a.velocity : c & Hb ? b = a.velocityX : c & Ib && (b = a.velocityY), this._super.attrTest.call(this, a) && c & a.direction && a.distance > this.options.threshold && mb(b) > this.options.velocity && a.eventType & Ab
            }, emit: function (a) {
                var b = X(a.direction);
                b && this.manager.emit(this.options.event + b, a), this.manager.emit(this.options.event, a)
            }}), j(db, V, {defaults: {event: "tap", pointers: 1, taps: 1, interval: 300, time: 250, threshold: 2, posThreshold: 10}, getTouchAction: function () {
                return[ac]
            }, process: function (a) {
                var b = this.options, c = a.pointers.length === b.pointers, d = a.distance < b.threshold, f = a.deltaTime < b.time;
                if (this.reset(), a.eventType & yb && 0 === this.count)
                    return this.failTimeout();
                if (d && f && c) {
                    if (a.eventType != Ab)
                        return this.failTimeout();
                    var g = this.pTime ? a.timeStamp - this.pTime < b.interval : !0, h = !this.pCenter || I(this.pCenter, a.center) < b.posThreshold;
                    this.pTime = a.timeStamp, this.pCenter = a.center, h && g ? this.count += 1 : this.count = 1, this._input = a;
                    var i = this.count % b.taps;
                    if (0 === i)
                        return this.hasRequireFailures() ? (this._timer = e(function () {
                            this.state = ic, this.tryEmit()
                        }, b.interval, this), fc) : ic
                }
                return kc
            }, failTimeout: function () {
                return this._timer = e(function () {
                    this.state = kc
                }, this.options.interval, this), kc
            }, reset: function () {
                clearTimeout(this._timer)
            }, emit: function () {
                this.state == ic && (this._input.tapCount = this.count, this.manager.emit(this.options.event, this._input))
            }}), eb.VERSION = "2.0.4", eb.defaults = {domEvents: !1, touchAction: $b, enable: !0, inputTarget: null, inputClass: null, preset: [[bb, {enable: !1}], [_, {enable: !1}, ["rotate"]], [cb, {direction: Hb}], [$, {direction: Hb}, ["swipe"]], [db], [db, {event: "doubletap", taps: 2}, ["tap"]], [ab]], cssProps: {userSelect: "none", touchSelect: "none", touchCallout: "none", contentZooming: "none", userDrag: "none", tapHighlightColor: "rgba(0,0,0,0)"}};
        var lc = 1, mc = 2;
        fb.prototype = {set: function (a) {
                return h(this.options, a), a.touchAction && this.touchAction.update(), a.inputTarget && (this.input.destroy(), this.input.target = a.inputTarget, this.input.init()), this
            }, stop: function (a) {
                this.session.stopped = a ? mc : lc
            }, recognize: function (a) {
                var b = this.session;
                if (!b.stopped) {
                    this.touchAction.preventDefaults(a);
                    var c, d = this.recognizers, e = b.curRecognizer;
                    (!e || e && e.state & ic) && (e = b.curRecognizer = null);
                    for (var f = 0; f < d.length; )
                        c = d[f], b.stopped === mc || e && c != e && !c.canRecognizeWith(e) ? c.reset() : c.recognize(a), !e && c.state & (fc | gc | hc) && (e = b.curRecognizer = c), f++
                }
            }, get: function (a) {
                if (a instanceof V)
                    return a;
                for (var b = this.recognizers, c = 0; c < b.length; c++)
                    if (b[c].options.event == a)
                        return b[c];
                return null
            }, add: function (a) {
                if (f(a, "add", this))
                    return this;
                var b = this.get(a.options.event);
                return b && this.remove(b), this.recognizers.push(a), a.manager = this, this.touchAction.update(), a
            }, remove: function (a) {
                if (f(a, "remove", this))
                    return this;
                var b = this.recognizers;
                return a = this.get(a), b.splice(s(b, a), 1), this.touchAction.update(), this
            }, on: function (a, b) {
                var c = this.handlers;
                return g(r(a), function (a) {
                    c[a] = c[a] || [], c[a].push(b)
                }), this
            }, off: function (a, b) {
                var c = this.handlers;
                return g(r(a), function (a) {
                    b ? c[a].splice(s(c[a], b), 1) : delete c[a]
                }), this
            }, emit: function (a, b) {
                this.options.domEvents && hb(a, b);
                var c = this.handlers[a] && this.handlers[a].slice();
                if (c && c.length) {
                    b.type = a, b.preventDefault = function () {
                        b.srcEvent.preventDefault()
                    };
                    for (var d = 0; d < c.length; )
                        c[d](b), d++
                }
            }, destroy: function () {
                this.element && gb(this, !1), this.handlers = {}, this.session = {}, this.input.destroy(), this.element = null
            }}, h(eb, {INPUT_START: yb, INPUT_MOVE: zb, INPUT_END: Ab, INPUT_CANCEL: Bb, STATE_POSSIBLE: ec, STATE_BEGAN: fc, STATE_CHANGED: gc, STATE_ENDED: hc, STATE_RECOGNIZED: ic, STATE_CANCELLED: jc, STATE_FAILED: kc, DIRECTION_NONE: Cb, DIRECTION_LEFT: Db, DIRECTION_RIGHT: Eb, DIRECTION_UP: Fb, DIRECTION_DOWN: Gb, DIRECTION_HORIZONTAL: Hb, DIRECTION_VERTICAL: Ib, DIRECTION_ALL: Jb, Manager: fb, Input: y, TouchAction: T, TouchInput: Q, MouseInput: M, PointerEventInput: N, TouchMouseInput: S, SingleTouchInput: O, Recognizer: V, AttrRecognizer: Z, Tap: db, Pan: $, Swipe: cb, Pinch: _, Rotate: bb, Press: ab, on: n, off: o, each: g, merge: i, extend: h, inherit: j, bindFn: k, prefixed: v}), typeof define == kb && define.amd ? define(function () {
            return eb
        }) : "undefined" != typeof module && module.exports ? module.exports = eb : a[c] = eb
    }(window, document, "Hammer");
}

// page init
jQuery(function () {
    initOpenClose();
});

// open-close init
function initOpenClose() {
    jQuery('.side-menu').openClose({
        activeClass: 'active',
        opener: '.opener',
        slider: 'ul',
        animSpeed: 400,
        effect: 'slide'
    });
}

/*
 * jQuery Open/Close plugin
 */
;
(function ($) {
    function OpenClose(options) {
        this.options = $.extend({
            addClassBeforeAnimation: true,
            hideOnClickOutside: true,
            activeClass: 'active',
            opener: '.opener',
            slider: '.slide',
            animSpeed: 400,
            effect: 'fade',
            event: 'click'
        }, options);
        this.init();
    }
    OpenClose.prototype = {
        init: function () {
            if (this.options.holder) {
                this.findElements();
                this.attachEvents();
                this.makeCallback('onInit');
            }
        },
        findElements: function () {
            this.holder = $(this.options.holder);
            this.opener = this.holder.find(this.options.opener);
            this.slider = this.holder.find(this.options.slider);

            if (!this.holder.hasClass(this.options.activeClass)) {
                this.slider.addClass(slideHiddenClass);
            }
        },
        attachEvents: function () {
            // add handler
            var self = this;
            this.eventHandler = function (e) {
                e.preventDefault();
                if (self.slider.hasClass(slideHiddenClass)) {
                    self.showSlide();
                } else {
                    self.hideSlide();
                }
            };
            self.opener.bind(self.options.event, this.eventHandler);

            // hover mode handler
            if (self.options.event === 'over') {
                self.opener.bind('mouseenter', function () {
                    self.holder.removeClass(self.options.activeClass);
                    self.opener.trigger(self.options.event);
                });
                self.holder.bind('mouseleave', function () {
                    self.holder.addClass(self.options.activeClass);
                    self.opener.trigger(self.options.event);
                });
            }

            // outside click handler
            self.outsideClickHandler = function (e) {
                if (self.options.hideOnClickOutside) {
                    var target = $(e.target);
                    if (!target.is(self.holder) && !target.closest(self.holder).length) {
                        self.hideSlide();
                    }
                }
            };
        },
        showSlide: function () {
            var self = this;
            if (self.options.addClassBeforeAnimation) {
                self.holder.addClass(self.options.activeClass);
            }
            self.slider.removeClass(slideHiddenClass);
            $(document).bind('click', self.outsideClickHandler);

            self.makeCallback('animStart', true);
            toggleEffects[self.options.effect].show({
                box: self.slider,
                speed: self.options.animSpeed,
                complete: function () {
                    if (!self.options.addClassBeforeAnimation) {
                        self.holder.addClass(self.options.activeClass);
                    }
                    self.makeCallback('animEnd', true);
                }
            });
        },
        hideSlide: function () {
            var self = this;
            if (self.options.addClassBeforeAnimation) {
                self.holder.removeClass(self.options.activeClass);
            }
            $(document).unbind('click', self.outsideClickHandler);

            self.makeCallback('animStart', false);
            toggleEffects[self.options.effect].hide({
                box: self.slider,
                speed: self.options.animSpeed,
                complete: function () {
                    if (!self.options.addClassBeforeAnimation) {
                        self.holder.removeClass(self.options.activeClass);
                    }
                    self.slider.addClass(slideHiddenClass);
                    self.makeCallback('animEnd', false);
                }
            });
        },
        destroy: function () {
            this.slider.removeClass(slideHiddenClass).css({display: ''});
            this.opener.unbind(this.options.event, this.eventHandler);
            this.holder.removeClass(this.options.activeClass).removeData('OpenClose');
            $(document).unbind('click', this.outsideClickHandler);
        },
        makeCallback: function (name) {
            if (typeof this.options[name] === 'function') {
                var args = Array.prototype.slice.call(arguments);
                args.shift();
                this.options[name].apply(this, args);
            }
        }
    };

    // add stylesheet for slide on DOMReady
    var slideHiddenClass = 'js-slide-hidden';
    $(function () {
        var tabStyleSheet = $('<style type="text/css">')[0];
        var tabStyleRule = '.' + slideHiddenClass;
        tabStyleRule += '{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important}';
        if (tabStyleSheet.styleSheet) {
            tabStyleSheet.styleSheet.cssText = tabStyleRule;
        } else {
            tabStyleSheet.appendChild(document.createTextNode(tabStyleRule));
        }
        $('head').append(tabStyleSheet);
    });

    // animation effects
    var toggleEffects = {
        slide: {
            show: function (o) {
                o.box.stop(true).hide().slideDown(o.speed, o.complete);
            },
            hide: function (o) {
                o.box.stop(true).slideUp(o.speed, o.complete);
            }
        },
        fade: {
            show: function (o) {
                o.box.stop(true).hide().fadeIn(o.speed, o.complete);
            },
            hide: function (o) {
                o.box.stop(true).fadeOut(o.speed, o.complete);
            }
        },
        none: {
            show: function (o) {
                o.box.hide().show(0, o.complete);
            },
            hide: function (o) {
                o.box.hide(0, o.complete);
            }
        }
    };

    // jQuery plugin interface
    $.fn.openClose = function (opt) {
        return this.each(function () {
            jQuery(this).data('OpenClose', new OpenClose($.extend(opt, {holder: this})));
        });
    };
}(jQuery));


var placeSearch, autocomplete;
var componentForm = {
    street_number: 'long_name',
    route: 'long_name',
    intersection: 'long_name',
    political: 'long_name',
    administrative_area_level_1: 'long_name',
    administrative_area_level_2: 'long_name',
    administrative_area_level_3: 'long_name',
    administrative_area_level_4: 'long_name',
    administrative_area_level_5: 'long_name',
    colloquial_area: 'long_name',
    locality: 'long_name',
    ward: 'long_name',
    neighborhood: 'long_name',
    premise: 'long_name',
    subpremise: 'long_name',
    sublocality_level_1: 'long_name',
    country: 'long_name',
    postal_code: 'short_name'
};

function initialize_map_field(type) {
    // Create the autocomplete object, restricting the search
    // to geographical location types.

    /*autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} ($(".address-field")[0]),
            {types: [type],
                scrollwheel: false
            });*/
    // When the user selects an address from the dropdown,
    // populate the address fields in the form.
    /*google.maps.event.addListener(autocomplete, 'place_changed', function () {
        fillInAddress(type);
    });*/
}

// [START region_fillform]
function fillInAddress(type) {

    var flag = true;

    var city = "";
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();


//    for (var component in componentForm) {
//        document.getElementById(component).value = '';
//        document.getElementById(component).disabled = false;
//    }

    console.log(place);

    var shortAddress = [];

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    if (place !== undefined) {
        for (var i = 0; i < place.address_components.length; i++) {
            change = true;

            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                console.log(val);

                if (document.getElementById(addressType))
                    document.getElementById(addressType).value = val;

                if (addressType === 'locality') {

                    flag = false;
                    city = val;
                    $('#temp_val').val(val);

                    var e = jQuery.Event('keydown');
                    e.which = 9;
                    $('#' + addressType).trigger(e);
                     
                    if (typeof lock !== "undefined"){
                        runValidation();
                    }
                    
                } else {
                    if (flag)
                        shortAddress.push(val);

                }

                if ($('.address_not_disabled').length) {
                    continue;
                }
                else {
                    if (document.getElementById(addressType))
                        document.getElementById(addressType).disabled = true;
                }

            }
        }
        
                                locations();


//        if (type == '(cities)'){
//    //        continue;    //        dummyfieldgenerator($(".address-field-autocomplete-city"),city);
//        }else{
//            dummyfieldgenerator($(".common-field-address"),shortAddress.join(","));
//        }


        if (place.formatted_address) {
            if ($("#autocomplete").length > 0)
                $("#autocomplete").data("locate", place.formatted_address);
            make_url();
            try {
                locations();
            }
            catch (err) {
                // Handle error(s) here
            }
        }
       

    }



}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = new google.maps.LatLng(
                    position.coords.latitude, position.coords.longitude);
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}


function make_url() {

    var query = [];

    var link = null;

    $(".action-class").each(function () {

        var name = $(this).data("name");
        if ($(this).val()) {

            query.push(name + "=" + encodeURIComponent($(this).val()));

        } else {
            console.log($(this).data("locate"));
//                query.push(name+"="+encodeURIComponent($(this).val()));
                
                
            }
            
        });
        
        link = $(".continue-btn").data("href");
        
        if (link.split("?").length > 1){
            link = link + "&" + query.join("&");
        
        }else{
            link = link + "?" + query.join("&");
        
        }
        
        link += '&tab=' + locationsTabId;
        
        console.log(link);
        
        $(".continue-btn").attr("href",link);
           
}

function gotoTop(e) {

//    if ($("#venue-name").val() == "" || $("#venue-type").val() == "What Type of Venue?" || $("#autocomplete").val() == "" ){
////        alert("was here");
//        return false;
//    }
//    else{
    $("html, body").animate({scrollTop: 0}, "slow");
//    }
//    
//    $("#fancy-popup").attr("href","#");
//    return false;
}

function toggelSpinner(kurrent) {
    if (kurrent.is(":hidden")) {
        kurrent.prev(".spinner").hide();
        kurrent.show();

    } else {
        kurrent.prev(".spinner").show();
        kurrent.hide();
    }


}
function stopRKey(evt) {
    var evt = (evt) ? evt : ((event) ? event : null);
    var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
    if ((evt.keyCode == 13) && (node.type == "text")) {
        return false;
    }
}

function preventEnterSubmit(e) {
    if (e.which == 13) {
        e.preventDefault();

        var $targ = $(e.target);

        if (!$targ.is("textarea") && !$targ.is(":button,:submit")) {
            var focusNext = false;
            $(this).find(":input:visible:not([disabled],[readonly]), a").each(function () {
                if (this === e.target) {
                    focusNext = true;
                }
                else if (focusNext) {
                    $(this).focus();
                    return false;
                }
            });

            return false;
        }
    }
}


function dummyfieldgenerator(parent, value) {
    parent.next().val(value);
    parent.next().show();
    parent.hide();
    change = true;

}


// page init
bindReady(function () {
    initSameHeight();
});

// align blocks height
function initSameHeight() {
    /*setSameHeight({
        holder: '#product-wrap',
        elements: '.column',
        flexible: true,
        multiLine: true
    });*/
    setSameHeight({
        holder: '#user-info-wrap',
        elements: '.info-inner-holder',
        flexible: true,
        multiLine: true
    });
}

// set same height for blocks
function setSameHeight(opt) {
    // default options
    var options = {
        holder: null,
        skipClass: 'same-height-ignore',
        leftEdgeClass: 'same-height-left',
        rightEdgeClass: 'same-height-right',
        elements: '>*',
        flexible: false,
        multiLine: false,
        useMinHeight: false,
        biggestHeight: false
    };
    for (var p in opt) {
        if (opt.hasOwnProperty(p)) {
            options[p] = opt[p];
        }
    }

    // init script
    if (options.holder) {
        var holders = lib.queryElementsBySelector(options.holder);
        lib.each(holders, function (ind, curHolder) {
            var curElements = [], resizeTimer, postResizeTimer;
            var tmpElements = lib.queryElementsBySelector(options.elements, curHolder);

            // get resize elements
            for (var i = 0; i < tmpElements.length; i++) {
                if (!lib.hasClass(tmpElements[i], options.skipClass)) {
                    curElements.push(tmpElements[i]);
                }
            }
            if (!curElements.length)
                return;

            // resize handler
            function doResize() {
                for (var i = 0; i < curElements.length; i++) {
                    curElements[i].style[options.useMinHeight && SameHeight.supportMinHeight ? 'minHeight' : 'height'] = '';
                }

                if (options.multiLine) {
                    // resize elements row by row
                    SameHeight.resizeElementsByRows(curElements, options);
                } else {
                    // resize elements by holder
                    SameHeight.setSize(curElements, curHolder, options);
                }
            }
            doResize();

            // handle flexible layout / font resize
            function flexibleResizeHandler() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function () {
                    doResize();
                    clearTimeout(postResizeTimer);
                    postResizeTimer = setTimeout(doResize, 100);
                }, 1);
            }
            if (options.flexible) {
                addEvent(window, 'resize', flexibleResizeHandler);
                addEvent(window, 'orientationchange', flexibleResizeHandler);
                FontResizeEvent.onChange(flexibleResizeHandler);
            }
            // handle complete page load including images and fonts
            addEvent(window, 'load', flexibleResizeHandler);
        });
    }

    // event handler helper functions
    function addEvent(object, event, handler) {
        if (object.addEventListener)
            object.addEventListener(event, handler, false);
        else if (object.attachEvent)
            object.attachEvent('on' + event, handler);
    }
}

/*
 * SameHeight helper module
 */
SameHeight = {
    supportMinHeight: typeof document.documentElement.style.maxHeight !== 'undefined', // detect css min-height support
    setSize: function (boxes, parent, options) {
        var calcHeight, holderHeight = typeof parent === 'number' ? parent : this.getHeight(parent);

        for (var i = 0; i < boxes.length; i++) {
            var box = boxes[i];
            var depthDiffHeight = 0;
            var isBorderBox = this.isBorderBox(box);
            lib.removeClass(box, options.leftEdgeClass);
            lib.removeClass(box, options.rightEdgeClass);

            if (typeof parent != 'number') {
                var tmpParent = box.parentNode;
                while (tmpParent != parent) {
                    depthDiffHeight += this.getOuterHeight(tmpParent) - this.getHeight(tmpParent);
                    tmpParent = tmpParent.parentNode;
                }
            }
            calcHeight = holderHeight - depthDiffHeight;
            calcHeight -= isBorderBox ? 0 : this.getOuterHeight(box) - this.getHeight(box);
            if (calcHeight > 0) {
                box.style[options.useMinHeight && this.supportMinHeight ? 'minHeight' : 'height'] = calcHeight + 'px';
            }
        }

        lib.addClass(boxes[0], options.leftEdgeClass);
        lib.addClass(boxes[boxes.length - 1], options.rightEdgeClass);
        return calcHeight;
    },
    getOffset: function (obj) {
        if (obj.getBoundingClientRect) {
            var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft;
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
            var clientLeft = document.documentElement.clientLeft || document.body.clientLeft || 0;
            var clientTop = document.documentElement.clientTop || document.body.clientTop || 0;
            return {
                top: Math.round(obj.getBoundingClientRect().top + scrollTop - clientTop),
                left: Math.round(obj.getBoundingClientRect().left + scrollLeft - clientLeft)
            };
        } else {
            var posLeft = 0, posTop = 0;
            while (obj.offsetParent) {
                posLeft += obj.offsetLeft;
                posTop += obj.offsetTop;
                obj = obj.offsetParent;
            }
            return {top: posTop, left: posLeft};
        }
    },
    getStyle: function (el, prop) {
        if (document.defaultView && document.defaultView.getComputedStyle) {
            return document.defaultView.getComputedStyle(el, null)[prop];
        } else if (el.currentStyle) {
            return el.currentStyle[prop];
        } else {
            return el.style[prop];
        }
    },
    getStylesTotal: function (obj) {
        var sum = 0;
        for (var i = 1; i < arguments.length; i++) {
            var val = parseFloat(this.getStyle(obj, arguments[i]));
            if (!isNaN(val)) {
                sum += val;
            }
        }
        return sum;
    },
    getHeight: function (obj) {
        return obj.offsetHeight - this.getStylesTotal(obj, 'borderTopWidth', 'borderBottomWidth', 'paddingTop', 'paddingBottom');
    },
    getOuterHeight: function (obj) {
        return obj.offsetHeight;
    },
    isBorderBox: function (obj) {
        var f = this.getStyle, styleValue = f(obj, 'boxSizing') || f(obj, 'WebkitBoxSizing') || f(obj, 'MozBoxSizing');
        return styleValue === 'border-box';
    },
    resizeElementsByRows: function (boxes, options) {
        var currentRow = [], maxHeight, maxCalcHeight = 0, firstOffset = this.getOffset(boxes[0]).top;
        for (var i = 0; i < boxes.length; i++) {
            if (this.getOffset(boxes[i]).top === firstOffset) {
                currentRow.push(boxes[i]);
            } else {
                maxHeight = this.getMaxHeight(currentRow);
                maxCalcHeight = Math.max(maxCalcHeight, this.setSize(currentRow, maxHeight, options));
                firstOffset = this.getOffset(boxes[i]).top;
                currentRow = [boxes[i]];
            }
        }
        if (currentRow.length) {
            maxHeight = this.getMaxHeight(currentRow);
            maxCalcHeight = Math.max(maxCalcHeight, this.setSize(currentRow, maxHeight, options));
        }
        if (options.biggestHeight) {
            for (i = 0; i < boxes.length; i++) {
                boxes[i].style[options.useMinHeight && this.supportMinHeight ? 'minHeight' : 'height'] = maxCalcHeight + 'px';
            }
        }
    },
    getMaxHeight: function (boxes) {
        var maxHeight = 0;
        for (var i = 0; i < boxes.length; i++) {
            maxHeight = Math.max(maxHeight, this.getOuterHeight(boxes[i]));
        }
        return maxHeight;
    }
};

/*
 * FontResize Event
 */
FontResizeEvent = (function (window, document) {
    var randomID = 'font-resize-frame-' + Math.floor(Math.random() * 1000);
    var resizeFrame = document.createElement('iframe');
    resizeFrame.id = randomID;
    resizeFrame.className = 'font-resize-helper';
    resizeFrame.style.cssText = 'position:absolute;width:100em;height:10px;top:-9999px;left:-9999px;border-width:0';

    // wait for page load
    function onPageReady() {
        document.body.appendChild(resizeFrame);

        // use native IE resize event if possible
        if (/MSIE (6|7|8)/.test(navigator.userAgent)) {
            resizeFrame.onresize = function () {
                window.FontResizeEvent.trigger(resizeFrame.offsetWidth / 100);
            };
        }
        // use script inside the iframe to detect resize for other browsers
        else {
            var doc = resizeFrame.contentWindow.document;
            doc.open();
            doc.write('<scri' + 'pt>window.onload = function(){var em = parent.document.getElementById("' + randomID + '");window.onresize = function(){if(parent.FontResizeEvent){parent.FontResizeEvent.trigger(em.offsetWidth / 100);}}};</scri' + 'pt>');
            doc.close();
        }
    }
    if (window.addEventListener)
        window.addEventListener('load', onPageReady, false);
    else if (window.attachEvent)
        window.attachEvent('onload', onPageReady);

    // public interface
    var callbacks = [];
    return {
        onChange: function (f) {
            if (typeof f === 'function') {
                callbacks.push(f);
            }
        },
        trigger: function (em) {
            for (var i = 0; i < callbacks.length; i++) {
                callbacks[i](em);
            }
        }
    };
}(this, document));

/*
 * Utility module
 */
lib = {
    hasClass: function (el, cls) {
        return el && el.className ? el.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)')) : false;
    },
    addClass: function (el, cls) {
        if (el && !this.hasClass(el, cls))
            el.className += " " + cls;
    },
    removeClass: function (el, cls) {
        if (el && this.hasClass(el, cls)) {
            el.className = el.className.replace(new RegExp('(\\s|^)' + cls + '(\\s|$)'), ' ');
        }
    },
    extend: function (obj) {
        for (var i = 1; i < arguments.length; i++) {
            for (var p in arguments[i]) {
                if (arguments[i].hasOwnProperty(p)) {
                    obj[p] = arguments[i][p];
                }
            }
        }
        return obj;
    },
    each: function (obj, callback) {
        var property, len;
        if (typeof obj.length === 'number') {
            for (property = 0, len = obj.length; property < len; property++) {
                if (callback.call(obj[property], property, obj[property]) === false) {
                    break;
                }
            }
        } else {
            for (property in obj) {
                if (obj.hasOwnProperty(property)) {
                    if (callback.call(obj[property], property, obj[property]) === false) {
                        break;
                    }
                }
            }
        }
    },
    event: (function () {
        var fixEvent = function (e) {
            e = e || window.event;
            if (e.isFixed)
                return e;
            else
                e.isFixed = true;
            if (!e.target)
                e.target = e.srcElement;
            e.preventDefault = e.preventDefault || function () {
                this.returnValue = false;
            };
            e.stopPropagation = e.stopPropagation || function () {
                this.cancelBubble = true;
            };
            return e;
        };
        return {
            add: function (elem, event, handler) {
                if (!elem.events) {
                    elem.events = {};
                    elem.handle = function (e) {
                        var ret, handlers = elem.events[e.type];
                        e = fixEvent(e);
                        for (var i = 0, len = handlers.length; i < len; i++) {
                            if (handlers[i]) {
                                ret = handlers[i].call(elem, e);
                                if (ret === false) {
                                    e.preventDefault();
                                    e.stopPropagation();
                                }
                            }
                        }
                    };
                }
                if (!elem.events[event]) {
                    elem.events[event] = [];
                    if (elem.addEventListener)
                        elem.addEventListener(event, elem.handle, false);
                    else if (elem.attachEvent)
                        elem.attachEvent('on' + event, elem.handle);
                }
                elem.events[event].push(handler);
            },
            remove: function (elem, event, handler) {
                var handlers = elem.events[event];
                for (var i = handlers.length - 1; i >= 0; i--) {
                    if (handlers[i] === handler) {
                        handlers.splice(i, 1);
                    }
                }
                if (!handlers.length) {
                    delete elem.events[event];
                    if (elem.removeEventListener)
                        elem.removeEventListener(event, elem.handle, false);
                    else if (elem.detachEvent)
                        elem.detachEvent('on' + event, elem.handle);
                }
            }
        };
    }()),
    queryElementsBySelector: function (selector, scope) {
        scope = scope || document;
        if (!selector)
            return [];
        if (selector === '>*')
            return scope.children;
        if (typeof document.querySelectorAll === 'function') {
            return scope.querySelectorAll(selector);
        }
        var selectors = selector.split(',');
        var resultList = [];
        for (var s = 0; s < selectors.length; s++) {
            var currentContext = [scope || document];
            var tokens = selectors[s].replace(/^\s+/, '').replace(/\s+$/, '').split(' ');
            for (var i = 0; i < tokens.length; i++) {
                token = tokens[i].replace(/^\s+/, '').replace(/\s+$/, '');
                if (token.indexOf('#') > -1) {
                    var bits = token.split('#'), tagName = bits[0], id = bits[1];
                    var element = document.getElementById(id);
                    if (element && tagName && element.nodeName.toLowerCase() != tagName) {
                        return [];
                    }
                    currentContext = element ? [element] : [];
                    continue;
                }
                if (token.indexOf('.') > -1) {
                    var bits = token.split('.'), tagName = bits[0] || '*', className = bits[1], found = [], foundCount = 0;
                    for (var h = 0; h < currentContext.length; h++) {
                        var elements;
                        if (tagName == '*') {
                            elements = currentContext[h].getElementsByTagName('*');
                        } else {
                            elements = currentContext[h].getElementsByTagName(tagName);
                        }
                        for (var j = 0; j < elements.length; j++) {
                            found[foundCount++] = elements[j];
                        }
                    }
                    currentContext = [];
                    var currentContextIndex = 0;
                    for (var k = 0; k < found.length; k++) {
                        if (found[k].className && found[k].className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'))) {
                            currentContext[currentContextIndex++] = found[k];
                        }
                    }
                    continue;
                }
                if (token.match(/^(\w*)\[(\w+)([=~\|\^\$\*]?)=?"?([^\]"]*)"?\]$/)) {
                    var tagName = RegExp.$1 || '*', attrName = RegExp.$2, attrOperator = RegExp.$3, attrValue = RegExp.$4;
                    if (attrName.toLowerCase() == 'for' && this.browser.msie && this.browser.version < 8) {
                        attrName = 'htmlFor';
                    }
                    var found = [], foundCount = 0;
                    for (var h = 0; h < currentContext.length; h++) {
                        var elements;
                        if (tagName == '*') {
                            elements = currentContext[h].getElementsByTagName('*');
                        } else {
                            elements = currentContext[h].getElementsByTagName(tagName);
                        }
                        for (var j = 0; elements[j]; j++) {
                            found[foundCount++] = elements[j];
                        }
                    }
                    currentContext = [];
                    var currentContextIndex = 0, checkFunction;
                    switch (attrOperator) {
                        case '=':
                            checkFunction = function (e) {
                                return (e.getAttribute(attrName) == attrValue)
                            };
                            break;
                        case '~':
                            checkFunction = function (e) {
                                return (e.getAttribute(attrName).match(new RegExp('(\\s|^)' + attrValue + '(\\s|$)')))
                            };
                            break;
                        case '|':
                            checkFunction = function (e) {
                                return (e.getAttribute(attrName).match(new RegExp('^' + attrValue + '-?')))
                            };
                            break;
                        case '^':
                            checkFunction = function (e) {
                                return (e.getAttribute(attrName).indexOf(attrValue) == 0)
                            };
                            break;
                        case '$':
                            checkFunction = function (e) {
                                return (e.getAttribute(attrName).lastIndexOf(attrValue) == e.getAttribute(attrName).length - attrValue.length)
                            };
                            break;
                        case '*':
                            checkFunction = function (e) {
                                return (e.getAttribute(attrName).indexOf(attrValue) > -1)
                            };
                            break;
                        default :
                            checkFunction = function (e) {
                                return e.getAttribute(attrName)
                            };
                    }
                    currentContext = [];
                    var currentContextIndex = 0;
                    for (var k = 0; k < found.length; k++) {
                        if (checkFunction(found[k])) {
                            currentContext[currentContextIndex++] = found[k];
                        }
                    }
                    continue;
                }
                tagName = token;
                var found = [], foundCount = 0;
                for (var h = 0; h < currentContext.length; h++) {
                    var elements = currentContext[h].getElementsByTagName(tagName);
                    for (var j = 0; j < elements.length; j++) {
                        found[foundCount++] = elements[j];
                    }
                }
                currentContext = found;
            }
            resultList = [].concat(resultList, currentContext);
        }
        return resultList;
    },
    trim: function (str) {
        return str.replace(/^\s+/, '').replace(/\s+$/, '');
    },
    bind: function (f, scope, forceArgs) {
        return function () {
            return f.apply(scope, typeof forceArgs !== 'undefined' ? [forceArgs] : arguments);
        };
    }
};

// DOM ready handler
function bindReady(handler) {
    var called = false;
    var ready = function () {
        if (called)
            return;
        called = true;
        handler();
    };
    if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', ready, false);
    } else if (document.attachEvent) {
        if (document.documentElement.doScroll && window == window.top) {
            var tryScroll = function () {
                if (called)
                    return;
                if (!document.body)
                    return;
                try {
                    document.documentElement.doScroll('left');
                    ready();
                } catch (e) {
                    setTimeout(tryScroll, 0);
                }
            };
            tryScroll();
        }
        document.attachEvent('onreadystatechange', function () {
            if (document.readyState === 'complete') {
                ready();
            }
        });
    }
    if (window.addEventListener)
        window.addEventListener('load', ready, false);
    else if (window.attachEvent)
        window.attachEvent('onload', ready);
}
