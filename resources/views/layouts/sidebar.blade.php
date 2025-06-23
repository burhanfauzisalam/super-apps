@php
    use Illuminate\Support\Facades\Request;
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Super Apps Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Super Apps</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nama Manusia</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview" role="menu" data-accordion="false">

                @foreach ($menus as $menu)
                    @php
                        $menuUrl = ltrim($menu->url, '/');
                        $isParentActive = Request::is($menuUrl) ||
                            collect($menu->children)->pluck('url')->contains(function ($childUrl) {
                                return Request::is(ltrim($childUrl, '/'));
                            });
                    @endphp

                    @if ($menu->children->isEmpty())
                        <li class="nav-item">
                            <a href="{{ url($menu->url) }}"
                               class="nav-link {{ Request::is($menuUrl) ? 'active' : '' }}">
                                <i class="nav-icon {{ $menu->icon }}"></i>
                                <p>
                                    {{ $menu->title }}
                                    {!! $menu->created_at && $menu->created_at->gt(now()->subDays(2))
                                        ? '<span class="right badge badge-success">New</span>'
                                        : '' !!}
                                </p>
                            </a>
                        </li>
                    @else
                        <li class="nav-item has-treeview {{ $isParentActive ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ $isParentActive ? 'active' : '' }}">
                                <i class="nav-icon {{ $menu->icon }}"></i>
                                <p>
                                    {{ $menu->title }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @foreach ($menu->children as $child)
                                    @php $childUrl = ltrim($child->url, '/'); @endphp
                                    <li class="nav-item">
                                        <a href="{{ url($child->url) }}"
                                           class="nav-link {{ Request::is($childUrl) ? 'active' : '' }}">
                                            <i class="nav-icon {{ $child->icon }}"></i>
                                            <p>
                                                {{ $child->title }}
                                                {!! $menu->created_at && $menu->created_at->gt(now()->subDays(2))
                                                    ? '<span class="right badge badge-success">New</span>'
                                                    : '' !!}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
