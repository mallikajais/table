<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.center{
			margin-left: auto;
			margin-right: auto;
			font-size: 20px;
			border:2px solid black;
			margin-bottom: 25px;
		}
		tr,td,th{
			border:1px solid black;
			padding: 10px;
		}
		h2{
			font-size: 50px;
		}
	</style>
</head>
<?php
$products = array(
				"Electronics" => array(
									"Television" => array(
														array(
															"id" => "PR001", 
															"name" => "MAX-001",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR002", 
															"name" => "BIG-301",
															"brand" => "Bravia"
														),
														array(
															"id" => "PR003", 
															"name" => "APL-02",
															"brand" => "Apple"
														)
													),
									"Mobile" => array(
														array(
															"id" => "PR004", 
															"name" => "GT-1980",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR005", 
															"name" => "IG-5467",
															"brand" => "Motorola"
														),
														array(
															"id" => "PR006", 
															"name" => "IP-8930",
															"brand" => "Apple"
														)
													)
								),
				"Jewelry" => array(
									"Earrings" => array(
														array(
															"id" => "PR007", 
															"name" => "ER-001",
															"brand" => "Chopard"
														),
														array(
															"id" => "PR008", 
															"name" => "ER-002",
															"brand" => "Mikimoto"
														),
														array(
															"id" => "PR009", 
															"name" => "ER-003",
															"brand" => "Bvlgari"
														)
													),
									"Necklaces" => array(
														array(
															"id" => "PR010", 
															"name" => "NK-001",
															"brand" => "Piaget"
														),
														array(
															"id" => "PR011", 
															"name" => "NK-002",
															"brand" => "Graff"
														),
														array(
															"id" => "PR012", 
															"name" => "NK-003",
															"brand" => "Tiffany"
														)
													)				
							)
		);
?>

<body>
	<section>
		<h2 style="text-align: center;">Section-1 :- List all products</h2>
		<table class="center">
			<tr>
				<th>Category</th>
				<th>Subcategory</th>
				<th>ID</th>
				<th>Name</th>
				<th>Brand</th>
			</tr>
			<?php 
			foreach ($products as $key => $category) {
				foreach ($category as $key1 => $Subcategory) {
					foreach ($Subcategory as $key2 => $item) {
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
						foreach ($item as $key3 => $subitem) {
							echo "<td>".$subitem."</td>";
						}
						echo "</tr>";
					}
				}
			}
			?>
		</table>	
	</section>
	<section>
		<h2 style="text-align: center;">Section-2 :- List all products in Mobile subcategory</h2>
		<table class="center"><tr>
				<th>Category</th>
				<th>Subcategory</th>
				<th>ID</th>
				<th>Name</th>
				<th>Brand</th>
		</tr>
			<?php 
			foreach ($products as $key => $category) {
				foreach ($category as $key1 => $Subcategory) {
					foreach ($Subcategory as $key2 => $item) {
						if ($key=="Electronics" &&  $key1=="Mobile" ){
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
						foreach ($item as $key3 => $subitem) {
							echo "<td>".$subitem."</td>";
						}
						echo "</tr>";
					}}
				}
			}
			?>
		</table>
	</section>
	<section>
		<h2 style="text-align: center;">Section-3 :- List all products with their id, name, subcategory and category with brand name = "Samsung" </h2>
		<table class="center"><tr>
				<th>Category</th>
				<th>Subcategory</th>
				<th>ID</th>
				<th>Name</th>
				<th>Brand</th>
		</tr>
			<?php 
			foreach ($products as $key => $category) {
				foreach ($category as $key1 => $Subcategory) {
					foreach ($Subcategory as $key2 => $item) {
						if ($key=="Electronics" &&  $key2=="Samsung" ){
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
						foreach ($item as $key3 => $subitem) {
							echo "<td>".$subitem."</td>";
						}
						echo "</tr>";
					}}
				}
			}
			?>
		</table>
	</section>
	<section>
		<h2 style="text-align: center;">Section-4  :-  Delete & Show product with id = PR003.</h2>
		<table class="center">
			<tr>
				<th>Category</th>
				<th>Subcategory</th>
				<th>ID</th>
				<th>Name</th>
				<th>Brand</th>
			</tr>
			<?php
			unset($products['Electronics']['Television'][2]);
			foreach ($products as $key => $category) {
				foreach ($category as $key1 => $Subcategory) {
					foreach ($Subcategory as $key2 => $item) {
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
						foreach ($item as $key3 => $subitem) {
							echo "<td>".$subitem."</td>";
						}
						echo "</tr>";
					}
				}
			}
			?>
		</table>
	</section>
	<section>
		<h2 style="text-align: center;">Section-5  :-  Update product name = "BIG-555" with id = PR002. </h2>
		<table class="center">
			<tr>
				<th>Category</th>
				<th>Subcategory</th>
				<th>ID</th>
				<th>Name</th>
				<th>Brand</th>
			</tr>
			<?php
			$products['Electronics']['Television'][1]['name']='BIG-555'; 
			foreach ($products as $key => $category) {
				foreach ($category as $key1 => $Subcategory) {
					foreach ($Subcategory as $key2 => $item) {
						echo "<tr>";
						echo "<td>".$key."</td>";
						echo "<td>".$key1."</td>";
						foreach ($item as $key3 => $subitem) {
							echo "<td>".$subitem."</td>";
						}
						echo "</tr>";
					}
				}
			}
			?>
		</table>
	</section>
	
</body>
</html>