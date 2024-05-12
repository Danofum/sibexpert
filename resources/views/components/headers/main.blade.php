<header class="flex justify-between p-l-24 p-r-24 lt-lg:p-l-8 lt-lg:p-r-8 lt-sm:p-l-3 lt-sm:p-r-3 box-border items-center w-full h-[90px] bg-brand-bg color-brand-text">
    <span class="font-bold text-[28px]"><a href="{{ route('main') }}" style="color: #fff; cursor: pointer">SibExpert</a></span>
    <nav>
        <ul id="navmenu" class="flex flex-row list-none gap-5 [&>*]:transition-all [&>*>*]:no-underline [&>*>*]:color-brand-text [&>*]:min-w-fit [&>*]:lt-sm:w-fit
				lt-md:flex-col lt-md:absolute lt-md:bg-brand-bg lt-md:p-8 lt-md:p-t-4 lt-md:p-b-10 lt-md:w-full lt-md:top-0 lt-md:left-0 lt-md:important:top-[-500px] transition-all box-border">
            <li><a href="">О компании</a></li>
            <li><a href="">Услуги</a></li>
            <li><a href="">Клиенты</a></li>
            <li><a href="">Контакты</a></li>
            <hr class="sm:hidden important:w-full text-gray-200">
            @auth
                <li><a href="{{ route('user.profile') }}">Личный кабинет</a></li>
                <li><a href="{{ route('user.log-out') }}">Выйти</a></li>
            @else
                <li><a href="{{ route('user.register') }}">Регистрация</a></li>
                <li><a href="{{ route('user.login') }}">Вход</a></li>
            @endauth
        </ul>
    </nav>
    <div class="flex gap-[24px] items-center" id="register-login">
        <ul class="flex list-none gap-5 [&>*>*]:no-underline [&>*>*]:color-brand-text lt-sm:hidden">
            @auth
                <li><a href="{{ route('user.profile') }}">Личный кабинет</a></li>
                <li><a href="{{ route('user.log-out') }}">Выйти</a></li>
            @else
                <li><a href="{{ route('user.register') }}">Регистрация</a></li>
                <li><a href="{{ route('user.login') }}">Вход</a></li>
            @endauth
        </ul>
        <button class="w-8 h-8 md:hidden text-8 z-10 flex items-center justify-center bg-transparent border-none text-brand-text cursor-pointer" onclick="menuToggle()">
            <i class="ti ti-menu-2 active:scale-80 transform transition-all" id="burger-menu-button-open"></i>
            <i class="ti ti-x hidden active:scale-80 transform transition-all" id="burger-menu-button-close"></i>
        </button>
        </div>
</header>
