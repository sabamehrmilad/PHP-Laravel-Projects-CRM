<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/slider')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">پنل</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>پنل مدیریتی کارگزاری خوارزمی</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Delete This after download -->
        <!-- End Delete-->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">


            @include('layout.Useracc')


            <!-- User Account: style can be found in dropdown.less -->

                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>
