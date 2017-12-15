<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Workout Planner</a>
    <button class="navbar-toggler d-lg-none" type="button" 
        data-toggle="collapse" data-target="#navbarsExampleDefault" 
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/plans') }}">Plans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/plan_days') }}">Plan days</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/assigned_plans') }}">Assigned plans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/exercises') }}">Exercises</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/exercise_instances') }}">Exercise instances</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/users') }}">Users</a>
            </li>
        </ul>
        
    </div>
    @yield('nav')
</nav>