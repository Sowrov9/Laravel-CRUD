<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ asset('assets/images/Sleep_Coma_Lodge_logo.png') }}" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h4 class="logo-text">Sleep Coma Lodge</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i> </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Hotel Management</li>

        <!-- Room Management -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-hotel"></i></div>
                <div class="menu-title">Room Management</div>
            </a>
            <ul>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Add Room</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Room Types</a></li>
            </ul>
        </li>

        <!-- Booking Management -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-calendar"></i></div>
                <div class="menu-title">Booking Management</div>
            </a>
            <ul>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>All Bookings</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>New Booking</a></li>
            </ul>
        </li>

        <!-- Guest Management -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user"></i></div>
                <div class="menu-title">Guest Management</div>
            </a>
            <ul>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>All Guests</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Add Guest</a></li>
            </ul>
        </li>

        <!-- Payment Management -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-wallet"></i></div>
                <div class="menu-title">Payments</div>
            </a>
            <ul>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>All Payments</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>New Payment</a></li>
            </ul>
        </li>

        <!-- Staff Management -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-id-card"></i></div>
                <div class="menu-title">Staff Management</div>
            </a>
            <ul>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>All Staff</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Add Staff</a></li>
            </ul>
        </li>

        <!-- Reports -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-bar-chart-alt-2"></i></div>
                <div class="menu-title">Reports</div>
            </a>
            <ul>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Revenue Report</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Occupancy Report</a></li>
                <li><a href=""><i class="bx bx-right-arrow-alt"></i>Staff Report</a></li>
            </ul>
        </li>

        <!-- Existing Menu Items -->
        <li class="menu-label">Web Apps</li>
        <li><a href=""><div class="parent-icon"><i class="bx bx-envelope"></i></div><div class="menu-title">Email</div></a></li>
        <li><a href=""><div class="parent-icon"><i class="bx bx-conversation"></i></div><div class="menu-title">Chat Box</div></a></li>

        <li class="menu-label">Authentication</li>
        <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="parent-icon"><i class="bx bx-log-out"></i></div>
            <div class="menu-title">Logout</div>
        </a></li>
        <form id="logout-form" action="" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
    <!--end navigation-->
</div>
