$(document).ready(function(){
		$('#username').fadeOut(4000);
		setTimeout("$('#username').text('webdevsaravanan')",5000);
		$('#fe').fadeOut('fast');
		$('#js').fadeOut('fast');
		$('#php').fadeOut('fast');
		$('#cs').fadeOut('fast');

		setTimeout("$('#username').fadeIn(4000)",6000);
		$('#fe').fadeIn(3000);
		$('#js').fadeIn(5000);
		$('#php').fadeIn(7000);
		$('#cs').fadeIn(9000);
});