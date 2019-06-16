(function ($) {
    $(document).ready(function () {
        $(".table-contact .delete").on('click', function () {
            let id = $(this).attr('data-element');
            let value = {
                id: id
            };
            $.ajax({
                url: "http://localhost/bikeweb/src/deletecontact.php",
                type: "post",
                data: value,
                success: function (data) {
                    location. reload(true);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });

        $(".table-budget .delete").on('click', function () {
            let id = $(this).attr('data-element');
            let value = {
                id: id
            };
            $.ajax({
                url: "http://localhost/bikeweb/src/deletebudget.php",
                type: "post",
                data: value,
                success: function (data) {
                    location. reload(true);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        });
    });
})(jQuery);
