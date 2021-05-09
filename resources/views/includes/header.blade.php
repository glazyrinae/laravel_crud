<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 {{ Route::current()->getName() === 'home' ? 'text-secondary' : 'text-white'}}">Home</a></li>
                <li><a href="/view" class="nav-link px-2 {{ Route::current()->getName() === 'view' ? 'text-secondary' : 'text-white'}}">To-do list</a></li>
                <li><a href="/addtask" class="nav-link px-2 {{ Route::current()->getName() === 'addtask' ? 'text-secondary' : 'text-white'}}">Add a task</a></li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2"
                onclick="location.href='/login'">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>
