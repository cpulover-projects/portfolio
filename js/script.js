$('span.link-text').hover(function () {
    $(this).toggleClass('text-white')
})

$('body').scrollspy({ target: '#navbar' })

//stop default submission for authen
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

    if(error!=""){
    $("#error").addClass("alert alert-danger");
    $("#error").html(error);
    } else {
        $(this).unbind("submit").submit();
    }
})
