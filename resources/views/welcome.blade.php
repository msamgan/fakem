@extends('layouts.master')
@section('content')
    <div class="container w-50">
        <div class="row user-info-card">
            <div class="col-12">
                <div class="mb-2 mr-2 float-right">
                    <button class="btn btn-primary" onclick="window.location.reload()">Generate New</button>
                    <a target="_blank" href="https://www.dispostable.com/inbox/{{ $user->username }}/"
                       class="btn btn-success">Jump To Inbox</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    </thead>
                    <tbody>
                    @foreach($user->attributesToArray() as $key => $value)
                        <tr>
                            <td><strong>{{ keyFormatter($key) }}</strong></td>
                            <td data-key="{{ keyFormatter($key) }}" title="click to copy"
                                class="cursor-pointer copy value-td">
                                {{ $value }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
