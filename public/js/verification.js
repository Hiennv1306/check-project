jQuery(document).ready( function($) {
	$("#btngoogle").click( function() {
    var dt = $('#google_head_tag_verification_item').val();
    var data = {
			action: 'test_response',
      post_var: dt
		};
		// the_ajax_script.ajaxurl is a variable that will contain the url to the ajax processing file
	 	$.post(the_ajax_script.ajaxurl, data, function(response) {
			alert(response);
	 	});
	 	return false;
	});
});
