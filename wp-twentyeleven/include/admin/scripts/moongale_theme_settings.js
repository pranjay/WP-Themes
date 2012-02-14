/*############### Error messages ######################*/	
jQuery(function(){
	var error_msg = jQuery("#message p[class='setting-error-message']");
	// look for admin messages with the "setting-error-message" error class
	if (error_msg.length != 0) {
		// get the title
		var error_setting = error_msg.attr('title');
		
		// look for the label with the "for" attribute=setting title and give it an "error" class (style this in the css file!)
		jQuery("label[for='" + error_setting + "']").addClass('error');
		
		// look for the input with id=setting title and add a red border to it.
		jQuery("input[id='" + error_setting + "']").attr('style', 'border-color: red');
	}	
});

jQuery(document).ready(function($) {
        // Logo Image Upload
	$('#upload_logo_btn').click(function() {
	    formfield = $('#moongale_logo_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Top Background Image
	$('#upload_top_bg_img_button').click(function() {
	    formfield = $('#top_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Header Background Image
	$('#upload_header_bg_img_button').click(function() {
	    formfield = $('#header_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Main Content Area Background Image
	$('#upload_home_page_before_content_bg_img_button').click(function() {
	    formfield = $('#home_page_before_content_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Header Background Image
	$('#upload_page_title_bg_img_button').click(function() {
	    formfield = $('#page_title_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Main Content Area Background Image
	$('#upload_main_bg_img_button').click(function() {
	    formfield = $('#main_content_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Main Content Area Background Image
	$('#upload_bottom_bg_img_button').click(function() {
	    formfield = $('#bottom_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // Main Content Area Background Image
	$('#upload_footer_bg_img_button').click(function() {
	    formfield = $('#footer_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // One Continuous Background Image
	$('#upload_one_continuous_bg_img_button').click(function() {
	    formfield = $('#one_continuous_bg_img').attr('id');
	    tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	    return false;
	});
        // used for all of the above to insert the uploaded image url into the proper text field
	window.send_to_editor = function(html) {
	    imgurl = $('img',html).attr('src');
	    $('#'+ formfield).val(imgurl);
	    tb_remove();
	}
});