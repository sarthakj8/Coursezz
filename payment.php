<!DOCTYPE html>
<html>
<head>
	<title>Payment Gateway | My Online Courses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>COURSEZZ</h1>
		<nav>
			<ul>
				<li><a href="TIE.php">Home</a></li>
				<li><a href="course.php">Courses</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section><center>
			<h1>Payment Gateway</h1>
			<form id="payment-form">
				<p><label for="name">Name on Card</label>
				<input type="text" id="name" name="name" required></p>

				<p><label for="card">Card Number</label>
				<input type="text" id="card" name="card" required></p>

				<p><label for="exp">Expiration Date</label>
				<input type="month" id="exp" name="exp" required></p>

				<p><label for="cvv">CVV</label>
				<input type="text" id="cvv" name="cvv" required></p>

				<button type="submit" id="pay-button">Pay Now</button>
			</form>
			<div id="payment-response"></div>
		</center></section>
	</main>

	<footer>
		<p>&copy; 2023 My Online Courses. All rights reserved.</p>
	</footer>

	<script>
		// Simulate payment gateway response
		function makePayment() {
			return new Promise((resolve, reject) => {
				setTimeout(() => {
					const success = Math.random(0,1);
					if (success) {
						resolve('Payment successful');
					} else {
						reject('Payment failed');
					}
				}, 2000);
			});
		}

		// Handle form submission
		document.getElementById('payment-form').addEventListener('submit', async (event) => {
			event.preventDefault();

			const name = document.getElementById('name').value;
			const card = document.getElementById('card').value;
			const exp = document.getElementById('exp').value;
			const cvv = document.getElementById('cvv').value;

			// Show loading indicator
			document.getElementById('pay-button').textContent = 'Processing...';
			document.getElementById('pay-button').disabled = true;

			try {
				// Simulate payment gateway call
				const response = await makePayment();

				// Show payment response
				document.getElementById('payment-response').textContent = response;
			} catch (error) {
				// Show payment error
				document.getElementById('payment-response').textContent = error;
			} finally {
				// Reset form
				document.getElementById('payment-form').reset();

				// Hide loading indicator
				document.getElementById('pay-button').textContent = 'Pay Now';
				document.getElementById('pay-button').disabled = false;
			}
		});
	</script>
</body>
</html>
