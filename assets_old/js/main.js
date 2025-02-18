/**
* Template Name: The Rawdah Madrasah - v1.0
* Template URL: https://zohirs.com
* Author: Zohir
*/

// JavaScript Document

$(window).on('load', function () {
    "use strict";
    /*----------------------------------------------------*/
    /*	Preloader
    /*----------------------------------------------------*/
    var preloader = $('#preloader'),
        loader = preloader.find('#loading');
    loader.fadeOut();
    preloader.delay(400).fadeOut('slow');
});


$(document).ready(function () {
    "use strict";
    /*----------------------------------------------------*/
    /*	Navigtion Menu
    /*----------------------------------------------------*/
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".navbar");
    const navMenuOverlay = document.querySelector(".nav-overlay");
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
        navMenuOverlay.classList.toggle("active");
    });
    document.querySelectorAll(".menu-close").forEach((link) =>
        link.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
            navMenuOverlay.classList.remove("active");
        })
    );

    /*----------------------------------------------------*/
    /*	returns the year (four digits)
    /*----------------------------------------------------*/
    var year = new Date().getFullYear()
    document.getElementById("year").innerHTML = (year);
});

$(window).on('scroll', function () {
    "use strict";
    /*----------------------------------------------------*/
    /*	Navigtion Menu Scroll
    /*----------------------------------------------------*/
    var b = $(window).scrollTop();
    if (b > 80) {
        $(".main-header").addClass("fixd");
        $(".back-to-top").addClass("active");
    } else {
        $(".main-header").removeClass("fixd");
        $(".back-to-top").removeClass("active");
    }

});


document.addEventListener("DOMContentLoaded", function () {
    "use strict";
    /*----------------------------------------------------*/
    /*	Video Player
    /*----------------------------------------------------*/
    let playButton = document.querySelector('.video-player a');
    playButton.addEventListener('click', playVideo);
    function playVideo(e) {
        e.preventDefault();
        let videoContainer = this.parentNode;
        let videoUrl = this.href;
        let videoId = videoUrl.split('.com/')[1];
        let iframeUrl;
        if (videoUrl.includes('vimeo')) {
            // vimeo
            videoId = videoId.split('?')[0];
            iframeUrl = `//player.vimeo.com/video/${videoId}?autoplay=1`;
        } else {
            // youtube
            videoId = videoId.split('v=')[1];
            iframeUrl = `//www.youtube.com/embed/${videoId}?autoplay=1`;
        }
        videoContainer.innerHTML = `<iframe src="${iframeUrl}" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>`;
    }


});

