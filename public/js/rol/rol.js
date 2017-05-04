var Rol = (function(){


	var rol = function()
	{
		
		let url = BASE_URL + "createrol"
		var data = {
			"rol": $('input[name=rol]').val(),
			"slug": $('input[name=slug]').val(),
			"description": $('textarea[name=description]').val()
		}

		        
		        $.ajax({
		        	url: url,
		        	type: "POST",
		        	headers: {
		       		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					dataType: 'json',
		        	data: {data: data},
		        })
		        .done(function(data) {
		           
		        	console.log(data.data);
		        	if (data.error == "false")
		        	{
		        		alert(data.message);
		        		$('table#rolTable').append('<tr><td></td><td>'+data.data.name+'</td><td><span class="label label-success">'+data.data.slug+'</span></td><td>'+data.data.description+'</td></tr>');
		        		
		        	}

		        	if (data.error == "true")
		        	{
		        		alert(data.message);
		        	}

		        });
	}

	return {
		roles :function(){
			rol();
		}
	}

}());