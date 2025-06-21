<nav class="main-header navbar navbar-expand navbar-dark">
<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    @foreach ($navbarMenus as $menu)
    <li class="nav-item d-none d-sm-inline-block">
    <a href="{{$menu->url}}" class="nav-link">{{$menu->title}}</a>
    </li>
    @endforeach
    
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">

    <li class="nav-item">
        <a class="nav-link text-red" href="#" role="button" title="Logout">
            <i class="fas fas fa-power-off"></i>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="Fullscreen">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </li>
</ul>
</nav
