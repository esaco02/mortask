

$(document).ready(function () {
    $("#btnSearch").on("click", function () {
        var text = $("#tbxSearch").val();
        console.log(text);


        $.ajax({
            url: '/search',
            method: 'POST',
            data: {
                _token: apptoken,
                text: text
            },
            success: function (result) {
                var returnedData = JSON.parse(response);
                $.each(returnedData, function (index, value) {
                    //alert( index + ": " + value );

                });


            }
        });

    });
});
