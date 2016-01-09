// PREPENDS ::
	// BOOTSTRAP JS/TRANSITION.JS
	// BOOTSTRAP JS/TAB.JS
	// BOOTSTRAP JS/MODAL.JS


$('#tabs a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
})


$(document).ready(function() {
	if(window.location.href.indexOf('#thank-you') != -1) {
		$('#thank-you').modal('show');
	}
});
