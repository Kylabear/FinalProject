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
                    <th class="border px-4 py-2">Action</th> {{-- Add this --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td class="border px-4 py-2">{{ $request->name }}</td>
                        <td class="border px-4 py-2">{{ $request->purpose }}</td>
                        <td class="border px-4 py-2">{{ $request->created_at->format('M d, Y') }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('clearance-requests.print', $request->id) }}" 
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded" 
                               target="_blank">
                                Print
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
