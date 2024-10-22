const loader = document.querySelector('.preloader');
const main = document.querySelector('.comtainer');

function init() {
    setTimeout(() => {
        main.style.transition = "1s ease-in";
        loader.style.opacity = 0;
        loader.style.display = 'none';

        main.style.display = 'block';
        setTimeout(() => (main.style.opacity = 1), 50);
    }, 2000);
}

init();

// setTimeout(function () {
//     document.querySelector(".preloader").style.display = "none";

//     setTimeout(() => (body.style.opacity = 1), 50);
// }, 1000);

$(document).ready(function () {

    $('.petals').attr({
        "data-aos": "zoom-in",
        "data-aos-duration": "1500"
    });
    $('.upperpic').attr({
        "data-aos": "fade-right",
        "data-aos-duration": "1000"
    });
    $('.lowerpic').attr({
        "data-aos": "fade-left",
        "data-aos-duration": "1000"
    });
    $('.aleft').attr({
        "data-aos": "fade-right",
        "data-aos-duration": "1300"
    });
    $('.c').attr({
        "data-aos": "fade-left",
        "data-aos-duration": "1300"
    });
    $('.bleft').attr({
        "data-aos": "fade-right",
        "data-aos-duration": "1300"
    });
    $('.d').attr({
        "data-aos": "fade-left",
        "data-aos-duration": "1500"
    });
    $('.strock').attr({
        "data-aos": "fade-left",
        "data-aos-duration": "1500"
    });
    $('.twoicons').attr({
        "data-aos": "fade-left",
        "data-aos-duration": "1500"
    });
    $('.dotcontent').attr({
        "data-aos": "fade-left",
        "data-aos-duration": "1500"
    });


    setTimeout(() => {
        AOS.init({
            once: true,
        });
    });
});


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
    },
    // navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    // },
});


var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});



$(document).ready(function () {


    $(window).scroll(function () {

        // .scrollTop() retrieves vertical position of the scroll bar for the first element in a set of matched elements
        var scroll = $(window).scrollTop();

        var objectSelect = $('.navcall');

        // .offset() retrieves current position of element relative to document
        var objectPosition = objectSelect.offset().top;

        if (scroll > objectPosition) {
            $("a").addClass("scrollTop");
            $('#newnav').addClass('displayNav');
            $('.navbar-brand').addClass('newnavlogo');
        } else {
            $('#newnav').removeClass('displayNav');
            $('.navbar-brand').removeClass('.newnavlogo');
            $("a").removeClass("scrollTop");
        }
    });


    window.addEventListener("scroll", reveal);
});

// tab section

$(function () {
    $(".tabAuto li:first").addClass("current");
    $(".tgh-box div").not(":first").hide();
    $(".tabAuto li").click(function () {
        $(this).addClass("current").siblings().removeClass("current");
        var index = $(".tabAuto li").index(this);
        $(".tgh-box div").eq(index).fadeIn().siblings().fadeOut();
    })
})

$(function () {
    $(".tabAuto li:first").addClass("current");
    $(".tgh-box div:first").css('display', 'block');
    autoScrollone();
    // contentHover();
    currentHoverone();

});
var i = -1;
var n = $(".tabAuto li").length - 1;
var offset = 3000;
var timerone = null;

function autoScrollone() {
    $(".tabAuto li .active-icon").removeClass("active-one");
    $(".tabAuto li .default-icon").eq(i).removeClass("default-one");
    $(".tabAuto li span").eq(i).removeClass("white");
    i++;
    if (i > n)
        i = 0;
    slideone(i);
    timerone = window.setTimeout(autoScrollone, offset);
}

function slideone(i) {
    $(".tabAuto li").eq(i).addClass("current").siblings().removeClass("current");
    $(".tabAuto li .active-icon").eq(i).addClass("active-one");
    $(".tabAuto li .default-icon").eq(i).addClass("default-one");
    $(".tabAuto li span").eq(i).addClass("white");
    $(".tgh-box div").eq(i).fadeIn().siblings().hide();
}


function currentHoverone() {
    $(".tabAuto li").hover(function () {
        $(".tabAuto li .active-icon").removeClass("active-one");
        $(".tabAuto li .default-icon").removeClass("default-one");
        $(".tabAuto li span").eq(i).removeClass("white");
        if (timerone) {
            clearTimeout(timerone);
            i = $(this).prevAll().length;
            slideone(i);
        }
    }, function () {
        timerone = window.setTimeout(autoScrollone, offset);
        this.blur();
        return false;
    })

}

//tab section close

//slide-map section

$(document).ready(function () {
    $('.slide-contain').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        cssease: true,
        autoplaySpeed: 3000,

    });
});

//platforms section


$(function () {
    $(".platforms-tabs li:first").addClass("active");
    $(".platforms-content div").not(":first").hide();
    $(".platforms-tabs li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        var index2 = $(".platforms-tabs li").index(this);
        $(".platforms-content div").eq(index2).fadeIn().siblings().fadeOut();
    })
})

$(function () {
    $(".platforms-tabs li:first").addClass("active");
    $(".platforms-content div:first").css('display', 'block');
    autoScroll();
    // contentHover();
    currentHover();

});
var i2 = -1;
var n2 = $(".platforms-tabs li").length2 - 1;
var offset2 = 3000;
var timer2 = null;

function autoScroll() {
    i2++;
    if (i2 > n2)
        i2 = 0;
    slide(i2);
    timer2 = window.setTimeout(autoScroll, offset2);
}

function slide(i2) {
    $(".platforms-tabs li").eq(i2).addClass("active").siblings().removeClass("active");
    $(".platforms-content div").eq(i2).fadeIn().siblings().hide();
}

function currentHover() {
    $(".platforms-tabs li").click(function () {
        if (timer2) {
            clearTimeout(timer2);
            i2 = $(this).prevAll().length2;
            slide(i2);
        }
    }
        // , function () {
        //     timer2 = window.setTimeout(autoScroll, offset2);
        //     this.blur();
        //     return false;
        // }
    )
}

//little crousel start

$(document).ready(function () {
    $('.track').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        cssease: true,
        autoplaySpeed: 1500,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });
});
