$(document).ready(function () {
    "use strict";

    $('span.link-text').hover(function () {
        $(this).toggleClass('text-danger');
    })

    $('body').scrollspy({
        target: '#navbar',
        offset: 20
    })

    //stop default submission for authentication
    $("form").submit(function (e) {
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