$(document).ready(function () {
    // "use strict";

    $('span.link-text').hover(function () {
        $(this).toggleClass('text-danger');
    });

    $('body').scrollspy({
        target: '#navbar',
        offset: 20
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > window.innerHeight/8) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    $("form").submit(function (e) {
        //stop default submission for authentication
        e.preventDefault();

        var error = "";
        if ($("#name").val() == "") {
            error += "Name is required <br>";
        }
        if ($("#email").val() == "") {
            error += "Email is required <br>";
        }
        if ($("#message").val() == "") {
            error += "Message is required <br>";
        }

        if (error != "") {
            $("#error").addClass("alert alert-danger");
            $("#error").html(error);
        } else {
            $(this).unbind("submit").submit();
        }
    })
});