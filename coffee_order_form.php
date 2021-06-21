<!DOCTYPE html>
<html>
<head>
	<title>Ordering Coffee</title>
	<link rel="stylesheet" type="text/css" href="orderStyle.css">
</head>
<body>

	<img src="download.png" class="logo">

	<h3>HoHuTa coffee shop</h3>
	<h4>Online Order Form</h4>

	<form method="POST" action="order_set.php">
		
		<table align="center" cellpadding="5">
			<tr>
				<td>
					<!-- Name -->
					<p>
						<label>*Name: </label>
						<input type="text" name="name" id="name">
					</p>

					<!-- Email -->
					<p>
						<label>*Email: </label>
						<input type="email" name="email" id="email">
					</p>

					<!-- Address -->
					<p>
						<label>*Address: </label>
						<input type="text" name="address" id="address">
					</p>	
				</td>
				<td colspan="2">
					<!-- Telephone -->
					<p>
						<label>*Phone: </label>
						<input type="text" name="tel" id="tel">
					</p>

					<!-- City -->
					<p>
						<label>*City: </label>
						<input type="text" name="city" id="city">
					</p>

					<!-- District -->
					<p>
						<label>*District: </label>
						<input type="text" name="dis" id="dis">
					</p>
				</td>
			</tr>
			

			<!-- Delivery Time -->
			<tr>
				<td>
					<label>Preferred Delivery Time: </label>
				</td>
				<td colspan="2">
					<input type="time" name="delivery_time" id="delivery_time">
				</td>
			</tr>

			<!-- Delivery Instruction -->
			<tr>
				<td>
					<label>Delivery Instructions: </label>
				</td>
				<td colspan="2">
					<textarea rows="5" cols="30" name="instuctions" id="instuctions"></textarea>
				</td>
			</tr>

			<!-- Submit Button -->
			<tr>
				<td colspan="3" align="center">
					<button type="submit" name="submit" id="submit">Submit Order</button>
				</td>
			</tr>

			

		</table>
	</form>

</body>
</html>