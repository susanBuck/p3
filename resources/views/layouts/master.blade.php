<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title', 'School')
	</title>

	<meta charset='utf-8'>
	@stack('head')
</head>
<body>
	<div id="wrapper">
		<header>
			<h1>Language School <img src="/img/phone.jpg" id="imgId" title="Contact Us" alt="Contact Us" /></h1>
		</header>

		<section>
			@yield('content')
		</section>

		<footer>
			Copyright &copy; {{ date('Y') }} All Rights Reserved.
		</footer>

	</div>
</body>
</html>
