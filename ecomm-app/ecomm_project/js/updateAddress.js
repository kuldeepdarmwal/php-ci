$( document ).ready(function() {


	
    console.log("Javascript Ready");
    $(":button").click(function(){
				alert($(this).val());
			var request=$(this).val();
			switch(request){
			case "Address":
				$.ajax({
				type:"POST",
				url:"BodyUpdateAddress.php",
				success:function(response)
				{
					//alert(response);
				
				$("#addressdisp").html(response);
				}	
		});
				break;
			case "Confirm":
				window.location="Confirm.php";
				break;
			case "Cancel":
				window.location="index.php";
				break;
			case "PDF":
				window.location="CalltoCartPDF.php";
				break;
			default: console.log("Invalid option");
				break;
			
			
			}

		/**/
		
		//console.log(url);
       // window.location=url;
    });
	 
	   $(function () { $('#myAddress').modal('hide')});

});