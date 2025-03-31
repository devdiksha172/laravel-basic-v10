<x-app-layout>
    <div class="container mx-auto mt-5">
        
        <a href="{{ route('employees.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create Employee</a>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mt-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr> 
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->company->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                            <button type="button" class="delete-btn text-red-500 ml-2" data-id="{{ $employee->id }}" data-route={{ route('employees.destroy', $employee->id) }}>
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $employees->links() }}
        </div>
    </div>
</x-app-layout>
    
        
    
    
    
    
    