$('#bouton1').on('click', function(){
	$.ajax({
		url: '/testajax',
		type: 'POST',
		dataType: 'json',
		data: {param1: 'value1'},
	})
	.done(function() {
		console.log("success");
		var tab=$.parseJSON('json');
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});