<div class="mt-4 flex justify-center">
    <div class="block p-6 rounded-lg shadow-lg bg-white w-3/4">
        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Todo Items</h5>
        <div class="text-gray-700 text-base mb-4 space-y-4">
            @foreach ($todos as $todo)
                <div class="shadow rounded px-4 py-2 bg-gray-50">
                    <div class="text-lg font-bold flex items-center justify-between">
                        <div>{{ $todo->title }}</div>
                        <div class="flex items-center">
                            <a href="{{ route('todo.edit', $todo->id) }}" class="inline-block px-2 py-1 bg-blue-600 text-white  text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>

                            <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" class="flex ml-2">
                                @csrf
                                @method('DELETE')

                                <button href="{{ route('todo.destroy', $todo->id) }}" class="inline-block px-2 py-1 bg-red-600 text-white  text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                            </form>
                            
                        </div>
                    </div>
                    <div class="text-gray-600 mt-2">{{ $todo->body }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
