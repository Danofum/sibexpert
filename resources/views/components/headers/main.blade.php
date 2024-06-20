<header
    class="flex justify-between p-l-30 p-r-30 lt-lg:p-l-8 lt-lg:p-r-8 lt-sm:p-l-3 lt-sm:p-r-3 box-border items-center w-full h-[90px] bg-brand-bg color-brand-text">
    <span class="font-bold text-[28px]"><a href="{{ route('main') }}">Sibexpert</a></span>
    <nav>
        <ul id="navmenu" class="flex flex-row list-none gap-8 [&>*]:transition-all [&>*>*]:no-underline [&>*>*]:color-brand-text [&>*]:min-w-fit [&>*]:lt-sm:w-fit
				lt-lg:flex-col lt-lg:absolute lt-lg:bg-brand-bg lt-lg:gap-4 lt-lg:p-8 lt-lg:p-t-4 lt-lg:p-b-10 lt-lg:w-full lt-lg:top-0 lt-lg:left-0 lt-lg:important:top-[-500px] transition-all box-border">
            <li><a href="#about">О компании</a></li>
            <li><a href="#services">Услуги</a></li>
            <li><a href="#projects">Проекты</a></li>
            <li><a href="#clients">Клиенты</a></li>
            <li><a href="#footer">Контакты</a></li>
            <hr class="sm:hidden important:w-full text-gray-200">
        </ul>
    </nav>
    <div class="flex gap-[24px] items-center" id="register-login">
        <ul class="flex list-none gap-8 [&>*>*]:no-underline [&>*>*]:color-brand-text lt-sm:hidden">
            @auth
                <li><a href="{{ route('user.profile') }}">Личный кабинет</a></li>
                <li><a href="{{ route('user.log-out') }}">Выйти</a></li>
            @else
                <li><a href="{{ route('user.register') }}">Регистрация</a></li>
                <li><a href="{{ route('user.login') }}">Вход</a></li>
            @endauth
        </ul>
        <button
            class="w-8 h-8 lg:hidden text-8 z-10 flex items-center justify-center bg-transparent border-none text-brand-text cursor-pointer"
            onclick="menuToggle()">
            <i class="ti ti-menu-2 active:scale-80 transform transition-all" id="burger-menu-button-open"></i>
            <i class="ti ti-x hidden active:scale-80 transform transition-all" id="burger-menu-button-close"></i>
        </button>
    </div>
</header>
