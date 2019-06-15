(function ($) {
    $(document).ready(function () {
        $(".table-contact .delete").on('click', function () {
            let id = $(this).attr('data-element');
            let value = {
                id: id
            };
            let msg = '';
            $.ajax({
                url: "http://localhost/bikeweb/src/deletecontact.php",
                type: "post",
                data: value,
                success: function (data) {
                    location. reload(true);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    $('#records_table').hide();
                    $('#fornecedores-content h3').show();
                    let trHTML = data.msg;
                    $('#fornecedores-content h3').html(trHTML);
                    $('#fornecedores-content h3').addClass('danger');
                },
                done: function () {
                    $('#loading').remove()
                }
            });
        });

        $(".table-budget .delete").on('click', function () {
            let id = $(this).attr('data-element');
            let value = {
                id: id
            };
            let msg = '';
            $.ajax({
                url: "http://localhost/bikeweb/src/deletebudget.php",
                type: "post",
                data: value,
                success: function (data) {
                    location. reload(true);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    $('#records_table').hide();
                    $('#fornecedores-content h3').show();
                    let trHTML = data.msg;
                    $('#fornecedores-content h3').html(trHTML);
                    $('#fornecedores-content h3').addClass('danger');
                },
                done: function () {
                    $('#loading').remove()
                }
            });
        });
    });})(jQuery);
