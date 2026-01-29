
<x-layout>
    <x-slot:title>
        Edit Post
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Edit Post</h1>

        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/crafts/{{ $craft->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <textarea
                            name="title"
                            placeholder="What's the title of your game?"
                            class="textarea textarea-bordered w-full resize-none"
                            rows="4"
                            maxlength="255"
                            required
                        >{{old('title', $craft->title)}}</textarea>
                        @error('title')
                            <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                            @enderror
                        <textarea
                            name="description"
                            placeholder="Describe your game..."
                            class="textarea textarea-bordered w-full resize-none mt-2"
                            rows="4"
                            maxlength="1000"
                            required
                        >{{old('description', $craft->description)}}</textarea>
                        @error('description')
                            <div class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                            @enderror
                    </div>

                    <div class="card-actions justify-between mt-4">
                        <a href="/" class="btn btn-ghost btn-sm">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Update Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>