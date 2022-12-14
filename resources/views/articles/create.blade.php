<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('articles.store') }}" method="post">
                    @csrf
                    <input type="text" name="image" placeholder="Drop Image Here" class="w-full" autocomplete="off"> <br>  
                    
                    <input type="text"
                    name="title" 
                    placeholder="Title" 
                    class="w-full" 
                    autocomplete="off"
                    :value="@old('title')"> <br>
                    @error('title')
                    <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror

                    <input type="text" 
                    name="author" 
                    placeholder="Author" 
                    class="w-full" 
                    autocomplete="off"
                    :value="@old('author')"> <br>
                    @error('author')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror

                    <input type="text" 
                    name="category" 
                    placeholder="Category" 
                    class="w-full" 
                    autocomplete="off"
                    :value="@old('category')"> <br>
                    @error('category')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror

                    <x-textarea name="text" 
                    rows="10" 
                    placeholder="Start typing here..." 
                    class="w-full" 
                    autocomplete="off">
                    :value="@old('text')"</x-textarea> <br>
                    @error('text')
                        <div class="text-red-600 text-sm">{{ $message }}</div>
                    @enderror

                    <button type="submit">Save Article</button>
                </form>
         
        </div>
    </div>
</x-app-layout>

