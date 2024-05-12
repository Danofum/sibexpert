<x-main-layout title="Личный кабинет">
    <x-main-header/>

    <br>
    <span class="font-200 text-center md:text-[20px]">Добро пожаловать, <b>{{ $user->login }}</b></span>
    <br>
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Адрес</div>
                    <div class="text-one">г. Тюмень,</div>
                    <div class="text-two">ул. Широтная, д. 29, кв. 81</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Телефон</div>
                    <div class="text-one">+7 (3452) 91-47-22</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">sib.expert@mail.ru</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Оставьте заявку для обратной связи</div>

                <p>
                    Если у вас есть какие-то вопросы или предложения по сотрудничеству -
                    заполните форму ниже
                </p>

                <x-form :action="route('order.store')" method="POST">
                    <div class="input-box">
                        @error('first_name')
                        {{ $message }}
                        @enderror
                        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Ваше имя" />
                    </div>
                    <div class="input-box">
                        @error('last_name')
                        {{ $message }}
                        @enderror
                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Ваша Фамилия" />
                    </div>
                    <div class="input-box">
                        @error('phone')
                        {{ $message }}
                        @enderror
                        <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Ваш номер телефона" />
                    </div>
                    <div class="input-box message-box">
                        @error('content')
                        {{ $message }}
                        @enderror
                        <textarea name="content" placeholder="Сообщение">{{ old('content') }}</textarea>
                    </div>
                    <div class="button">
                        <input type="submit" value="Отправить" />
                    </div>
                </x-form>
            </div>
        </div>
    </div>
    <script
        src="https://kit.fontawesome.com/fce9a50d02.js"
        crossorigin="anonymous"
    ></script>
    <br>
    <span class="font-200 text-center md:text-[20px]">Ваши заявки:</span>
    @forelse($orders as $order)
        <span class="font-200 text-center md:text-[20px]">Номер заявки: №{{ $order->id }}</span>
        <span class="font-200 text-center md:text-[20px]">{{ $order->content }}</span>
    @empty
        <span class="font-200 text-center md:text-[20px]">У вас пока нет заявок.</span>
    @endforelse
    <br>
</x-main-layout>
