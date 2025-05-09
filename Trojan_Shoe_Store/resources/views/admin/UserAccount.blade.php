@extends('admin.layouts.app')

@section('content')
<div class="container ms-5 d-flex justify-content-center align-items-center">
    <div class="row ms-5">
        <div class="col-md-12 ms-5">
            <div class="card ms-5">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">All User Accounts</div>
                    <button type="button" class="btn btn-outline-success btn-md" data-bs-toggle="modal" data-bs-target="#addAccountModal">
                        Add Account
                    </button>
                </div>
                <div class="card-body">
                    <div class="card-sub">This is the table displaying all user accounts:</div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created At</th>
                                <th>Actions</th>
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
                                    <!-- Trigger Edit Modal -->
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">Edit</button>

                                    <!-- Delete Form -->
                                    <form action="{{ url('/admin/UserAccount/' . $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border border-dark">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editUserModalLabel{{ $user->id }}">Edit Account</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ url('/admin/UserAccount/' . $user->id) }}">
                                                @csrf
                                                @method('PUT')

                                                <div class="input-group mb-3 w-100">
                                                    <input class="form-control border border-dark" name="name" type="text" placeholder="Full Name" value="{{ old('name', $user->name) }}" required>
                                                </div>

                                                <div class="input-group mb-3 w-100">
                                                    <input class="form-control border border-dark" name="email" type="email" placeholder="Email" value="{{ old('email', $user->email) }}" required>
                                                </div>

                                                <div class="input-group mb-3 w-100">
                                                    <select class="form-select border border-dark" name="role" required>
                                                        <option value="">Select Role</option>
                                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                        <option value="subadmin" {{ $user->role == 'subadmin' ? 'selected' : '' }}>Subadmin</option>
                                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                                    </select>
                                                </div>

                                                <div class="input-group mb-3 w-100">
                                                    <input class="form-control border border-dark" name="password" type="password" placeholder="New Password (optional)">
                                                </div>

                                                <div class="input-group mb-3 w-100">
                                                    <input class="form-control border border-dark" name="password_confirmation" type="password" placeholder="Confirm Password">
                                                </div>

                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-success w-100">Update Account</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Account Modal -->
<div class="modal fade" id="addAccountModal" tabindex="-1" aria-labelledby="addAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border border-dark">
            <div class="modal-header">
                <h5 class="modal-title">Add New Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('/admin/UserAccount') }}">
                    @csrf

                    <div class="input-group mb-3 w-100">
                        <input class="form-control border border-dark" name="name" type="text" placeholder="Full Name" value="{{ old('name') }}" required>
                    </div>

                    <div class="input-group mb-3 w-100">
                        <input class="form-control border border-dark" name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
                    </div>

                    <div class="input-group mb-3 w-100">
                        <input class="form-control border border-dark" name="password" type="password" placeholder="Password" required>
                    </div>

                    <div class="input-group mb-3 w-100">
                        <input class="form-control border border-dark" name="password_confirmation" type="password" placeholder="Confirm Password" required>
                    </div>

                    <div class="input-group mb-3 w-100">
                        <select class="form-select border border-dark" name="role" required>
                            <option value="">Select Role</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="subadmin" {{ old('role') == 'subadmin' ? 'selected' : '' }}>Subadmin</option>
                            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success w-100">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
