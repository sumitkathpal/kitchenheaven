(function ($) {
    $(document).on('click', '.notice.is-dismissible .notice-dismiss', function () {
        $.ajax({
            url: dismiss_notification_params.ajax_url,
            type: 'POST',
            data: {
                action: 'dismiss_unique_restaurant_notification',
                nonce: dismiss_notification_params.nonce
            }
        });
    });
})(jQuery);
