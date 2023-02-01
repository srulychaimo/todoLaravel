@props(['todos'])

<div class="mt-20 w-full">
    @if (count($todos))
    <ul class="text-sm font-medium text-gray-900 bg-white border border-gray-400 rounded-lg bg-gray-50">
        @foreach ($todos as $todo)
        <x-todo.item :todo="$todo" />
        @endforeach
    </ul>
    <div class="my-10">

        {{ $todos->links() }}

    </div>

    @else
    <p class="text-red-500 text-center font-semibold">No todos in list! Add a todo to see it in the list 😎</p>
    @endif

</div>
