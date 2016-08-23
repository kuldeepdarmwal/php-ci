<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/adminDashboard.js">

</script>
<body>
<h1 class="page-header">Active User Summary</h1>
 <div id="chart_div"> </div>
<h2 class="sub-header">Order Catalog</h2>
						<?php
					include_once ('Helper_page.php');
					$sql =$helper_page->read_record("distinct u.user_name as Username,p.product_name as Productname,b.price as Price ", "user_details u, product_details p, buy_details b", "u.user_id=b.user_id and b.product_id=p.product_id order by u.user_id desc");
					$counter=0;
					?>
<table class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>User Name</th>
				  <th>Product Name</th>
                  <th>Price</th>
                </tr>
              </thead>
			  <?php
   if (is_array($sql)) {
      foreach ($sql as $row) {
    ?>
       <div class="table-responsive">
            
              <tbody>
				<tr>
       <td width="60" ><b><?=++$counter ?></b></td>
       <td width="30" ><?=$row['Username'] ?>              </td>
       <td width="80" ><?=$row['Productname'] ?>        </td>
	   <td width="80" ><?=$row['Price'] ?>        </td>
       </tr>	
              </tbody>
           <?php
    }
echo "</table>";
   }
	?>
          </div>

</body>
</html>
