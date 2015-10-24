function messageAnimation() {
	setTimeout(function() {
	    $('#flashMessage').addClass('open');
	}, 100);

	setTimeout(function() {
  		$(".js-flashMessage").removeClass('open');
	}, 5000);
}

messageAnimation();

$(document).on('click', '#closeFlashMessage', function() {
  	$('#flashMessage').removeClass('open');
});