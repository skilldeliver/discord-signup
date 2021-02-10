<h1>Информацията за Вас в нашата база данни:</h1>
<div class="data">
    <div class="rows">
        <div class="row">
            Идентификационен номер в Discord:
        </div>
        <div class="row">
            {{ $user->discord_user_id }}
        </div>
    </div>
    <div class="rows">
        <div class="row">
            Потребителско име в Discord:
        </div>
        <div class="row">
            {{ $user->discord_username }}
        </div>
    </div>
    <div class="rows">
        <div class="row">
            Аватар в Discord:
        </div>
        <div class="row">
            <a href="{{ $user->avatarHash }}" target="_blank" rel="noopener">
                кликнете тук
            </a>
        </div>
    </div>
    <div class="rows">
        <div class="row">
            Имейл:
        </div>
        <div class="row">
            {{ $user->email }}
        </div>
    </div>
    <div class="rows">
        <div class="row">
            Псевдоним в нашия Discord сървър:
        </div>
        <div class="row">
            {{ $user->server_nickname }}
        </div>
    </div>
    <div class="rows">
        <div class="row">
            Роли в нашия Discord сървър:
        </div>
        <div class="row">
            @if ($user->roles->isNotEmpty())
                <ul>
                    @foreach ($user->roles as $role)
                        <li>
                            <span style="color: {{ $role->hexColor }}">{{ $role->name }}</span>
                        </li>
                    @endforeach
                </ul>
            @else
                Все още нямате роли. Отидете в канал #избери-роля и си изберете от списъка.
            @endif
        </div>
    </div>
</div>
