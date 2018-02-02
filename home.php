<?php
function display_title(){
	echo "MGA SIMPLENG ILAW";
}

function display_content(){ ?>


<div class="home-promotion-image">
	<img class="promotion-image" src="assets/images/drop_lights.jpg">
</div>

<div class="home-shop-container">
	<figure><a href="catalog.php?category=1"><img class="home-shop-image" src="assets/images/shop_ceiling_light.jpg"></a></figure>
	<div class="home-shop-text">
		<div class="home-shop-text-button">SHOP CEILING LIGHTS</div>
	</div>
</div>
<div class="home-shop-container">
	<figure><a href="catalog.php?category=2"><img class="home-shop-image" src="assets/images/shop_floor_lamp.jpg"></a></figure>
	<div class="home-shop-text">
		<div class="home-shop-text-button">SHOP INDOOR LAMPS</div>
	</div>
</div>
<div class="home-shop-container">
	<figure><a href="catalog.php?category=3"><img class="home-shop-image" src="assets/images/shop_wall_lamp.jpg"></a></figure>
	<div class="home-shop-text">
		<div class="home-shop-text-button">SHOP WALL LIGHTS</div>
	</div>
</div>


<div class="home-new-selection-image">
	<img class="new-selection-image" src="assets/images/floor_lamp.jpg">
</div>



<div class="home-shop-container">
	<figure><a href="catalog.php?category=4"><img class="home-shop-image" src="assets/images/chandelier.jpg"></a></figure>
	<div class="home-shop-text">
		<div class="home-shop-text-button">SHOP CHANDELIERS</div>
	</div>
</div>
<div class="home-shop-container">
	<figure><a href="catalog.php?category=5"><img class="home-shop-image" src="assets/images/outdoor_lamps.jpg"></a></figure>
	<div class="home-shop-text">
		<div class="home-shop-text-button">SHOP OUTDOOR LAMPS</div>
	</div>
</div>
<div class="home-shop-container">
	<figure><a href="catalog.php?category=6"><img class="home-shop-image" src="assets/images/desk_lamp.jpg"></a></figure>
	<div class="home-shop-text">
		<div class="home-shop-text-button">SHOP DESK LIGHTS</div>
	</div>
</div>

<?php
}

require "index.php";

?>