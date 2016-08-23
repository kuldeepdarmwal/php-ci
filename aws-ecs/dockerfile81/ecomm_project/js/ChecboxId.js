$( document ).ready(function() {
var table = $('#example').dataTable();

var Carts=[];
var selectedCart;

    console.log("Javascript Ready");
    $('#submitCart').click(function(){ 

		var mydata = table.$('input').serialize();
		alert(mydata);
		var myURL = encodeURI("BodyAddToCart.php?key="+mydata);
		$.ajax({
				type:"GET",
				url:myURL,
				success:function(response)
				{
				
				$("#cartdisp").html(response);

				}
				
		});
		
		//console.log(url);
       // window.location=url;
    });
	 
	   $(function () { $('#myCart').modal('hide')});


  /* $(function () { $('#myCart').on('hide.bs.modal', function () {
      alert('Hey, I heard you like modals...');})
   });*/
});

 
