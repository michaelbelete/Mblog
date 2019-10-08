<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/"><h3 class="mt-1">{{config('app.name', 'Mblog')}}</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item active">
                <a href="/about" class="nav-link">About</a>
                </li>
                <li class="nav-item active">
                <a href="/services" class="nav-link">Services</a>
                </li>
                <li class="nav-item active">
                <a href="/posts" class="nav-link">Blog</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a href="/posts/create" class="nav-link">Create Post</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
