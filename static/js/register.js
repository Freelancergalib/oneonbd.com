// showing the registration form
function showRegistration(){
	$(document).ready(function(){
		$('#overlay').css({'display':'block'});
		$('#register').css({'top':'0'});

		document.querySelectorAll('#register input').forEach((e)=>{
			e.value = '';
		});

		$('#register form input[name=full-name]').focus();
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
			e.setAttribute('disabled','');
		});

		document.querySelector('#close').style.opacity = 0.5;
		document.querySelector('#close').removeAttribute('onclick');

		$('button[type=submit] span').css({'display':'none'});

		document.querySelector('#register .ajax-loader').style.display = 'block';
		// let formValues = $(this).serialize();
		
		setTimeout(()=>{
			alert("Registered successfully!");
			hideRegistration();
			$('#registerClick').remove();
		},3000);
	});
});