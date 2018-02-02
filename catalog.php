<?php


function display_title(){
	echo "Menu Page";
}

function display_content(){

	$filter = isset($_GET['category']) ? $_GET['category'] : 'All';
	require 'connection.php';



	/*echo "<form><select class='form-control' name='category'><option>All</option>";
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$category = $row['name'];

		echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'>$category</option>";
	}
	echo "</select>";
	echo "<button class='btn btn-default'>Search</button></form>";*/

	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn,$sql);
	echo "<div class='row'>";
	while($item = mysqli_fetch_assoc($result)) {
		$index = $item['id'];

		if($filter == 'All' || $item['category_id'] == $filter){

			echo "<div class='item_display'><img class='item_image' src='".$item['image']."'>";
			echo "<div class=item_details>";
			echo $item['name']." - P".$item['price'].".00 <br>";
			if(isset($_SESSION['login_user']) && $_SESSION['role'] == 'admin'){
				echo "<a class='render_modal_body'data-toggle='modal' href='#myModal' data-index='$index'>Edit</a>";
				echo " | <a class='delete_modal_body'data-toggle='modal' href='#myModal' data-index='$index'>Delete</a>";
			}
			else if(isset($_SESSION['login_user'])){
				echo "<form class='form-inline' method='POST' action='add_to_cart.php?index=$index'>";
					echo "<input class='form-control' type='number' name='quantity' min=0>";
					echo "<button class='btn btn-default'>Add</i></button>";
				echo "</form>";
			}
			echo "</div>"; 
			echo "</div>"; 
		}
	} //endforeach //endwhile
	echo "</div>";	

	//edit modal
	echo '<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body" id="modal-body">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>';
} //end function display_content()

require "index.php";

?>

<script type="text/javascript">
	$("#add_item").click(function(){
		$.ajax({
			method: 'post',
			url: 'render_modal_body_endpoint.php',
			data: {
				add : true,
			},
			success: function(data){
				// alert(data)
				$("#modal-body").html(data);
				$("#myModal").modal('show');
			}
		})
	})

	$(".render_modal_body").click(function(){
		var index = $(this).data('index')
		// $.post('render_modal_body_endpoint.php',{
		// 	index : index	
		// },function(data){
		// 	$("#modal-body").html(data);
		// })

		$.ajax({
			method: 'post',
			url: 'render_modal_body_endpoint.php',
			data: {
				edit : true,
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

	$(".delete_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'delete_modal_body_endpoint.php',
			data: {
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})
</script>