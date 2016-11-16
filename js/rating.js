

$('.rate').rating({
    extendSymbol: function () {
        
        $(this).tooltip({
            container: 'body',
            placement: 'bottom',
            title: 'Rate this service'
        });
        
        //$(this).on('rating.rateleave', function () {
            $('.rate').on('change', function () {
            //alert("hello");
            var rate = $('.rate').rating('rate');
            $("#dialog-confirm").dialog({
                resizable: false,
                height: "auto",
                width: 400,
                modal: true,
                buttons: {
                    "Confirm": function () {
                        $(this).dialog("close");
                        $(this).tooltip('hide');
                         title="This service has been rated";
                        var id = $('.rate').attr('id');
                        console.log(id);
                        $.ajax({
                            url: 'services/rate.php',
                            type: 'post',
                            data: { 'action': 'rate', 'id': id, 'rating': rate },
                            success: function (data, status) {
                                if (data == "ok") {
                                    console.log(data);
                                    console.log("Readonly");
                                    $('.rate').attr('data-readonly','');
                                    //  $('.rate').rating(data);
                                }
                            },
                            error: function (xhr, desc, err) {
                                console.log(xhr);
                                console.log("Details: " + desc + "\nError:" + err);
                            }
                        }); // end ajax call
                    },
                    Cancel: function () {
                        $(this).dialog("close");
                        console.log("Close");
                        $('.rate').rating('rate', '');
                       
                    }
                }
            });
        });
    }
});
