<x-main-layout title="Главная страница">
    <x-main-header/>
    <div class="bg-img-1 w-full h-[100vh] text-brand-text flex items-center p-l-30 p-r-30 lt-lg:p-l-6 lt-lg:p-r-6 lt-sm:p-r-4 lt-sm:p-l-4 box-border">
        <div class="flex flex-col max-w-180 min-w-40">
            <span class="font-500 text-6xl lt-sm:text-4xl uppercase line-height-[110%]">Контроль<br>качества</span>
            <span class="font-200 md:text-[22px] text-[18px]">Строгий контроль качества. Опытные эксперты и специалисты
				неразрушающего контроля готовы провести техническую диагностику
				и оформить заключение с выводами о состоянии объекта,
				его соответствии требованиям безопасности и остаточном ресурсе.</span>
        </div>
    </div>

    <div id="about" class="bg-img-2 w-full h-[100vh] text-brand-text flex items-center justify-center p-l-30 p-r-30 lt-lg:p-l-6 lt-lg:p-r-6 box-border">
        <div class="flex flex-col max-w-180 items-center">
            <span class="font-500 text-6xl lt-sm:text-4xl uppercase">О компании</span>
            <span class="font-200 text-center md:text-[22px] text-[18px]">Для нефтяной и газовой промышленности наша компания предлагает
				комплексные решения, отличающиеся технологичностью и
				ремонтопригодностью с неизменно высоким качеством.
				Профессиональный подход и огромный опыт нашего коллектива
				позволяет решать любые поставленные заказчиком задачи.
			</span>
        </div>
    </div>

    <div id="services" class="bg-img-3 w-full h-[100vh] text-brand-text flex items-center p-l-30 lt-lg:p-l-6 lt-lg:p-r-6 box-border">
        <div class="flex flex-col">
            <span class="font-500 text-6xl lt-sm:text-4xl uppercase">Услуги</span>
            <ul class="font-200 md:text-[22px] text-[18px] square-list-markers">
                <li>Проектирование блочно-комплектного оборудования и технологических установок;</li>
                <li>Изготовление и поставка основного технологического оборудования;</li>
                <li>Экспертиза промышленной безопасности технологического оборудования;</li>
                <li>Технологическое обследование оборудования, в том числе измерение капельного уноса;</li>
                <li>Модернизация и ремонт основного технологического оборудования (в том числе послеаварийный);</li>
                <li>Шеф-монтажные, пусконаладочные работы, сдача объекта в эксплуатацию.</li>
            </ul>
        </div>
    </div>

    <div id="projects" class="bg-img-4 w-full h-[100vh] text-brand-text flex items-center p-l-30 p-r-30 lt-lg:p-l-6 lt-lg:p-r-6 lt-sm:p-r-4 lt-sm:p-l-4 box-border justify-end">
        <div class="flex flex-col max-w-180 min-w-40 items-end">
            <span class="font-500 text-6xl lt-sm:text-5xl uppercase line-height-[110%]">Проекты</span>
            <span class="font-200 md:text-[22px] text-[18px] text-right">
				<p>В компании собрана группа опытных инженеров, конструкторов и
				технологов, многие из которых имеют более чем 20-летний опыт
				работы, с успехом применяемый сегодня при проектировании и
				поставке нового современного оборудования и технологических
				установок.</p>
				<p>Компания динамично растет и развивается, увеличивается объем
				выполняемых работ. Среди постоянных партнеров компании такие
				ведущие нефтегазовые предприятия России, как ПАО «Газпром», ПАО
				«НК Роснефть», ПАО «ЛУКОЙЛ», ПАО «НОВАТЭК»</p>
			</span>
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
