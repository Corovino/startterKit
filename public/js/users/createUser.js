var User = (function(){


   let createUser = function()
   {


   		let url = BASE_URL + "createrol";
   		let currentToken = $('meta[name="csrf-token"]').attr('content');

   		var data = {
   			'name'      :$('input[name=name]').val(),
   			'email'     :$('input[name=email]').val(),
   			'password'  :$('input[name=password]').val(),
   			'id_rol'    :$('#id_rol').val(),
   			'_token'    : $('input[name="_token"]').val()
   		}
   	
   		$.ajax({
   			url: BASE_URL+'createUser',
   			type: 'POST',
   			dataType: 'json',
   			data: {data : data, _token : currentToken }
   		})
   		.done(function(data) {
   			console.log(data);
   		});

        return false;
   }

   return {

   		user : function(){
   			createUser();
   			
   		}

   }



}());