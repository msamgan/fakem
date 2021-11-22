$(document).ready(function () {
    $('.copy').on('click', function () {
        navigator.clipboard.writeText($(this).html())
        $.notify($(this).attr('data-key') + " copied...", {
            className: "success",
            position: "bottom center"
        });
    })
});
