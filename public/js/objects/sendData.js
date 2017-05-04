var SendData = ( function () {


    function SendData(){
        

    }

    SendData.prototype.sendData = function(data , url , method)
    {

         
         $.ajax({
         	url: url,
         	type: method,
         	headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 			},
 			dataType: 'json',
         	data: {data: data},
         })
         .done(function(data) {
            
            let rol = data;
         	return rol;
         	/*console.log(data);
         	if (data.error == "false")
         	{
         		alert(data.message);
         	}

         	if (data.error == "true")
         	{
         		alert(data.message);
         	}*/

         });
         
         
    }

    return new SendData ;

}());