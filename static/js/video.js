//showing updated data in the table on every change in database
function updateTable(){
	$(document).ready(()=>{
		$.ajax({
			type:'POST',
			url:'function_manage_video.php',
			data: {cmd:'show_table'},
			success:(response)=>{
				let responseJsn = JSON.parse(response)
				document.querySelector('table').innerHTML=`<tr>
					<th scope="col">#</th>
					<th scope="col">Notice title</th>
					<th scope="col">Actions</th>
				</tr>`
				responseJsn.data.forEach((e,i)=>{
					document.querySelector('table').innerHTML += `<tr scop='row'>
					<td>${i+1}</td>
					<td pk='${e.id}'><a href='https://www.youtube.com/watch?v=${e.url}'>https://www.youtube.com/watch?v=${e.url}</a></td>
					<td>
						<button onclick="updateNotice(this)" class="btn btn-outline-info">Update</button>
						<button onclick="deleteNotice(this)" class="btn btn-outline-danger">Delete</button>
					</td>
				</tr>`
				})
				$('#overlay').css({'display':'none'})

			},
			error:(err)=>{
				alert('Something went wrong. Please try again!')
				$('#overlay').css({'display':'none'})
			}
		})
	})
}

//global variables for updating database
var dbId, dbIdDel;

$(document).ready(()=>{

	//handling the form submission
	$('form').on('submit',e=>{
		event.preventDefault()

		$('#overlay').css({'display':'block'})

		let videoUrl = $('input[name=notice]').val().split('=')[1]

		//inserting data to the database
		if($('input[type=submit]').val()=='Add'){
			$.ajax({
				type:'POST',
				url:'function_manage_video.php',
				data: {videoUrl:videoUrl,cmd:'add'},
				success:(response)=>{
					let responseJsn = JSON.parse(response)					
					if (responseJsn.success==1) {
						$('input[name=notice]').val('');
						updateTable()
					}
				},
				error:(err)=>{
					alert('Something went wrong. Please try again!')
				}
			})
		}

		//updating data of the database
		else if($('input[type=submit]').val()=='Update'){
			let videoUrl = $('input[name=notice]').val().split('=')[1]

			$.ajax({
				type:'POST',
				url:'function_manage_video.php',
				data: {cmd:'update',pk:parseInt(dbId),newUrl:videoUrl},
				success:(response)=>{
					updateTable()
				},
				error:(err)=>{
					alert('Something went wrong. Please try again!')
				}
			})
		}
	})
})

//preparing the form for updating data in the database
function updateNotice(e){
	dbId = e.parentElement.parentElement.children[1].getAttribute('pk')
	document.querySelector('input[name=notice]').value = e.parentElement.parentElement.children[1].innerText
	document.querySelector('#submit').innerHTML = `<input class="btn btn-outline-info mr-2" type="submit" name="update_notice" value="Update">
								<input class="btn btn-outline-danger" type="button" onclick="cancelUpdate()" value="Cancel">`
}

//canceling the update if not needed
function cancelUpdate(){
	document.querySelector('input[name=notice]').value = ''
	document.querySelector('#submit').innerHTML = `<input class="btn btn-outline-white" type="submit" name="add_notice" value="Add"></input>`
}


// deleting data from the database
function deleteNotice(e){
	dbIdDel = e.parentElement.parentElement.children[1].getAttribute('pk')
	if (confirm("Are you sure that you want to delete this?")) {
		$('#overlay').css({'display':'block'})
		$.ajax({
			type:"POST",
			url:'function_manage_video.php',
			data:{cmd:'delete',pk:parseInt(dbIdDel)},
			success:function(response){
				console.log(response)
				updateTable()
			},
			error:function(err){
				console.log(err)
				alert('Something went wrong. Please try again!')
			}
		})
	}
}