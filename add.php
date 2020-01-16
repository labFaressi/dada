<?php 
	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			echo 'Email adresi gerekli <br />';
		}else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Email adresi uygun değil.';
			}
		// check title
		if(empty($_POST['title'])){
			echo 'Ürün Adı Gerekli <br />';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				echo 'Ürün adında boşluk ve harfler dışında birşey kullanamazsınız.';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			echo 'En az 1 adet açıklayıcı bilgi gerekli <br />';
		}else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'Ürün özelliklerini aralara ","(virgül) koyarak ayırınız.';
			}
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
