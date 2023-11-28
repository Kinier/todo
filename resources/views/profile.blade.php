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
		<div class="bg-gray-900 text-white">
			<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
				<h1 class="text-3xl font-bold mb-4">Profile</h1>
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
					<div class="bg-gray-800 rounded-lg p-4">
						<h2 class="text-lg font-bold mb-2">Personal Information</h2>
						<p class="text-gray-400">Name: {{ $user['name'] }}</p>
						<p class="text-gray-400">Email: {{ $user['email'] }}</p>
						
					</div>
					<div class="bg-gray-800 rounded-lg p-4">
						<h2 class="text-lg font-bold mb-2">Todo List ( {{ count($todos) }} todo )</h2>
						<ul class="list-disc ml-4">
							@foreach($todos as $todo)
							<li class="text-gray-400">{{$todo->title}}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</body>
</body>

</html>