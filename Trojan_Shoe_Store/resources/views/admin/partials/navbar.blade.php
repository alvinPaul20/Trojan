
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="{{ route('admin.dashboard') }}" class="logo">
                        <img
                          src="{{ asset('images/trojan-logo.jpg') }}"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="100"
                        />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">
                            <a
                                data-bs-toggle="collapse"
                                href="#dashboard"
                                class="collapsed"
                                aria-expanded="false"
                            >
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ route('admin.dashboard') }}">
                                            <span class="sub-item">Dashboard 1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Other sidebar links here, formatted similarly -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>User Accounts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                <li>
                                        <a href="{{ route('admin.UserAccount') }}">
                                            <span class="sub-item">Manage Accounts</span>
                                        </a>
                                    </li>

                                    <!-- More components can be added here -->
                                </ul>
                            </div>
                        </li>
                        <!-- Additional sections and links as needed -->
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Proucts Menu</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                <li>
                                        <a href="{{ route('admin.products') }}">
                                            <span class="Products">Products</span>
                                        </a>
                                    </li>
                                <li>
                                        <a href="{{ route('admin.sub-pages.create_product') }}">
                                            <span class="sub-item">Add Product</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.sub-pages.edit_products') }}">
                                            <span class="sub-item">Edit Product</span>
                                        </a>
                                    </li>

                                    <!-- More components can be added here -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

