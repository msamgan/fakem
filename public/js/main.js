$(document).ready(function () {
    $('.copy').on('click', function () {
        navigator.clipboard.writeText($(this).html())
        $.notify($(this).attr('data-key') + " Copied...", {
            className: "success",
            position: "bottom left"
        });
    })
});
