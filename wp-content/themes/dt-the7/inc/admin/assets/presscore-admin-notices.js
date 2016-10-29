(function($){

	$(function() {

		$('.presscore-notice .notice-dismiss').on( 'click.presscore-dismiss-notice', function( event ) {
			event.preventDefault();
			$.post(ajaxurl, {
				action: 'presscore-admin-notice',
				code: $(this).parent().attr('id').replace('presscore-notice-', ''),
				_ajax_nonce: presscoreNotices._ajax_nonce
			});
		});

		if ( typeof(localStorage) != 'undefined' ) {
			localStorage.setItem('dt_cut_page', window.location.href);
		}
	});

}(jQuery));
