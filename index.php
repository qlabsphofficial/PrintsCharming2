<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<!-- Inline modern style for the hero section -->
<style>
  .hero-modern {
	height: 90vh;

    background: linear-gradient(to right, #4f46e5, #3b82f6);
    color: white;
    padding: 100px 15px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .hero-modern h1 {
    font-size: 52px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .hero-modern p {
    font-size: 18px;
    margin: 0 auto 30px;
    opacity: 0.95;
  }

  .hero-modern .btn-custom {
    font-size: 16px;
    padding: 12px 30px;
    border-radius: 30px;
    background-color: white;
    color: #3b82f6;
    border: none;
    transition: background-color 0.3s ease;
  }

  .hero-modern .btn-custom:hover {
    background-color: #e0e7ff;
    color: #1e3a8a;
  }
</style>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<?php include 'includes/navbar.php'; ?>

		<div class="container-fluid hero-modern">
			<h1>PrintsCharming</h1>
			<p>Bring your visions to life. High-quality prints with the charm of your brand—right at your fingertips.</p>
			<a href="login.php" class="btn btn-custom">GET STARTED</a>
		</div>
	
		<?php include 'includes/footer.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
</body>
</html>
