<!doctype html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Alumni+Sans:ital,wght@0,100;0,300;0,400;1,100&family=Cormorant:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Oswald:wght@400;600;700&family=Raleway:wght@400;600&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="/img/refr-favicon-32x32.png">
		<link rel="stylesheet" href="/css/style.css">
		<script src="https://kit.fontawesome.com/db4f42a312.js" crossorigin="anonymous"></script>
		
		<style>
			#preloader {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				display: flex;
				align-items: center;
				justify-content: center;
				background: #0c1821;
				z-index: 999;
			}

			#preloader.hide-preloader {
				animation: hidePreloader 1s;
			}

			#preloader.preloader-hidden {
				display: none;
			}

			@keyframes hidePreloader {
				0% {
					opacity: 1;
				}
				100% {
					opacity: 0;
				}
			}
		</style>

		<title>Maria Ts' 13-th refrigerator</title>

	</head>
	<body>
		

	<div id="preloader">
			<img src="/img/refrig2.png" alt="..." style="height: 50%">
		</div>

		<script>
			window.onload = function() {
				let preloader = document.getElementById('preloader');
				preloader.classList.add('hide-preloader');
				setInterval(function() {
					preloader.classList.add('preloader-hidden');
				}, 1500);
			}
		</script>

		<div class="container">
		<div class="row">
			
			<img src="/img/12refrigerators.png" alt="" style="height: 60px;" class="mx-auto my-3">
			
		</div>
		<nav class="nav nav-pills flex-column flex-sm-row">
		
		<a class="flex-sm-fill text-sm-center nav-link" href="/main">Главная</a>

			<a class="flex-sm-fill text-sm-center nav-link dropdown-toggle" href="/portfolio" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Портфолио
			</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="/portfolio-places">Места</a>
			<a class="dropdown-item" href="/portfolio-things">Объекты</a>
			<a class="dropdown-item" href="/portfolio-people">Люди</a>
		</div>

		<a class="flex-sm-fill text-sm-center nav-link" href="/about-me">Обо мне</a>
		<a class="flex-sm-fill text-sm-center nav-link" href="/contacts">Контакты</a>
		</nav>
		</div>
		

		<?php echo $content; ?>

		<footer class="container-fluid text-center py-3 card-text">
			&copy; Maria Tsval - Все права защищены <script>document.write(new Date().getFullYear())</script>
		</footer>

		<!-- Вариант 1: пакет jQuery и Bootstrap (включает Popper) -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

		
	</body>
</html>
