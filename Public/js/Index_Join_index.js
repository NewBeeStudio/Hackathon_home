var first = true;
$(document).ready(function(){
	$('#e-mail').keyup(function(){
		if (first) {
			first = false;
		}
		else {
			if($('#name').val()!='' && $('#college').val()!='' && $('#grade').val()!='' && $('#major').val()!='' && $('#tel').val()!='')
				$('#submit').fadeIn();
		}
	});
});