@extends('layouts.app')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12 text-left">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td><strong>Request</strong></td>
                    <td><strong>Response</strong></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="w-75">
                        <p>List of user with all details</p>
                        <div><span class="alert alert-success p-2">GET</span> {{ url('/api/users?count=2') }}</div>
                        <p class="text-muted mt-3">Default Count is {{ DEFAULT_API_USER_COUNT }}</p>
                    </td>
                    <td>
                        <code>
                            <pre>
                                {{ file_get_contents(storage_path('users.json')) }}
                            </pre>
                        </code>
                    </td>
                </tr>
                <tr>
                    <td class="w-75">
                        <p>Individual User's Details</p>
                        <div><span class="alert alert-success p-2">GET</span> {{ url('/api/user/{username}') }}</div>
                    </td>
                    <td>
                        <code>
                            <pre>
                                {{ file_get_contents(storage_path('user.json')) }}
                            </pre>
                        </code>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
