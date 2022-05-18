<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admincp</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>

<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<style>
	.cke_editable {
    width: 750px !important;
    cursor: text;
}
</style>
	<h3 class="title_admin">Welcome to AdminCP</h3>
	<div class="wrapper">
	<?php 
			include("config/config.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
	?>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script>

</body>
</html>