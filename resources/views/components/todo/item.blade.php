@props(['todo'])

<div class="w-full px-4 py-4 border-b border-gray-400 rounded-lg flex items-center">
    <div class="mr-10">
        <div class="border-b border-gray-200 pb-1 text-base font-semibold">{{ $todo->title }}</div>
        <div class="pt-1 font-normal">{{ $todo->body }}</div>
    </div>

    <div class="ml-auto space-x-2 shrink-0 text-lg">

        <x-icons name='edit' link='/todos/{{ $todo->id }}/edit' />

        <form method="POST" action="/todos/{{ $todo->id }}" class="inline">
            @csrf
            @method('DELETE')

            <button type="submit">
                <x-icons name='trash' />
            </button>
        </form>

    </div>
</div>
