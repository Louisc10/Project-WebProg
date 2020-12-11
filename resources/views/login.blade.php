@extends('layouts.main')

@section('title')
    Login Page
@endsection

@section('content')
    <div class="containter m-4">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="text" class="form-control" name="inputEmail" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="checkRememberMe" id="checkRememberMe">
                        <label class="form-check-label" for="checkRememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                @if (count($errors) > 0)
                    <div class="alert alert-danger m-2">
                        <ul>
                            <li>{{$errors->first()}}</li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection