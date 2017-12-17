<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand {{ Request::is('/') ? 'active' : '' }}" href="/">Workout Planner</a>
    <button class="navbar-toggler d-lg-none" type="button" 
        data-toggle="collapse" data-target="#navbarsExampleDefault" 
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('plans') ? 'active' : '' }}" href="{{ url('/plans') }}">Plans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('plan_days') ? 'active' : ''}}" href="{{ url('/plan_days') }}">Plan days</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('assigned_plans') ? 'active' : ''}}" href="{{ url('/assigned_plans') }}">Assigned plans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('exercises') ? 'active' : ''}}" href="{{ url('/exercises') }}">Exercises</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('exercise_instances') ? 'active' : ''}}" href="{{ url('/exercise_instances') }}">Exercise instances</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('users') ? 'active' : ''}}" href="{{ url('/users') }}">Users</a>
            </li>
        </ul>
        
    </div>
    @yield('nav')
</nav>