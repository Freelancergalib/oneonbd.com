//showing updated data in the table on every change in database
function updateTable(){
	$(document).ready(()=>{
		$.ajax({
			type:'POST',
			url:'user.php',
			data: {cmd:'show_users'},
			success:(response)=>{
				let responseJsn = JSON.parse(response)
				console.log(response)
				responseJsn.data.forEach((e,i)=>{
					document.querySelector('table').innerHTML += `<tr scop='row'>
					<td>${i+1}</td>
					<td>${e.full_name}</td>
					<td>${e.mail}</td>
					<td>${e.phn}</td>
				</tr>`
				})
			},
			error:(err)=>{
				alert('Something went wrong. Please try again!')
			}
		})
	})
}