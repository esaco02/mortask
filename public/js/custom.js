$(document).ready(function () {
    $("#btnSearch").on("click", function () {
        search();
    });

    $(document).on('keypress', function (e) {
        if (e.which == 13) {
            search();
        }
    });
});

function search() {
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
}