<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
                <a href="{{ url('home') }}" class="navbar-brand">App</a>
        </div>
       
        <div class="collapse navbar-collapse">
        @if (Auth::check())
            <ul class="nav navbar-nav">
                <li><a href="{{ url('home') }}">Timeline</a></li>
                <li><a href="{{ url('') }}">Friends</a></li>
            </ul>
           
            <form action="{{ route('') }}" role="search" class="navbar-form navbar-left">
                <div class="form-group">
                        <input type="text" name="query" class="form-control"
                        placeholder="Find people"/>
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        @endif
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="{{ url('auth/logout') }}">Sign out</a></li>
                @else
                    <li><a href="{{ url('auth/login') }}">Sign in</a></li>
                    <li><a href="{{ url('auth/register') }}">Sign up</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>