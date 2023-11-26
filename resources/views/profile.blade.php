<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@vite('resources/css/app.css')
	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
	<!-- <script src="https://cdn.tailwindcss.com"></script> -->
	<!-- Styles -->

</head>

<body class="bg-black text-white">
	<header class="bg-gray-800 py-4 mb-2">
		<div class="container mx-auto flex justify-between items-center px-2">
			<h1 class="text-2xl font-bold">TODO service</h1>
			@guest
			<div class="flex">
				<a href="{{ route('login') }}" class="bg-gray-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded mr-2">Login</a>
				<a href="{{ route('register') }}" class="bg-gray-700 hover:bg-red-400 text-white font-bold py-2 px-4 rounded">Register</a>
			</div>
			@else
			<div class="flex">
				<a href="{{ route('auth.logout') }}" class="bg-gray-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded mr-2">Logout</a>
			</div>
			@endguest
		</div>
	</header>
	<div class="container py-8 p-2 flex items-center justify-center min-w-full">
		profile
	</div>
</body>
</body>
</body>

</html>