<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ">
            <li class="nav-item ml-3">
                <a class="navbar-brand" href="#">
                    <img src="/icon/todo_icon.png" alt="todolist" width="30px" height="45px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is(" /") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item {{ Request::is('/todos/create') ? 'active' : '' }}">
                <a class="nav-link" href="/todos/create">Create</a>
            </li>
        </ul>
    </div>
</nav>