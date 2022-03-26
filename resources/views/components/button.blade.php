@props(['color' => 'blue', 'small' => false])

@php
    $colorClasses = match($color) {
        'red' => 'bg-red-600 hover:bg-red-700 focus:bg-red-700 active:bg-red-800',
        'gray' => 'bg-gray-600 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-800',
        'blue' => 'bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800',
        default => 'bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800',
    }
@endphp

<button class="inline-block {{ $small ? 'px-2 py-1' : 'px-6 py-2.5' }} {{ $colorClasses }} text-white  text-xs leading-tight uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition duration-150 ease-in-out">
    {{ $slot }}
</button>