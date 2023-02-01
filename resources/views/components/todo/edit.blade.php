@props(['todo'])

<form action="/todos/{{ $todo->id }}/edit" method="post" class="mt-10 w-full">
    @csrf
    @method('patch')


    <div class="flex flex-row w-full items-center justify-center space-x-3">

        <textarea rows="1"
            class="shadow border rounded w-full py-2 px-3 text-gray-700  focus:outline-blue-500 focus:shadow-outline"
            id="todo" name="todo" placeholder="Todo">{{ $todo->todo }}</textarea>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 ">Edit</button>
    </div>

</form>
