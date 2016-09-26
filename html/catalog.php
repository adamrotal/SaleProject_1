<!DOCTYPE html>
<html>
<head>
	<title>Catalog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/dashboard.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<center><img class="logo" src="<?php echo $ServerRoot;?>/aset/logoText.png"></center>
		<div id="userLogOut">	
			<b>Hi, <?php echo $user["username"];?>!</b><br>
			<b><a href="<?php logout();?>">logout</a></b>
		</div>
		<ul class="navig">
			<li><a class="active" href="<?php RoutingDashboard('getCatalog.php');?>">Catalog</a></li>
			<li><a href="<?php RoutingDashboard('getProduk.php');?>">Your Product</a></li>
			<li><a href="<?php RoutingDashboard('getAddProduct.php');?>">Add Product</a></li>
			<li><a href="<?php RoutingDashboard('getSales.php');?>">Sales</a></li>
			<li><a href="<?php RoutingDashboard('getPurchase.php');?>">Purchases</a></li>
		</ul>
		<h1>What are you going to buy today?</h1>
		<hr>
		<div class="searchbox">	
			<form>
	        	<input type="text" placeholder="Search catalog..." required>
	            <input id="searching" type="button" value="GO">
			</form>
		</div>

		<div class="byRadio"">
			<div id="by">by</div>
			<form id="radioButton" action="">
				<input type="radio" name="category" value="product"> product<br>
				<input type="radio" name="category" value="store"> store<br>
			</form>
		</div>
		<?php if(isset($produks)){
			foreach ($produks as $produk) {?>
				<div class="catalog">
					<b><?php echo $produk['usernamePenjual'];?></b><br>
					added this on <?php echo $produk['tanggalDiTambah'];?><br>
					<hr>
					<table id="produk"  cellpadding="10">
						<tr>
							<td id="foto"><img class="fotoProduk" src="<?php echo $produk['gambar'];?>" alt="foto produk"></td>
							<td id="deskripsi">
								<font size="5"><b><?php echo $produk['nama'];?></b></font><br><br>
								<font size="5">IDR <?php echo $produk['price'];?></font><br>
								<?php echo $produk['description'];?>
							</td>
							<td id="data">
								<?php echo $produk['nLike'];?> likes <br>
								<?php echo $produk['nSales'];?> purchase<br><br>
								<a id="likeButton" href="">LIKE</a>
								<a id="buyButton" href="<?php RoutingBuy($produk['id']);?>">BUY</a>
							</td>
						</tr>
					</table>
					<hr>
				</div>
	<?php 	}
		


		}?>
		
	</div>
</body>
</html>