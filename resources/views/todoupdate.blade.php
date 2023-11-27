<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 text-white flex justify-center w-full h-screen">
    <div class="bg-gray-900 text-white p-4 rounded-lg shadow-lg w-6/12 h-min shadow-slate-950 mt-10">
        <h2 class="text-2xl font-bold mb-4">Update todo</h2>
        <form action="{{ route('todo.update.id', ['id' => $todo->id] ); }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="title">
                    Title
                </label>
                <input value="{{ $todo->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="title" id="title" type="text" placeholder="Enter title">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="content">
                    Content
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="content" id="content" placeholder="Enter content">{{ $todo->content }}</textarea>
            </div>
            <div class="flex w-full justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-6/12" type="submit">
                    Update
                </button>
            </div>

        </form>
    </div>
</body>

</html>