$(document).ready(function () {
    $("#btnSearch").on("click", function () {
        var text = $("#tbxSearch").val();
        $.ajax({
            url: '/search',
            method: 'POST',
            data: {
                _token: apptoken,
                text: text
            },
            success: function (result) {
                jQuery("#results").html(result.html);

            }
        });
    });
});
