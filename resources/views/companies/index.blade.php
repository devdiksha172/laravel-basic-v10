<x-app-layout>
@push('styles')
    
@endpush
<div class="container mx-auto mt-5">
    
    <a href="{{ route('companies.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Company</a>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mt-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="table-auto w-full mt-4 border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Logo</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Website</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <td class="border p-2">{{ $company->id }}</td>
                <td class="border p-2"> <img src="{{ asset('storage/' . $company->logo) }}" alt="Current Logo" class="h-20"></td>
                <td class="border p-2">{{ $company->name }}</td>
                <td class="border p-2">{{ $company->email }}</td>
                <td class="border p-2"><a href="{{ $company->website }}" target="_blank" rel="noopener noreferrer"> {{ $company->website }}</a></td>
                <td class="border p-2">
                    <a href="{{ route('companies.edit', $company->id) }}" class="text-blue-500">Edit</a>
                    <button type="button" class="delete-btn text-red-500 ml-2" data-id="{{ $company->id }}" data-route={{ route('companies.destroy', $company->id) }}>
                        Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $companies->links() }}
    </div>
</div>

</x-app-layout>

    




