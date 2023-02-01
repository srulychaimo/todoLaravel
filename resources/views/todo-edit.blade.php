<x-layout>

    <h2 class="text-center text-blue-600 text-2xl font-bold">Edit the todo</h2>

    <x-todo.form :todo="$todo" button='Update' action='/todos/{{ $todo->id }}/edit' method='patch' />

    <a href="/" class="mt-10 text-gray-700 underline hover:text-blue-700">
        <p>Go Back</p>
    </a>

</x-layout>
