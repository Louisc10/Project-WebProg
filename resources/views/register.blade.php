@extends('layouts.main')

@section('title')
    Register Page
@endsection

@section('content')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>

    <div class="containter m-4">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="email" class="form-control" name="inputUsername" id="inputUsername" aria-describedby="emailHelp" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="inputConfirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" name="inputConfirmPassword" id="inputConfirmPassword" placeholder="Confirm Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="checkRememberMe" id="checkRememberMe">
                        <label class="form-check-label" for="checkRememberMe">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection