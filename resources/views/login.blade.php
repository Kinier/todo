<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-gray-800 min-h-screen flex items-center">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg w-6/12">
            <div class="md:flex">
                <div class="w-full p-4 px-5 py-5">
                    <h1 class="text-3xl font-bold text-gray-800">Login</h1>
                    <form class="mt-6" method="POST" action="auth/login">
                        @csrf
                        @method('POST')
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="Password">
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-gray-500 hover:bg-red-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Sign In
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>