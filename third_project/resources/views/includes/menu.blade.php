<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <button  class="navbar-toggler" data-toggle="cololapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="navbar-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="navbar-item"><a href="{{ route('fullName') }}" class="nav-link">Full Name</a></li>
                <li class="navbar-item"><a href="{{ route('calculator') }}" class="nav-link">Calculator</a></li>
            </ul>
        </div>
    </div>
</nav>
