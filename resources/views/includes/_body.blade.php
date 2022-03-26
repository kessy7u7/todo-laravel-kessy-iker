<div class="mb-3">
    <label
        for="body"
        class="form-label inline-block mb-2 text-gray-700"
    >Example textarea</label>
    <textarea
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
        id="body"
        rows="3"
        placeholder="Enter description"
        name="body"
        required
    >{{ old('body') ?? $model->body }}</textarea>

    @error('body')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>