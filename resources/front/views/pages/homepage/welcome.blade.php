<section class="welcome">
    <div class="container">
        <h1>Hello, World!</h1>
        <p>
            Каненето на всички в Discord беше лесно, защото разпратихме мейл до всеки един от Вас, но понеже в Discord не можем да видим с какъв мейл сте се регистрирали, съответно и не знаем кои точно хора са се присъединили в сървъра. Затова и правим този мини уебсайт, за да направим свръзката между Вашият Discord профил и реален Ваш имейл. За да го направим, е нужно единствено да се впишете със своя Discord акаунт.
        </p>
        <p>
            Също така тази свръзка ще бъде използвана, за да получавате седмични бюлетини с информация за прогреса на всяко звено от проекта, така че да сте наясно кой екип докъде е стигнал.
        </p>
        <p>
            Освен това Вашите мейли ще бъдат използвани и за по-лесното организиране на екипни срещи. Част от програмистите в сървъра ни вече работят върху Discord бот, чрез който лесно да се създават срещи, които ще бъдат добавяни в Google Calendar група, към която Вашият мейл ще присъства, така че винаги да знаете кога какви срещи е имало или предстои да има, както и да получавате известия за наближаващи такива, които се отнасят за Вас, ако разбира се, желаете.
        </p>
        @if (Auth::check())
            <h1>Информацията за Вас в нашата база данни:</h1>
            <div class="data">
                <div class="rows">
                    <div class="row">
                        Идентификационен номер в Discord:
                    </div>
                    <div class="row">
                        {{ $user->discord_id }}
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
        @endif
    </div>
</section>
