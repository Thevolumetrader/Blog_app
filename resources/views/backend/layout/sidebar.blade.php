<ul class="metismenu" id="side-menu">



    <li>
        <a href="{{route('admin.dashboard')}}">
            <i class="fas fa-th"></i>

            <span> Dashboard </span>
        </a>

    </li>

    <li>
        <a href="{{route('admin.post.index')}}">
            <i class="fas fa-book-open"></i>
            <span>Posts </span>
        </a>
    </li>
    <li>
        <a href="{{route('admin.tag.index')}}">
            <i class="fas fa-box"></i>
            <span>Tags </span>
        </a>
    </li>
    <li>
        <a href="{{route('admin.category.index')}}">
            <i class="fas fa-address-card"></i>
            <span>Categories </span>
        </a>
    </li>



    <li>
        <a href="javascript: void(0);">
            <i class="fas fa-users"></i>
            <span>Users Management </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li> <a href="{{route('role.index')}}">Role</a> </li>

            <li> <a href="{{route('adminuser.index')}}">User role/permission</a> </li>
        </ul>
    </li>


    <li>
        <a href="javascript: void(0);">
            <i class="fe-plus-square"></i>
            <span>Front End  </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li><a href="{{route('admin.aboutUs')}}">About Us</a></li>
            <li><a href="{{route('admin.contactUs')}}">Contact</a></li>


        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="fas fa-cogs"></i>
            <span>Settings </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li><a href="{{route('admin.logout')}}">Logout</a></li>
            <li><a href="page-recoverpw.html">Recover Password</a></li>

        </ul>
    </li>















</ul>
