{{-- Side Bar --}}
<div class="d-flex col-3 flex-column flex-shrink-0 vh-100 dashboardContainer" id="sidebar" style="width: 280px;">
    <button class="w-100 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"> </i>
    </button>
    <div class="text-center my-5 ">
        <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
            alt="Mindanao Kokusai Daigaku Logo">
        <h4 class="h4 mt-5">Hello Admin</h4>
        <p class="">Account ID: MKD105915</p>
    </div>

    <ul class="nav  nav-pills text-light flex-column mb-auto" id="navbarNav">
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{route('admin')}}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{route('addcourses')}}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Add Course / Subjects
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">

            <button class=" btn btn-toggle align-items-center rounded collapsed nav-link link-light sideBarLink py-3"
                data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
                Account Management
            </button>

        </li>
        <div class="collapse" id="home-collapse" style="">
            <ul class=" w-100 p-1 btn-toggle-nav list-unstyled">
                <li class="nav-item my-1 hoverOfSidebar">
                    <a class="dropdown-item my-2 ms-4 py-2" href="{{route('student_account_management')}}">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Manage Accounts
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a class="dropdown-item my-2 ms-4 py-2" href="{{route('change_password_account_management')}}">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Change Password Req.
                    </a>
                </li>
            </ul>
        </div>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{route('admin')}}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Pre Enrolled Students
            </a>
        </li>
        <li class="nav-item my-1 hoverOfSidebar">
            <a href="{{route('admin')}}" class="nav-link link-light sideBarLink py-3">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Admin Account
            </a>
        </li>
    </ul>
</div>