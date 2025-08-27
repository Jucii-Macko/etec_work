@extends('Backend.master')

@section('title_page','All Students')
@section('title_side','All Students')

@section('content')
<div >
    <h2 class="text-2xl font-bold mb-4">All Students</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Image</th>
                    <th class="px-4 py-2 border">First Name</th>
                    <th class="px-4 py-2 border">Last Name</th>
                    <th class="px-4 py-2 border">Age</th>
                    <th class="px-4 py-2 border">Gender</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Phone</th>
                    <th class="px-4 py-2 border">Major</th>
                    <th class="px-4 py-2 border">University</th>
                    <th class="px-4 py-2 border">Address</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody class="text-xs text-gray-800">
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border text-center">094</td>
                    <td class="px-4 py-2 border text-center">
                        <img src="https://i.pinimg.com/736x/d6/ec/ed/d6eced724ac16082b51e63afbb992196.jpg" alt="Student" class="w-12 h-12 rounded-full mx-auto">
                    </td>
                    <td class="px-4 py-2 border">La</td>
                    <td class="px-4 py-2 border">Chan</td>
                    <td class="px-4 py-2 border text-center">21</td>
                    <td class="px-4 py-2 border text-center">Male</td>
                    <td class="px-4 py-2 border">la.chan@example.com</td>
                    <td class="px-4 py-2 border">0123456789</td>
                    <td class="px-4 py-2 border">Computer Science</td>
                    <td class="px-4 py-2 border">RUFA</td>
                    <td class="px-4 py-2 border">Phnom Penh</td>
                    <td class="px-4 py-2 border text-center">
                        <button class="bg-blue-500 text-white px-5 mb-1 py-1 rounded text-xs hover:bg-blue-600">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded text-xs hover:bg-red-600">Delete</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border text-center">095</td>
                    <td class="px-4 py-2 border text-center">
                        <img src="https://i.pinimg.com/736x/33/8b/63/338b63f094fac849dcb5f17611433ecb.jpg" alt="Student" class="w-12 h-12 rounded-full mx-auto">
                    </td>
                    <td class="px-4 py-2 border">Sok</td>
                    <td class="px-4 py-2 border">Mean</td>
                    <td class="px-4 py-2 border text-center">22</td>
                    <td class="px-4 py-2 border text-center">Female</td>
                    <td class="px-4 py-2 border">sok.mean@example.com</td>
                    <td class="px-4 py-2 border">0987654321</td>
                    <td class="px-4 py-2 border">Information Technology</td>
                    <td class="px-4 py-2 border">RULE</td>
                    <td class="px-4 py-2 border">Kandal</td>
                    <td class="px-4 py-2 border text-center">
                        <button class="bg-blue-500 text-white px-5 py-1  mb-1 rounded text-xs hover:bg-blue-600">Edit</button>
                        <button class="bg-red-500 text-white px-3 py-1 rounded text-xs hover:bg-red-600">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
