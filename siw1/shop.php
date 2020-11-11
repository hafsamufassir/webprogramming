<!DOCTYPE html>

<html>
<head>
	<title> Shop </title>
	<link rel="stylesheet" href="shop.css">

	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
</head>

<body>

	<?php include "./header.html" ?>

	<?php

		class Item {
			public $image;
			public $title;
			public $description;
			public $price;
			public $link;

			function __construct ($image, $title, $description, $price, $link){
				$this->image = $image;
				$this->title = $title;
				$this->description = $description;
				$this->price = $price;
				$this->link = $link;
			}

		}

		$item1 = new Item("product1.jpg", "Item 1", "Made from resin", "15$", "viewprod.php");
		$item2 = new Item("product2.jpg", "Item 2", "Made from blabla", "17$", "viewprod.php");
		$item3 = new Item("product9.jpg", "Item 3", "Made from", "25$", "viewprod.php");
		$item4 = new Item("product4.jpg", "Item 4", "Made from", "15$", "viewprod.php");
		$item5 = new Item("product10.jpg", "Item 5", "Made from", "55$", "viewprod.php");
		$item6 = new Item("product6.jpg", "Item 6", "Made from", "10$", "viewprod.php");
		$item7 = new Item("product7.jpg", "Item 7", "Made from", "14$", "viewprod.php");
		$item8 = new Item("product8.jpg", "Item 8", "Made from", "11$", "viewprod.php");
		$item9 = new Item("product1.jpg", "Item 9", "Made from resin", "15$", "viewprod.php");
		$item10 = new Item("product2.jpg", "Item 10", "Made from blabla", "17$", "viewprod.php");
		$item11 = new Item("product9.jpg", "Item 11", "Made from", "25$", "viewprod.php");
		$item12 = new Item("product4.jpg", "Item 12", "Made from", "15$", "viewprod.php");
		$item13 = new Item("product10.jpg", "Item 13", "Made from", "55$", "viewprod.php");
		$item14 = new Item("product6.jpg", "Item 14", "Made from", "10$", "viewprod.php");
		$item15 = new Item("product7.jpg", "Item 15", "Made from", "14$", "viewprod.php");
		$item16 = new Item("product8.jpg", "Item 16", "Made from", "11$", "viewprod.php");

		$items = array(
			$item1,
			$item2,
			$item3,
			$item4,
			$item5,
			$item6,
			$item7,
			$item8,
			$item9,
			$item10,
			$item11,
			$item12,
			$item13,
			$item14,
			$item15,
			$item16 
		)

	?>

	<center>

	<section class="content">
		<h1>Available items:</h1>

		<div class="available_items">
			<?php 
				foreach ($items as $item): ?> 
					<div class="item">
						<a href="<?php echo $item->link; ?>"> <img width='200'src="assets/<?php echo $item->image; ?>" > </a>
						<div style="font-size: 30px;"> <?php echo $item->title; ?> </div>
						<div style="font-size: 20px;"> <?php echo $item->description; ?> </div>
						<div style="font-size: 20px;"> <?php echo $item->price; ?> </div>
						<a style="color: #4272b8; font-size: 20px;" href="<?php echo $item->link; ?>">Click for full info</a>
					</div>
			<?php endforeach; ?>
		</div>

	</section>

	</center>

	<?php include "./footer.html" ?>


</body>
</html>
