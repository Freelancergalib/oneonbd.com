$(document).ready(function(){
	$('body').on('scroll',(e)=>{
		let scrollX = document.body.scrollTop;
		scrollX = (scrollX/1000)*9 < 0.75 ? 0.75 : (scrollX/1000)*9;

		document.querySelector('nav').style = `background-color: rgba(187, 185, 185, ${scrollX}) !important;`;
	});
});