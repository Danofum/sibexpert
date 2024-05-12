<x-main-layout title="Главная страница">
    <x-main-header/>
    <div
        class="sb-img w-full h-[70vh] text-brand-text flex items-center p-l-23 lt-lg:p-l-6 lt-lg:p-r-6 lt-sm:p-r-4 lt-sm:p-l-4 box-border">
        <div class="flex flex-col max-w-180 min-w-40">
            <span class="font-500 text-5xl lt-sm:text-4xl uppercase line-height-[110%]">Контроль<br>качества</span>
            <span class="font-200 md:text-[20px]">Строгий контроль качества. Опытные эксперты и специалисты
				неразрушающего контроля готовы провести техническую диагностику
				и оформить заключение с выводами о состоянии объекта,
				его соответствии требованиям безопасности и остаточном ресурсе.</span>
        </div>
    </div>

    <div id="about"
         class="sb-img w-full h-[70vh] text-brand-text flex items-center justify-center p-l-23 lt-lg:p-l-6 lt-lg:p-r-6 box-border">
        <div class="flex flex-col max-w-180 items-center">
            <span class="font-500 text-5xl lt-sm:text-4xl uppercase">О компании</span>
            <span class="font-200 text-center md:text-[20px]">Для нефтяной и газовой промышленности наша компания предлагает
				комплексные решения, отличающиеся технологичностью и
				ремонтопригодностью с неизменно высоким качеством.
				Профессиональный подход и огромный опыт нашего коллектива
				позволяет решать любые поставленные заказчиком задачи.
			</span>
        </div>
    </div>

    <div id="services"
         class="sb-img w-full h-[70vh] text-brand-text flex items-center p-l-23 lt-lg:p-l-6 lt-lg:p-r-6 box-border">
        <div class="flex flex-col">
            <span class="font-500 text-5xl lt-sm:text-4xl uppercase">Услуги</span>
            <ul class="font-200 md:text-[20px]">
                <li>Проектирование блочно-комплектного оборудования и технологических установок;</li>
                <li>Изготовление и поставка основного технологического оборудования;</li>
                <li>Экспертиза промышленной безопасности технологического оборудования;</li>
                <li>Технологическое обследование оборудования, в том числе измерение капельного уноса;</li>
                <li>Модернизация и ремонт основного технологического оборудования (в том числе послеаварийный);</li>
                <li>Шеф-монтажные, пусконаладочные работы, сдача объекта в эксплуатацию.</li>
            </ul>
        </div>
    </div>

    <div id="clients" class="bg-brand-bg w-full h-44 text-brand-text flex items-center justify-center box-border">
        <span class="text-5xl font-600 text-center">НАШИ<br>КЛИЕНТЫ</span>
    </div>
    <div class="bg-white w-full box-border flex items-center justify-center p-t-10 p-b-10">
        <div id="clients-list" class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 sm:gap-16">
            <div class="w-52 h-52"></div>
            <div class="w-52 h-52"></div>
            <div class="w-52 h-52"></div>
            <div class="w-52 h-52"></div>
        </div>
    </div>
    <x-main-footer/>
</x-main-layout>
