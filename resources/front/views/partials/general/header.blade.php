<header class="page-header">
    <div class="container">
        <div class="wrapper">
            <nav class="navigation">
                {{--
                <ul class="menu {{ $data['pageName'] }}">
                    <li class="link active">
                        <a href="{{ route('homepage') }}">
                            Начало
                        </a>
                    </li>
                </ul>
                --}}
                <ul class="user @if (!is_null($user)) logged @endif">
                    @if (is_null($user))
                        <li class="button text color-green">
                            <a href="{{ route('auth.discord') }}">
                                <span><i class="icon-discord"></i> Вписване с Discord</span>
                            </a>
                        </li>
                    @else
                        @if ($isAdmin)
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
