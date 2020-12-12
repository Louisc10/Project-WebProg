<div class="navbar navbar-expand sticky-top navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand " href="/">Just Du It</a>
    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
        @if (Auth::check())
        <ul class="navbar-nav">
            <li class="nav-item m-1">
                <a href="/logout">
                    <button type="button" class="btn btn-primary">Logout</button>
                </a>
            </li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item m-1">
                <a href="/login">
                    <button type="button" class="btn btn-primary">Login</button>
                </a>
            </li>
            <li class="nav-item m-1">
                <a href="/register">
                    <button type="button" class="btn btn-primary">Register</button>
                </a>
            </li>
        </ul>
        @endif
    </div>
</div>