<?php 
	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			echo 'Email adresi gerekli <br />';
		} else{
			echo htmlspecialchars($_POST['email']) . '<br />';
		}
		// check title
		if(empty($_POST['title'])){
			echo 'Ürün Adı Gerekli <br />';
		} else{
			echo htmlspecialchars($_POST['title']) . '<br />';
		}
		// check ingredients
		if(empty($_POST['ingredients'])){
			echo 'En az 1 adet açıklayıcı bilgi gerekli <br />';
		} else{
			echo htmlspecialchars($_POST['ingredients']) . '<br />';
		}
	} // end POST check
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
