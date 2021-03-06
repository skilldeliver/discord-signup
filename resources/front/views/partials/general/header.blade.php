<header class="page-header">
    <div class="container">
        <div class="wrapper">
            <nav class="navigation">
                <ul class="user @if (Auth::check()) logged @endif">
                    @if (Auth::guest())
                        <li class="button text color-green">
                            <a href="{{ route('auth.discord') }}">
                                <span><i class="icon-discord"></i> Вписване с Discord</span>
                            </a>
                        </li>
                    @else
                        @if (Auth::user()->isAdmin)
                            <li class="button color-blue">
                                <a href="{{ route('admin.dashboard') }}" title="Панел">
                                    <i class="icon-panel"></i>
                                </a>
                            </li>
                        @endif
                        <li class="button color-red">
                            <a href="{{ route('auth.logout') }}" title="Отписване">
                                <i class="icon-close"></i>
                            </a>
                        </li>
                        <li class="message">
                            <span>Здравейте,
                                <strong>{{ $user->server_nickname }}</strong></span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
