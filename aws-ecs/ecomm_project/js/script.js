function delete_product(value)
	{
		var delete_rec="delete_rec";
		var url="Product.php?del="+value+"&operation="+delete_rec;
		var url1="Product.php?delete="+value;
		window.location=url;
	}
function update_product(value)
	{
		window.location="fetch_query.php?update="+value;
	}