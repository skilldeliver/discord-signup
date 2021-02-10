<header class="page-header">
    <div class="container">
        <div class="wrapper">
            <div class="brand">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="name">Podkrepi.bg</span>
                </a>
            </div>
            <nav class="navigation">
                <ul class="menu">
                    <li class="link">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                            <span>Табло</span>
                        </a>
                    </li>
                    <li class="separator"></li>
                    <li class="link">
                        <a href="{{ route('homepage') }}">
                            <i class="icon-back"></i>
                            <span>Назад към сайта</span>
                        </a>
                    </li>
                    <li class="link">
                        <a href="{{ route('auth.logout') }}">
                            <i class="icon-close"></i>
                            <span>Отписване</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="toggle-menu">
                <i class="icon-menu"></i>
                <i class="icon-close"></i>
            </div>
        </div>
    </div>
</header>
