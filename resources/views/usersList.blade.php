@extends ('layout')


@section ('content')

<div class="text-gray-900 h-auto bg-gray-300">
    <div class="ml-20 pt-4 flex">
        <h1 class="text-3xl">
            Users
        </h1>
    </div>
    <div class="mx-20 py-4 flex justify-center">
        <table class="w-full text-md bg-gray-500 shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b bg-gray-700 text-white">
                    <th class="text-left p-3 px-5">Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Age</th>
                    <th class="text-left p-3 px-5">Role</th>
                    <th></th>
                </tr>
                @foreach ($users as $user)
                <tr tabindex="0" class="border-b border-gray-400 hover:bg-gray-600 bg-gray-500 transition duration-300 ease-in-out ">
                    <form action="/usersList/update/{{ $user->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <td class="p-3 px-5"><input type="text" name="name" value="{{ $user->name }}" class="inputBox bg-transparent w-full"></td>
                        <td class="p-3 px-5"><input type="email" name="email" value="{{ $user->email }}" class="inputBox bg-transparent w-full"></td>
                        <td class="p-3 px-5"><input type="number" name="age" value="{{ $user->age }}" class="inputBox bg-transparent"></td>
                        <td class="p-3 px-5"><input disabled type="text" name="role" value="{{ $user->role }}" class="inputBox bg-transparent"></td>
                        <td class="p-3 px-5 flex justify-end">
                            <button type="submit" class="mr-3 text-sm bg-blue-600 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                    </form>
                    <form action="/usersList/delete/{{ $user->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="text-sm bg-red-700 hover:bg-red-800 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mx-20 flex">
        <a href="/addUser">Add new user</a>
    </div>
</div>


@stop