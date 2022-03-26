<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Todo Application</title>
    <link
        rel="stylesheet"
        href="{{ mix('css/app.css') }}"
    >
    <script
        src="{{ mix('js/app.js') }}"
        defer
    ></script>
</head>

<body class="bg-gray-100">
    <div>
        <div class="flex justify-center">
            <div class="w-3/4">
                <a href="/">Home</a>
            </div>
        </div>
        {{-- create todo --}}
        <div class="flex justify-center">
            <form
                class="block p-6 rounded-lg shadow-lg bg-white w-3/4"
                action="{{ $model->exists ? route('todo.update', $model->id) : route('todo.store') }}"
                method="POST"
            >
                @csrf

                @if($model->exists)
                    @method('PUT')
                @endif

                @if(session('successMessage'))
                    <div class="flex justify-center mb-8">
                        <div class="min-w-[100px] bg-green-500 text-white rounded px-4 py-2 shadow">
                            {{ session('successMessage') }}
                        </div>
                    </div>
                @endif

                <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">To-Do Application</h5>
                <div class="text-gray-700 text-base mb-4">
                    @include('includes._title')
                    @include('includes._body')
                </div>
                <button
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >
                    {{ $model->exists ? 'Update' : 'Create' }}
                </button>
            </form>
        </div>


        @include('includes._todo_list', [
            'todos' => $todos,
        ])
    </div>
</body>

</html>