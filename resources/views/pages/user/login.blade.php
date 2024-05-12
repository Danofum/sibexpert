<x-main-layout title="Регистрация">
    <x-auth-register-header/>
    <br>
    <div class="wrapper">
        <h2>Вход</h2>
        <x-form :action="route('user.auth')" method="POST">
            <div class="input-box">
                @error('login')
                {{ $message }}
                @enderror
                <input type="text" name="login" value="{{ old('login') }}" placeholder="Логин" required>
            </div>
            <div class="input-box">
                @error('password')
                {{ $message }}
                @enderror
                <input type="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Войти">
            </div>
            <div class="text">
                <h3>Вы НЕ зарегистрированы? <a href="{{ route('user.register') }}">Регистрация</a></h3>
            </div>
        </x-form>
    </div>
</x-main-layout>
