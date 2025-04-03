@extends('layouts.app') {{-- or use 'layout' if you're using a different one --}}

@section('content')
    <div class="container mx-auto mt-6">
        <h1 class="text-2xl font-bold mb-4">Clearance Requests</h1>

        <table class="table-auto w-full border border-collapse">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Purpose</th>
                    <th class="border px-4 py-2">Requested At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td class="border px-4 py-2">{{ $request->name }}</td>
                        <td class="border px-4 py-2">{{ $request->purpose }}</td>
                        <td class="border px-4 py-2">{{ $request->created_at->format('M d, Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
