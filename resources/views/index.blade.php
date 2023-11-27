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
	<div class="py-8 items-center justify-center grid grid-cols-4 max-w-screen-lg mx-auto gap-4">
		@guest
		<p class="text-2xl mb-4 font-bold">To use service create account using Register or sign in using Login button</p>
		@else
		@foreach($todos as $todo)
		<div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden max-h-64 m-2">
			<div class="px-4 py-2 bg-gray-700 flex justify-between">
				<h2 class="text-lg font-bold text-white overflow-hidden">{{ $todo->title }}</h2>
				<form action="{{ route('todo.delete.id', ['id' => $todo->id] ); }}" method="post">
					@csrf
					@method('DELETE')
					<button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white font-bold px-4 rounded">Delete</button>
				</form>
			</div>
			<div class="px-4 py-2 max-h-32 overflow-auto">
				<p class="text-gray-400">
					{{ $todo->content }}
				</p>
			</div>
			<div class="px-4 py-2 bg-gray-700">
				<div class="flex justify-between items-center">
					<p class="text-white">{{ $todo->created_at }}</p>
					<a href="{{ route('todo.updatePage.id', ['id' => $todo->id] ); }}">
						<button class="bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Edit</button>
					</a>
				</div>
			</div>
		</div>
		@endforeach

		@endguest
	</div>

	<div class="fixed bottom-0 right-0">
		<a href="{{ route('todo.create') }}">
			<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold w-20 h-20 rounded-full m-2 text-4xl">
				+
			</button>
		</a>
	</div>
</body>


</html>