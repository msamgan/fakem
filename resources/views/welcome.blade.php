@extends('layouts.app')

@section('content')
    <form>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="float-left" for="email-search"><strong>Email</strong></label>
                <input class="form-control"
                       placeholder="Search User by email"
                       required
                       value="{{ request('email') }}"
                       name="email" type="text" id="email-search">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" style="float: left; margin-top: 32px;" type="submit">
                    Search
                </button>
            </div>
        </div>
    </form>
    <hr/>
    <form>
        <div class="row mb-3">
            <div class="col-md-3">
                <label class="float-left" for="gender"><strong>Gender</strong></label>
                <select id="gender" name="gender" class="form-control">
                    <option value="any">Any</option>
                    @foreach(genders() as $gender)
                        <option @if(request('gender') === $gender) selected
                                @endif value="{{ $gender }}">{{ $gender }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" style="float: left; margin-top: 32px;" type="submit">
                    Generate New
                </button>
            </div>
            @if($user)
                <div class="col-md-7">
                    <a target="_blank" href="https://www.dispostable.com/inbox/{{ $user->username }}/"
                       class="btn btn-danger" style="float: right; margin-top: 32px;">
                        Jump To Inbox
                    </a>
                </div>
            @endif
        </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            @if($user)
                <table class="table table-bordered">
                    <tbody>
                    @foreach($user->attributesToArray() as $key => $value)
                        <tr>
                            <td class="text-left w-25"><strong>{{ keyFormatter($key) }}</strong></td>
                            <td data-key="{{ keyFormatter($key) }}" title="click to copy"
                                class="cursor-pointer copy text-left">
                                {{ $value }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-left">User Not Found...</p>
            @endif
        </div>
    </div>
    <hr/>
    <div class="row mt-5">
        <div class="col-md-12 text-left">
            <h3>Last Few Users</h3>
            <table class="table mt-3">
                @foreach($histories as $history)
                    <tr>
                        <td data-key="{{ 'Name' }}" class="cursor-pointer copy">{{ $history->user->name }}</td>
                        <td data-key="{{ 'Email' }}" class="cursor-pointer copy">{{ $history->user->email }}</td>
                        <td>{{ $history->user->password }}</td>
                        <td>
                            <a target="_blank" href="https://www.dispostable.com/inbox/{{ $history->user->username }}/"
                               class="btn btn-danger btn-xs">
                                Jump To Inbox
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
