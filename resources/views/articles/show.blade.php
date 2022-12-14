<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

           <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <h2 class="font-bold text-4xl"> 
                {{ $articles->title }}
            </h2>

            <p class="mt-6">
                <strong>Author: {{ $articles->author }} <br></strong> 
                <strong>Category: {{ $articles->category_id }} <br></strong> 
            </p>

            <p class="mt-6 whitespace-pre-wrap">{{ $articles->body_text}}</p>
        </div>
    </div>
</x-app-layout>
