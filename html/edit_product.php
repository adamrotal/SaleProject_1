<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<center>
			<h1 class="logo">
				<span class="sale">Sale</span><span class="project">Project</span>
			</h1>
		</center>
		<div id="userLogOut">	
			<b>Hi, <?php echo $user["username"];?>!</b><br>
			<b><a id="logoutButton" href="<?php logout();?>">logout</a></b>
		</div>
		<ul class="navig">
			<li><a href="<?php RoutingDashboard('getCatalog.php');?>">Catalog</a></li>
			<li><a href="<?php RoutingDashboard('getProduk.php');?>">Your Product</a></li>
			<li><a href="<?php RoutingDashboard('getAddProduct.php');?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php');?>">Sales</a></li>
			<li><a href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>Please update your product here</h1>
		<hr>
		
	<div class="detailProduct">
		<form action="postEditProduct.php" method="post" enctype="multipart/form-data">
			<b>Name</b><br>
			<input id="name" type="text" name="name"></textarea>
			<b>Description (max 200 chars)</b><br>
			<textarea id="description" name="description"></textarea>
			<b>Price (IDR)</b><br>
			<input id="price" type="text" name="price">
			<b>Photo</b><br>
			<input type="file" name="photo"><br><br>
			<input type="hidden" value="<php echo $user['id']?>" name="id_active">
			<button type="cancel" onclick="#">CANCEL</button>
			<button type="submit" value="submit">UPDATE</button>
		</form>
	</div>

		
	</div>
</body>
</html>