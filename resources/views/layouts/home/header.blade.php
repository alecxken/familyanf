
<style>
    #top-bar {
    background: linear-gradient(to right, #281776 0%, #6B73FF 100%);
    transition: background 0.4s;
}

.nav-item::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: linear-gradient(to right, #FD6E6A 0%, #6B73FF 100%);
    transition: 0.4s;
}

.nav-item:hover::after {
    width: 100%;
}

</style>
<script type="text/javascript">
<script>
function changeGradient() {
    const colors = ['#281776 0%, #6B73FF 100%', '#FF6A6A 0%, #FFD800 100%', '#00E676 0%, #00B0FF 100%'];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById('top-bar').style.background = `linear-gradient(to right, ${randomColor})`;
}

setInterval(changeGradient, 15000); // Change the gradient every 15 seconds
</script>

</script>
<div class="header" id="top-bar">
    <!-- Logo -->
    <div class="header-left">
        <a href="#" class="logo">
            <img src="{{ url('images/logos.png') }}" width="200" alt="">
        </a>
    </div>
    <!-- /Logo -->

    <a id="toggle_btn" class="{{ $ttl == 'HomePage' ? 'd-none' : '' }}" href="javascript:void(0)">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <!-- Header Title -->
    <div class="page-title-box">
        <h3></h3>
    </div>
    <!-- /Header Title -->

    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

    <!-- Header Menu -->
    <ul class="nav user-menu">
        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link {{ $ttl == 'HomePage' ? 'd-none' : '' }}" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
            </a>
        </li>
        <!-- /Notifications -->

        <!-- Message Notifications -->
        <li class="nav-item dropdown {{ $ttl == 'HomePage' ? 'd-none' : '' }}">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
            </a>
        </li>
        <!-- /Message Notifications -->

        @if($ttl != 'HomePage')
        @auth
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img src="{{ url('images/default.gif') }}" alt=""><span class="status online"></span></span>
                <span>{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('home/profile/' . Auth::user()->username) }}">My Profile</a>
                <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
            </div>
        </li>
        @endauth
        @endif
    </ul>
    <!-- /Header Menu -->

    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="">My Profile</a>

            <a class="dropdown-item" href="">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->
</div>
