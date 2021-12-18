<!DOCTYPE HTML>

<html>
	<head>
		<title>Skila</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="assets/js/ie/html5shiv.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
		<div id="page-wrapper">

    <div id="header-wrapper">
        <header id="header" class="container">
            <div class="row">
                <div class="12u">


                    <?php include 'header.php'; ?>

                </div>
            </div>
				</div>

				<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="12u">

										<section>
											<header>
												<h2>Регистрация</h2>
											</header>
											<form action="auth.php" method='post'>
											<input type="text" class="format-control" name="login" id="login" placeholder="Введите  логин"><br>
											<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
											<button class="btn btn-success" type="submit">Да</button>
										</section>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="8u 12u(mobile)">
                                    <?php include 'footer.php'; ?>


		</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
<script src="assets/js/ie/respond.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>