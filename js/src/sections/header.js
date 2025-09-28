import $ from "jquery";

$(window).scroll(function () {
    if ($(window).scrollTop() >= 50) {
        $(".header").addClass("header--fixed");
        $(".nav").addClass("nav--fixed");
        $(".nav__logo").addClass("nav__logo--fixed");
        $(".nav__menu").addClass("nav__menu--fixed");
        $(".nav .sub-menu").addClass("sub-menu--fixed");
        $(".nav__button").addClass("nav__button--fixed");
        $(".nav__hamburger").addClass("nav__hamburger--fixed");
    } else {
        $(".header").removeClass("header--fixed");
        $(".nav").removeClass("nav--fixed");
        $(".nav__logo").removeClass("nav__logo--fixed");
        $(".nav__menu").removeClass("nav__menu--fixed");
        $(".nav .sub-menu").removeClass("sub-menu--fixed");
        $(".nav__button").removeClass("nav__button--fixed");
        $(".nav__hamburger").removeClass("nav__hamburger--fixed");
    }
});

$(document).ready(function ($) {
    function updateContainerClass() {
        if (window.matchMedia("(min-width: 1280px) and (max-width: 1330px)").matches) {
            $("header .container").each(function () {
                $(this)
                    .removeClass("container")
                    .addClass("container-fluid container-fluid--padding");
            });
        } else {
            // Optionally, you can revert the changes when outside the media query range
            $("header .container-fluid").each(function () {
                $(this)
                    .removeClass("container-fluid container-fluid--padding")
                    .addClass("container");
            });
        }
    }

    // Run the function on DOM ready and on window resize
    updateContainerClass();
    $(window).on("resize", function () {
        updateContainerClass();
    });
});
