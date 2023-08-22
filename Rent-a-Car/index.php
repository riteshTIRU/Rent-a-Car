
<?php 
session_start();
if(!isset($_SESSION['email']))
	{
		echo '<script>alert("Please Login to proceed Further."); window.location.href="home.html";</script>';
		exit;
		//echo '<script>alert("Your message here!");</script>';
		// header("Location: http://localhost/prototype/home.html");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Rental Checkout</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body id="check-out">
	<form >
		<h1><span style="color:#f9d806";>Rental</span>wheels Checkout</h1>
		<label for="name">Name</label>
		<input type="text" id="name" name="name" placeholder="Enter your name" style="background-color: transparent;" required>

		<label for="email">Email</label>
		<input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $_SESSION['email'];?>" style="background-color: transparent;" required>

		<label for="phone">Phone number</label>
		<input type="tel" id="phone" name="phone" placeholder="Enter your phone number" value="<?php echo $_SESSION['contact'];?>" style="background-color: transparent;" required>

		<label for="address">Address</label>
		<input type="text" id="address" name="address" placeholder="Enter your address" style="background-color: transparent;" required>

		<label for="city">City</label>
		<input type="text" id="city" name="city" placeholder="Enter your city"  style="background-color: transparent;" required>

		<label for="state" >State</label>
		<select id="state" name="state" required style="background-color: transparent;">
			<option value="">Select your state</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			
		</select>

		<label for="zip">Zip code</label>
		<input type="text" id="zip" name="zip" placeholder="Enter your zip code"  style="background-color: transparent;" required>

		<label for="card-number">Credit card number</label>
		<input type="text" id="card-number" name="card-number" placeholder="Enter your credit card number" style="background-color: transparent;" required>

		<label for="expiration">Expiration date</label>
		<input type="text" id="expiration" name="expiration" placeholder="MM/YY"  style="background-color: transparent;" required>

		<label for="cvv">CVV</label>
		<input type="text" id="cvv" name="cvv" placeholder="Enter your CVV code" required>

		<label for="pickup-date">Pickup Date</label>
		<input type="date" id="pickup-date" name="pickup-date" required>

		<label for="return-date">Return Date</label>
		<input type="date" id="return-date" name="return-date" required>

		<button type="submit">Book Now</button>
	</form>
</body>
</html>
