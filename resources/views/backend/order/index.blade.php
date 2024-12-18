@extends('backend.backend_layout.master')
@section('content')
    <div class="container mx-auto mt-5 p-4">
        <h1 class="text-center text-2xl font-semibold mb-5">Category List</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm mt-4">
                <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-4 border-b">ID</th>
                    <th class="py-3 px-4 border-b">Name</th>
                    <th class="py-3 px-4 border-b">Email</th>
                    <th class="py-3 px-4 border-b">City</th>
                    <th class="py-3 px-4 border-b">Address</th>
                    <th class="py-3 px-4 border-b">Country</th>
                    <th class="py-3 px-4 border-b">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($adds as $add)
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">{{ $add->id }}</td>
                        <td class="py-3 px-4 border-b">{{ $add->name }}</td>
                        <td class="py-3 px-4 border-b">{{ $add->email }}</td>
                        <td class="py-3 px-4 border-b">{{ $add->city }}</td>
                        <td class="py-3 px-4 border-b">{{ $add->address }}</td>
                        <td class="py-3 px-4 border-b">{{ $add->country }}</td>
                        <td class="py-3 px-4 border-b space-x-2 flex justify-center md:justify-start">
                            <a href="{{ route('order.detail', $add->id) }}"
                               class="bg-indigo-500 hover:bg-indigo-600 text-white py-1 px-3 rounded text-sm">
                                View Order Items
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
