<x-main-layout title="Регистрация">
    <x-auth-register-header/>
    <br>
    <div class="wrapper">
        <h2>Регистрация</h2>
        <x-form :action="route('user.register')" method="POST">
            <div class="input-box">
                @error('login')
                {{ $message }}
                @enderror
                <input type="text" name="login" value="{{ old('login') }}" placeholder="Придумайте свой логин" required>
            </div>
            <div class="input-box">
                @error('email')
                {{ $message }}
                @enderror
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Напишите свой email" required>
            </div>
            <div class="input-box">
                @error('password')
                {{ $message }}
                @enderror
                <input type="password" name="password" placeholder="Придумайте пароль" required>
            </div>
            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Зарегистрироваться">
            </div>
            <div class="text">
                <h3>Вы зарегистрированы? <a href="{{ route('user.login') }}">Войти</a></h3>
            </div>
        </x-form>
    </div>
</x-main-layout>
