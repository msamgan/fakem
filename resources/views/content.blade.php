@extends('layouts.app')

@section('content')
    <form>
        <div class="row">
            <div class="col-md-4">
                <label class="float-left" for="words"><strong>Words</strong></label>
                <input class="form-control"
                       placeholder="Words Count"
                       value="{{ request('words') }}"
                       name="words" type="text" id="words">
            </div>
            <div class="col-md-4">
                <label class="float-left" for="para"><strong>Para</strong></label>
                <input class="form-control"
                       placeholder="Para Count"
                       value="{{ request('para') }}"
                       name="para" type="text" id="para">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" style="float: left; margin-top: 32px;" type="submit">
                    Generate
                </button>
            </div>
        </div>
    </form>
    <div class="row mt-4">
        <div class="col-md-12 text-left">
            @foreach($paras as $para)
                <p class="lead text-left" >{{ $para }}</p>
            @endforeach
        </div>
    </div>
@endsection
