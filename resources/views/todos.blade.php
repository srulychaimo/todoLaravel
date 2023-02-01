<x-layout>

    <h2 class="text-center text-blue-600 text-2xl font-bold">Add a todo</h2>

    <x-todo.form button='Add' action='/todos' />

    <x-todo.list :todos="$todos" />

</x-layout>
