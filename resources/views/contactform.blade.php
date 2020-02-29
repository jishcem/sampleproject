@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact</div>

                <div class="card-body">
                    
                    <form method="post" action="/contact">
                        @csrf
                        <div class="form-group">
                            <label for="my-input">Username</label>
                            <input id="my-input" class="form-control" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Age</label>
                            <input id="my-input" class="form-control" type="text" name="age">
                        </div>
                        <button type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection