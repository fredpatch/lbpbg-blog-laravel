@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor)
    {
        'gray' => 'text-gray-700',
        'blue' => 'text-blue-700',
        'red' => 'text-red-700',
        'yellow' => 'text-yellow-700',
        'pink' => 'text-pink-700',
        'indigo' => 'text-indigo-700',
        'purple' => 'text-purple-700',
        'green' => 'text-green-700',
        'lime' => 'text-lime-700',
        default => 'text-gray-700',
    };

    $bgColor = match($bgColor)
    {
        'gray' => 'bg-gray-100',
        'blue' => 'bg-blue-100',
        'red' => 'bg-red-100',
        'yellow' => 'bg-yellow-100',
        'pink' => 'bg-pink-100',
        'indigo' => 'bg-indigo-100',
        'purple' => 'bg-purple-100',
        'green' => 'bg-green-100',
        'lime' => 'bg-lime-100',
        default => 'bg-gray-100',
    };
    
@endphp
<button {{$attributes}} class=" {{$textColor}} {{$bgColor}} px-3 py-1 text-base rounded-xl">
    {{ $slot }}
</button>
