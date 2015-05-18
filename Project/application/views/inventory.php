<?php include('header.php');?>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Sale Price</th>
            <th>In Stock</th>
        </tr>
    </thead>
    <tbody>
     
        	

<?php
	
	foreach ($items as $item) {
		echo "<tr><td>".$item->id."</td><td>". $item->name."</td><td>".$item->price."</td><td>".$item->sale_price."</td><td>".$item->stock."</td></tr>";
	}

?>
       
    </tbody>
</table>


<?php include('footer.php');?>