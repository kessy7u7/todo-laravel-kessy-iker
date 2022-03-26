<div class="mt-4 flex justify-center">
    <x-card title="Todo Items">
        <div class="space-y-4">
            @foreach ($todos as $todo)
                <x-todo :todo="$todo"></x-todo>
            @endforeach
        </div>
    </x-card>
</div>
