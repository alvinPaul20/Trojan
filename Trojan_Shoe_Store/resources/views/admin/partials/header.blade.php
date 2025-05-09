
    <div class="main-header w-100 position-fixed">

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid d-flex justify-content-end align-items-center gap-4">
                
                <h3 class="mb-0">Welcome, {{ Auth::user()->name }}!</h3>
                
                <form class="d-flex align-items-center gap-3">
                    <input class="form-control" type="text" placeholder="Search">
                    
                    <a href="#" class="position-relative">
                        <i class="fa-solid fa-magnifying-glass text-dark"></i>
                    </a>
                    
                    <button type="button" class="btn btn-outline-secondary"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </form>
            </div>
        </nav>
        <!-- End Navbar Header -->
    </div>
