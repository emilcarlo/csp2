<?php
function  display_title(){
	echo "CART";
}

function display_content(){
	require 'connection.php';
	// $string = file_get_contents("assets/items.json");
	// $items = json_decode($string, true);
	echo "My Shopping Cart";
	$total = 0;
	// print_r($_SESSION['cart']); // Array ([] => '')
	foreach ($_SESSION['cart'] as $index => $quantity) {
		$sql = "SELECT * FROM items WHERE id='$index'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		extract($row);
		
		$subtotal = $price * $quantity; 
		$total += $subtotal; ?>
		<div class='cart_items_container'>
			<div class="cart_items"><?php echo "<img class='cart_image' src='$image' style='float:left'>" ?></div>
			<div class="cart_items_saved"> <?php
						echo "<strong>Model: </strong><indent>".$name."<br>";
						echo "<strong>Description: </strong><br>".$description."<br>";
						echo "<strong>Unit Price: </strong>".$price.".00<br>";	?>
			</div>
			<div class="cart_subtotal"></div>


		<?php
		echo "";

		echo "<div class='item_subtotal' style='float:right'>
			<h4>$subtotal</h4>
			<form method='post' action='add_to_cart.php?index=$index'>
			<input type='number' name='change_quantity' min=1 value='$quantity'><br>
			<button class='btn btn-primary'>Change Quantity</button><br>
			<a href='remove_from_cart.php?index=$index'>
			<button type='button' class='btn btn-danger'>Remove From Cart</button></a>
			</form>
			</div>";
		echo "</div>";
		echo "<div style='clear:both'></div>";
	}
	echo "<center><h3>Total: Php $total</h3></center>";
}

require 'index.php';

?>