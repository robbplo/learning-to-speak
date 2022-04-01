<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bit Academy - Todo list</title>
    <style>

        body {
            {{-- bright gradient--}}
            background: linear-gradient(to right, #00d2ff, #d03ad5);
        }
    </style>
</head>
<body>
<div class="flex h-screen items-center">
    <div class="w-full max-w-3xl mx-auto">
        <div class="rounded shadow bg-white p-10">
            <div class="font-bold text-3xl mb-4">
                Edit task
            </div>
            <div class="">
                <form action="/{{$task->id}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-6">
                        <div class="flex">
                            <input class="shadow appearance-none border rounded-l w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="Add a new task" value="{{$task->description}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-3xl text-white font-bold py-2 px-4 rounded-r focus:outline-none focus:shadow-outline" type="submit">
                                ⏎
                            </button>
                        </div>
                    </div>
                    <a href="/">Back</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
