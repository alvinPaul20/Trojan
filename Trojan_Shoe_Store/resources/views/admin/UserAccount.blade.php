@extends('admin.layouts.app')

@section('content')
<div class="container ms-5 d-flex justify-content-center align-items center">
    <div class="row ms-5">
        <!-- Card for displaying the Users table -->
        <div class="col-md-12 ms-5">
            <div class="card   ms-5">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">All User Accounts</div>
                    <!-- Add Account Button -->
                    <a href="{{ route('admin.sub-pages.addAccount') }}" class="btn btn-outline-success btn-md">Add Account</a>
                </div>
                <div class="card-body">
                    <div class="card-sub">
                        This is the table displaying all user accounts:
                    </div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $index => $user)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ucfirst($user->role ?? 'N/A') }}</td>
                                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <!-- Edit Button for Each User -->
                                        <a href="{{ route('admin.sub-pages.edit_account', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
