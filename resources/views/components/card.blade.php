@props(['title'])

<div class="block p-6 rounded-lg shadow-lg bg-white">
    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">
        {{ $title }}
    </h5>

    <div class="text-gray-700 text-base mt-4">
        {{ $slot }}
    </div>
</div>