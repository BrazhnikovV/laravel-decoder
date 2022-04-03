<x-app-layout xmlns:livewire="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Converting') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <div class="container">
                        <h2 class="text-left mb-2">Загрузите файлы, которые хотите конвертировать</h2>
                        <livewire:converter.upload-files />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
