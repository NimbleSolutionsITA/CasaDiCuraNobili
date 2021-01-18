$(document).ready(function () {

    $('.newsticker').newsTicker({
        row_height:20,
        max_rows: 1,
        speed: 600,
        direction: 'up',
        duration: 4000,
        autostart: 1,
        pauseOnHover: 0
    });

    // Change language
    $("#langageSwitcher a").click(function () {
        var locale = $(this).attr('id');
        var _token = $("input[name=_token]").val();

        $.ajax({
            url:"/language",
            type:"POST",
            data: {locale: locale, _token: _token},
            datatype: 'jason',
            success: function (data) {

            },
            error: function (data) {

            },
            beforeSend: function (data) {

            },
            complete: function (data) {
                window.location.reload(true);
            }
        });
    });
});
