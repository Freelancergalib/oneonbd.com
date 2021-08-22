// showing the registration form
function showRegistration(){
	$(document).ready(function(){
		$('#overlay').css({'display':'block'});
		$('#register').css({'top':'0'});

		document.querySelectorAll('#register input').forEach((e)=>{
			e.value = '';
		});

		$('#register form input[name=full_name]').focus();
	});
}

// hiding the registration form
function hideRegistration(){
	$(document).ready(function(){
		$('#register').css({'top':'-12000px'});
		setTimeout(()=>$('#overlay').css({'display':'none'}),1000);
	});
}

// managing the form submission
$(document).ready(function(){
	$('#register form').on('submit', function(event){
		event.preventDefault(); //prenvents the browser to reload

		// disabling the input so that the user can not edit them after submission
		document.querySelectorAll('#register input').forEach((e)=>{
			e.setAttribute('readonly','');
		});

		document.querySelector('#close').classList.add('disabled');
		document.querySelector('#close').removeAttribute('onclick');

		$('button[type=submit] span').css({'display':'none'});
		document.querySelector('button[type=submit]').classList.add('disabled');

		document.querySelector('#register .ajax-loader').style.display = 'block';

		// from processing starts here
		let formValues = $(this).serialize();
		console.log(formValues);
		$.ajax({
			type: "POST",
			url: 'register.php',
			data: formValues,
			success: function(result){
				let resultJeson = JSON.parse(result);
				if(resultJeson.success==0){
					alert(resultJeson.msg);
					hideRegistration();

					document.querySelectorAll('#register input').forEach((e)=>{
						e.removeAttribute('readonly');
					});
					document.querySelector('#close').classList.remove('disabled');
					document.querySelector('#close').setAttribute('onclick','hideRegistration()');
					$('button[type=submit] span').css({'display':'block'});
					document.querySelector('#register .ajax-loader').style.display = 'none';
					document.querySelector('button[type=submit]').classList.remove('disabled');
				}else{
					alert(resultJeson.msg);
					hideRegistration();
					$('#registerClick').remove();
				}
			},
			error: function(){
				alert("Sending request to the server failed. Please try again!");
			}
		});
	});
});

function a(){
	showRegistration();

	setTimeout(()=>{
		document.querySelector('#register input[name=full_name]').value = 'jgrfjhf'
		document.querySelector('#register input[name=phn]').value = 'jgrfjhf'
		document.querySelector('#register input[name=pass]').value = 'jgrfjhf'
		document.querySelector('#register input[name=mail]').value = 'jgrfjhf@gmai.com'
	},1000)
}