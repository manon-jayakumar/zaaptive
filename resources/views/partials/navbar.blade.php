<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom sticky-top">
    <div class="container-fluid">
        <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#mobileSidebar" aria-controls="mobileSidebar" aria-label="Open menu">
            <i class="bi bi-list"></i>
        </button>

        <a class="navbar-brand fw-semibold" href="#">
            <i class="bi bi-speedometer2 me-1"></i> Admin
        </a>

        <div class="ms-auto d-flex align-items-center gap-2">
            <form class="d-none d-sm-flex" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>

            <button class="btn btn-outline-secondary" type="button" id="themeToggle" aria-label="Toggle theme">
                <i class="bi bi-moon"></i>
            </button>

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </button>
                
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>