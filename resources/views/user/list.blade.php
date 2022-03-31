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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="border p-4">{{ $user->id }}</td>
                                    <td class="border p-4">{{ $user->name }}</td>
                                    <td class="border p-4"><a href="{{ route('user', ['id' => $user->id]) }}">{{ $user->email }}</a></td>
                                    <td class="border p-4">{{ $user->created_at }}</td>
                                    <td class="border p-4">{{ $user->updated_at }}</td>
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
