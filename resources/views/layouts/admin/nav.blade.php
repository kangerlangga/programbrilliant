<style>
    @media (max-width: 768px) {
        .navbar {
            display: none;
        }
    }
    </style>

    <!-- Logo Header -->
    <div class="logo-header">

        <a href="#" class="logo">
            <img src="{{  url('') }}/assets/logo/logo2.png" alt="navbar brand" class="navbar-brand" height="45">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" style="background-color: #404285">
        <div class="container-fluid">
        <!-- Running Text -->
        <marquee behavior="" direction="" class="text-white mr-3">Welcome to the <b>Brilliant English Course</b> Easily manage your products and customer messages. Make sure your products stand out and provide a great experience for your customers!</marquee>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link rounded bg-danger" href="#" onclick="confirmLogout()">
                        <i class="fas fa-sign-out-alt" style="color: white"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
