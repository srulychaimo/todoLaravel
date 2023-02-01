@props(['name', 'link' => '#'])


@if ($name === 'trash')
<a href="{{ $link }}"><i class="fa-solid fa-trash text-red-500"></i></a>
@endif

@if ($name === 'edit')
<a href="{{ $link }}"><i class="fa-regular fa-pen-to-square text-blue-500"></i></a>
@endif
