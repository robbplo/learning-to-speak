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
                Todo list
            </div>
            <div class="">
                <form action="/" method="post">
                    @csrf
                    <div class="mb-6">
                        <div class="flex">
                            <input
                                class="shadow appearance-none border rounded-l w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="description" name="description" type="text" placeholder="Add a new task">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-3xl text-white font-bold py-2 px-4 rounded-r focus:outline-none focus:shadow-outline"
                                type="submit">
                                +
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div>
                @foreach($tasks as $task)
                    <div class="p-2 px-4 bg-gray-100 mb-2">
                        <div class="flex items-center w-full justify-between">
                            <div class="flex items-center">
                                <input class="w-6 h-6 mr-4" type="checkbox" @checked($task->is_completed)
                                onclick="window.location = '/{{$task->id}}/toggle'">
                                <div @class([
                              'text-lg',
                              'line-through' => $task->is_completed,
                            ])>{{ $task->description }}</div>
                            </div>
                            <div class="flex">
                                <a href="/{{$task->id}}/edit" class="text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <a href="/{{$task->id}}/delete" class="text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="/clear-completed"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-2 inline-block rounded focus:outline-none focus:shadow-outline">
                    Clear completed
                </a>
            </div>
        </div>
    </div>

</body>

</html>
