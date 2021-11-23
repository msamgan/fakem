@extends('layouts.app')
@section('content')
    <div class="">
        <div class="row user-info-card">
            <div class="col-12">
                <div class="mb-2 mr-2">
                    <form class="d-flex align-items-center">
                        <div class="form-group mr-20 ">
                            <label for="gender"><strong>Gender</strong></label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="any">Any</option>
                                @foreach(genders() as $gender)
                                    <option @if(request('gender') === $gender) selected
                                            @endif value="{{ $gender }}">{{ $gender }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary mr-20" type="submit">Generate New</button>
                        <a target="_blank" href="https://www.dispostable.com/inbox/{{ $user->username }}/"
                           class="btn btn-success">Jump To Inbox</a>
                    </form>
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
