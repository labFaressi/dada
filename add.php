<?php 
	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'] . '<br />';
	// 	echo $_GET['title'] . '<br />';
	// 	echo $_GET['ingredients'] . '<br />';
	// }
	if(isset($_POST['submit'])){
		echo $_POST['email'] . '<br />';
		echo $_POST['title'] . '<br />';
		echo $_POST['ingredients'] . '<br />';
	}
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Email</label>
			<input type="text" name="email">
			<label>Ürün Adı</label>
			<input type="text" name="title">
			<label>Ürün İçeriği</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>
