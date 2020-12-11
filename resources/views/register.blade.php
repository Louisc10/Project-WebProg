@extends('layouts.main')

@section('title')
    Register Page
@endsection

@section('content')
    <div class="containter m-4">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" name="inputUsername" id="inputUsername" value="{{old('inputUsername')}}" aria-describedby="usenameHelp" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="text" class="form-control" name="inputEmail" id="inputEmail" value="{{old('inputEmail')}}" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" value="{{old('inputPassword')}}" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="inputConfirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" name="inputConfirmPassword" id="inputConfirmPassword" value="{{old('inputConfirmPassword')}}" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @if (count($errors) > 0)
                    <div class="alert alert-danger m-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection