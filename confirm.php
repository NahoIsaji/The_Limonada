<?php
//price
	$c_Rprice = 6;
	$c_Lprice = 6.5;
	$o_Rprice = 6.5;
	$o_Lprice = 7;
	$b_Rprice = 7.5;
	$b_Lprice = 8;
	$p_Rprice = 7;
	$p_Lprice = 7.5;
	$c_total = 0;
	$o_total = 0; 
	$b_total = 0; 
	$p_total = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/confirm_style.css">
        <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
        <script src="js/index_script.js"></script>
        <title>Online order</title>
    </head>
    <body>
		<div class="header">
			<a href="index.html"><img src="pic/logo.png" alt="logo" id="logo"></a>
			<button type="button" class="fas fa-bars" id="bars" onclick="displayNav()"></button>
			<button type="button" class="fas fa-times" id="times" onclick="hideNav()"></button>
		</div>
		<nav id="nav">
			<ul>
				<li class="navMenu"><a href="index.html">Home</a></li>
				<li class="navMenu"><a href="index.html#menu">Menu</a></li>
				<li class="navMenu"><a href="order.html" >Order</a></li>
				<li class="navMenu"><a href="index.html#location">Location</a></li>
				<li class="navMenu"><a href="index.html#contact">Contact</a></li>
			</ul>
		</nav>
		<h1>Confirm your order</h1>
		<table>	
			<tr>
				<th>Drink</th>
				<th>Size</th>
				<th></th>
				<th>QTY</th>
				<th>Subtotal</th>
			</tr>
<?php	
//classic lemonade		
	$c_quantity = $_POST['c_quantity'];
	if($c_quantity != 0){
		if($_POST['c_size'] == "r"){
			$c_size = "Regular";
			$c_total = $c_Rprice * $c_quantity;
		}else if($_POST['c_size'] == "l"){
			$c_size = "Large";
			$c_total = $c_Lprice * $c_quantity;
		}
		echo '<tr><td>Classic Lemonade</td>';
		echo '<td>'.$c_size.'</td>';
		echo '<td><i class="fas fa-times" id="fa-times"></i></td>';
		echo '<td>'.$c_quantity.'</td>';
		echo '<td><i class="fas fa-dollar-sign"></i>'.$c_total.'</td></tr>';
	}
//orange lemonade
	$o_quantity = $_POST['o_quantity'];
	if($o_quantity != 0){
		if($_POST['o_size'] == "r"){
			$o_size = "Regular";
			$o_total = $o_Rprice * $o_quantity;
		}else if($_POST['o_size'] == "l"){
			$o_size = "Large";
			$o_total = $o_Lprice * $o_quantity;
		}
		echo '<tr><td>Orange Lemonade</td>';
		echo '<td>'.$o_size.'</td>';
		echo '<td><i class="fas fa-times"></i></td>';
		echo '<td>'.$o_quantity.'</td>';
		echo '<td><i class="fas fa-dollar-sign"></i>'.$o_total.'</td></tr>';
	}
//Blackberry lemonades
	$b_quantity = $_POST['b_quantity'];
	if($b_quantity != 0){
		if($_POST['b_size'] == "r"){
			$b_size = "Regular";
			$b_total = $b_Rprice * $b_quantity;
		}else if($_POST['b_size'] == "l"){
			$b_size = "Large";
			$b_total = $b_Lprice * $b_quantity;
		}
		echo '<tr><td>Blackberry Lemonade</td>';
		echo '<td>'.$b_size.'</td>';
		echo '<td><i class="fas fa-times"></i></td>';
		echo '<td>'.$b_quantity.'</td>';
		echo '<td><i class="fas fa-dollar-sign"></i>'.$b_total.'</td></tr>';
	}
//peach lemonade
	$p_quantity = $_POST['p_quantity'];
	if($p_quantity != 0){
		if($_POST['p_size'] == "r"){
			$p_size = "Regular";
			$p_total = $p_Rprice * $p_quantity;
		}else if($_POST['p_size'] == "l"){
			$p_size = "Large";
			$p_total = $p_Lprice * $p_quantity;
		}
		echo '<tr><td>Peach Lemonade</td>';
		echo '<td>'.$p_size.'</td>';
		echo '<td><i class="fas fa-times"></i></td>';
		echo '<td>'.$p_quantity.'</td>';
		echo '<td><i class="fas fa-dollar-sign"></i>'.$p_total.'</td></tr>';
	}
?>
			<tr>
				<td colspan="4" id="total">Total</td>
				<td><i class="fas fa-dollar-sign"></i><?php echo $c_total + $o_total + $b_total + $p_total ?></td>
			</tr>
		</table>
		<div class="btn_wrapper">
			<a href="orderSubmission.html" class="btn">Place your order</a>
			<a href="order.html">Back to menu</a>
		</div>
	</body>
</html>