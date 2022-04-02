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
                                    <th class="border p-4 text-center">ID</th>
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
                                    <td class="border p-4 text-center">{{ $user->id }}</td>
                                    <td class="border p-4">{{ $user->name }}</td>
                                    <td class="border p-4">{{ $user->email }}</td>
                                    <td class="border p-4">{{ $user->created_at }}</td>
                                    <td class="border p-4">{{ $user->updated_at }}</td>
                                    <td class="border p-4">
                                        <div class="flex justify-center">
                                            <div>
                                                <a href="{{ url("/users/$user->id") }}">
                                                <x-users.button :ml="__('ml-0')" :color="__('gray')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </x-users.button>
                                                </a>
                                            </div>
                                            <div>
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-users.button :ml="__('ml-2')" :color="__('gray')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </x-users.button>
                                                </form>
                                            </div>
                                        </div>
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
