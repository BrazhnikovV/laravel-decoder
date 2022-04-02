<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <div class="container">
                        <!-- Validation Errors -->
                        <x-users.validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('users.update', $user->id) }}">
                            @csrf
                            {{ method_field('PUT') }}
                            <!-- Id -->
                            <x-input id="id" type="hidden" name="id" value="{{old('id') ?? $user->id}}" required />
                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name') ?? $user->name}}" required autofocus />
                            </div>
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email') ?? $user->email}}" required />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Edit') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
