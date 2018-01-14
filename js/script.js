jQuery(function ($) {

    $('.phone-mask').mask('+7 (999) 999-99-99');

    /*$('.modal').on('shown.bs.modal', function () {
        var $dialog = $(this).find('.modal-dialog');
        $dialog.css('transform', 'translateY(' + Math.round(($(window).height() - $dialog.height()) / 2) + 'px)');
    });*/

    $('#check, #check-b')
        .on('show.bs.modal', function (e) {
            $(this).find('form')[0].reset();
            $(this).removeClass('loading');
        })
        .on('submit', 'form', function (e) {
            var $this = $(this),
                $modal = $this.parents('.modal').addClass('loading');

            $.ajax({
                url: '/',
                type: 'POST',
                dataType: 'json',
                data: $this.serialize(),
                success: function (data) {
                    var $alert = $('#alert-message')
                        .toggleClass('alert-danger', data.error)
                        .toggleClass('alert-success', !data.error)
                        .html(data.message)
                        .fadeIn(100);

                    setTimeout(function () {
                        $alert.fadeOut(500);
                    }, 5000);

                    $this[0].reset();
                    $modal.modal('hide');
                }
            });
        e.preventDefault();
    });
});