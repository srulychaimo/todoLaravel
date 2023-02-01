@props(['todo' => '', 'method' => 'post', 'action', 'button'])

<form action="{{ $action }}" method="POST" class="mt-10 w-full bg-gray-100 p-5 rounded-lg">
    @csrf
    @method($method)

    <div class="flex flex-col w-9/12 mx-auto space-y-4">
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title
            </label>
            <input type="text" id="title" name="title"
                class="block border border-gray-300 focus:outline-none focus:ring-4 p-2.5 rounded-lg text-gray-900 text-sm w-full"
                placeholder="Todo Title" value="{{ $todo->title ?? old('title') }}">

            @error('title')
            <p class="text-sm font-semibold text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                Task</label>
            <textarea id="body" rows="3" name="body"
                class="block border border-gray-300 focus:outline-none focus:ring-4 p-2.5 rounded-lg text-gray-900 text-sm w-full"
                placeholder="Write your todo task here...">{{ $todo->body ?? old('body') }}</textarea>

            @error('body')
            <p class="text-sm font-semibold text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 ml-auto ">{{
            $button }}</button>

    </div>

</form>
