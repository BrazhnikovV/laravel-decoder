<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <div class="container">
                        <table class="table-auto border-x border-b w-full mb-4 text-left">
                            <thead class="bg-gray-200 text-left">
                                <tr>
                                    <th class="border p-4 text-left">ID</th>
                                    <th class="border p-4 text-left">Имя</th>
                                    <th class="border p-4 text-left">Email</th>
                                    <th class="border p-4 text-left">Создан</th>
                                    <th class="border p-4 text-left">Обновлен</th>
                                    <th class="border p-4 text-left"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="border p-4">{{ $user->id }}</td>
                                    <td class="border p-4">{{ $user->name }}</td>
                                    <td class="border p-4">{{ $user->email }}</td>
                                    <td class="border p-4">{{ $user->created_at }}</td>
                                    <td class="border p-4">{{ $user->updated_at }}</td>
                                    <td class="border p-4">
                                        <a href="{{ url("/users/$user->id") }}">
                                            <x-users.button class="ml-4" :color="__('gray')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </x-users.button>
                                        </a>
                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <x-users.button class="ml-4" :color="__('yellow')">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                                </svg>
                                            </x-users.button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
