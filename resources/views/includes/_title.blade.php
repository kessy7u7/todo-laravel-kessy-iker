<div class="mb-3">
    <label
        for="title"
        class="form-label inline-block mb-2 text-gray-700"
    >Title</label>
    <input
        type="text"
        class="
          form-control
          block
          w-full
          px-3
          py-1.5
          text-base
          font-normal
          text-gray-700
          bg-white bg-clip-padding
          border border-solid border-gray-300
          rounded
          transition
          ease-in-out
          m-0
          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
        "
        id="title"
        placeholder="Enter title"
        name="title"
        value="{{ old('title') ?? $model->title }}"
        required
    />
    @error('title')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>