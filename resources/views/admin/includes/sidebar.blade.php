<div class="sidebar">
    {{-- {{ dd(Request::segment(2) == 'add-employee') }} --}}

    <div class="logo">
        <a href="./"><img src="{{ asset(env('adminIamgePath') . 'assets/images/logo.png') }}" alt=""></a>
    </div>
    <div class="menu-Bar">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="menuWrap">

        <ul class="sidenav">
            <li class="{{ Request::segment(1) == 'home' ? 'active' : '' }}"><a href="{{ Route('home') }}"><span><i
                            class="fal fa-draw-circle"></i></span> Dashboard</a></li>
            @can('profile-list')
                <li class="{{ Request::segment(1) == 'profiles' ? 'active' : '' }}"><a href="{{ Route('profiles.index') }}"><span><i class="fal fa-user"></i></span> Profile</a></li>
            @endcan
            <li><a href="#"><span><i class="far fa-coins"></i></span> My Financials</a></li>
            <li><a href="team-members.php"><span><i class="fal fa-user-friends"></i></span> Team Members</a></li>
            <!-- <li><a href="#"><span><i class="far fa-store"></i></span> Kitchen Fund</a></li> -->
            <li><a href="#"><span><i class="far fa-clock"></i></span> My Time Tracking</a></li>
            <!-- <li><a href="#"><span><i class="far fa-briefcase"></i></span> My HR Portal</a></li> -->
            <li><a href="employee-form.php"><span><i class="fal fa-file-alt"></i></span> General Queries</a></li>
            <li><a href="all-notices.php"><span><i class="fal fa-file-alt"></i></span> All Notices</a></li>
            <li><a href="#"><span><i class="far fa-copy"></i></span> Company Policies</a></li>

            <hr />
            <hr />

            @can('user-list')
                <li class="{{ Request::segment(1) == 'users' ? 'active' : '' }}"><a
                    href="{{ Route('users.index') }}"><span><i class="far fa-copy"></i></span> Manage Users</a>
                </li>
            @endcan

            @can('role-list')
                <li class="{{ Request::segment(1) == 'roles' ? 'active' : '' }}"><a
                    href="{{ Route('roles.index') }}"><span><i class="far fa-copy"></i></span> Manage Roles</a>
                </li>
            @endcan

            <!-- <li><a href="#"><span><i class="fal fa-car"></i></span> Fleet Management</a></li> -->
            <!-- <li><a href="#"><span><i class="far fa-dumbbell"></i></span> Activities</a></li> -->
            <!-- <li><a href="#"><span><i class="far fa-tag"></i></span> My Ticketing</a></li> -->
        </ul>
    </div>
</div>
