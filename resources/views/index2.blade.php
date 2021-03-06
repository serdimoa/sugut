<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{!! asset('style/styles.css') !!}">
    <meta name="_token" content="{!! csrf_token() !!}"/>

</head>

<body>
    
    <div class="container-fluid">
        <div class="container">
            <header class="header">
                <div class="header__logo">
                    <img src="images/logo.png" alt="Logo image">
                </div>
                <div class="header__nav">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="">
                            <a href="/">38 микрорайон</a>
                        </li>
                        <li role="presentation" class="active"><a href="/{{env('2PAGE','ivana-zaharova-12(1)')}}">  <i class="header__nav--geo">
                            <img src="images/Fill.png" alt="geo-icon"></i>ул. Ивана Захарова 12/1</a> </li>
                        <li role="presentation"><a href="/{{env('3PAGE','melik-karamova-40,40(1)')}}">ул. Мелик-Карамаова 40, 40/1</a></li>
                    </ul>
                </div>
                <div class="header__phone">
                    <div class="header__phone--number"><a href="tel:+73462600190">8 (3462) 600-190</a></div>
                    <div class="header__phone--label">Отдел продаж</div>
                    <div class="header__phone--address">Сургут, Тюменский тракт, 2/1</div>
                </div>
            </header>
        </div>
        <span class="line"></span>
    </div>
    <section class="baner" style="background: url(/images/background-2.jpg);background-position: 0 0;
    background-size: cover;" id="baner">
        <div class="container">
            <div class="row">
                <div class="baner__left">
                    <div class="row">
                        <div class="good__price">
                            <p class="good__price--harry">Успейте купить
                            </p>
                            <p class="good__price--where">квартиру в Сургуте</p>
                            <p class="good__price--much">по цене от 43 000 руб./м&#178;!</p>
                        </div>
                        <div class="arrow">
                            <img src="images/arrow.png" alt="">
                        </div>
                    </div>
                    <div class="row bg__black">
                        <div class="good__black">
                            <p>Пожалуй, самые теплые дома в РФ.</p>
                            <p>Первоначальный взнос от 64 000 рублей*</p>
                        </div>
                        <div class="enes__image">
                            <a href="#about__micro" id="toabout"><img src="/images/logo-enes20113.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="good__list">
                            <ul>
                                <li>Только готовое жилье</li>
                                <li>Квартиры от 43 до 53 м&#178;</li>
                                <li>Безопасные детские площадки</li>
                                <li>Школа - детский сад, ТЦ Ленина</li>
                                <li>Рядом зеленый масив</li>
                            </ul>
                        </div>
                        <div class="good__list">
                            <ul>
                                <li>Очень тёплые дома
                                </li>
                                <li>Бесшумные быстрые лифты
                                </li>
                                <li>Остеклённые лоджии
                                </li>
                                <li>Скидка до 660 000 рублей
                                </li>
                                <li>Экономия на ЖКУ до -40%</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="baner__right">
                    <div class="baner__form--header">
                        Продажа квартир
                        <br> <span> от 1 750 000 руб.</span>
                    </div>
                    <div class="baner__form--sub">
                        акция с 9 июня по 10 июля
                    </div>
                    <div class="baner__form--free">
                        БЕСПЛАТНОЕ
                        <br><span>оформление сделки</span>
                        <br>при подаче заявки через сайт.
                    </div>

                    <form action="/header_form" class="Forms" id="headerForm">
                        <input type="hidden" class="form__name--input" value="Форма в шапке сайта">
                        <div class="baner__form--input">
                            <i class="baner__form--icon"><img src="/images/User.png"
                    alt=""></i>
                            <input required class="name name--input" id="header__name " type="text" placeholder="Ваше имя">
                        </div>
                        <div class="baner__form--input">
                            <i class="baner__form--icon"><img src="/images/Iphone.png"
                    alt=""></i>
                            <input required class="name phone--input" id="header__phone" type="text" placeholder="+7 ">
                        </div>
                        <input type="submit" value="Оставить заявку" class="baner__form--submit">
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="arrow-down text-center">
                    <a id="scrollToabout" href="#about__micro">
                        <img src="/images/5412.png" alt="">
                    </a>

                </div>
            </div>
        </div>
    </section>
    <section class="prime">
        <div class="container">
            <div class="row">
                <div class="number first">
                    <div class="int">2</div>
                    <div class="text">дома уже
                        <br>построили</div>
                </div>
                <div class="number">
                    <div class="int">10</div>
                    <div class="text">видов различных
                        <br>планировок</div>
                </div>
                <div class="number">
                    <div class="int">2015</div>

                    <div class="text">год сдачи первого
                        <br> дома на ул. Ивана Захарова</div>
                </div>
                <div class="number">
                    <div class="int">470</div>
                    <div class="text">машиномест в подземном паркинге</div>
                </div>
                <div class="number">
                    <div class="int">250</div>
                    <div class="text">квартир доступно для продажи <br>
покупателям</div>
                </div>
            </div>
        </div>
    </section>
    <section id="about__micro" class="about__micro">
        <div class="container">
            <div class="row">
                <div class="images">
                    <img src="images/rombed.jpg" class="img-responsive" alt="">
                    
                    
                </div>
                <div class="text">

                    <h1>Многоквартирный дом  <br>
<b>по ул. Ивана Захарова, 12/1</b></h1>
                    <span><img src="/images/plank.png"
              alt=""></span>
                    <p>В конце 2015 года компания «Сибпромстрой-Югория» сдала в Сургуте в эксплуатацию многоквартирный дом по улице Ивана Захарова, 12/1.</p>
                    <p>

Покупателям доступны 448 квартир, прекрасная огороженная детская площадка, многоуровневый подземный паркинг и многое другое. Новая многоэтажка была построена одновременно с другим домом Сибпромстроя, расположенным прямо по соседству, квартиры в котором уже полностью проданы. Поэтому повышенный интерес покупателей к новому дому вполне объясним.
В здании — 17 этажей, но в новостройках нижний этаж для удобства жильцов сейчас принято отдавать под инфраструктуру: магазины, аптеки, мастерские, парикмахерские, салоны красоты, туристические фирмы, офисы операторов мобильной связи. Дом четырехподъездный. В каждом подъезде по два бесшумных лифта фирмы OTIS, которые доставят на нужный этаж со скоростью 1,6 метра в секунду. Имеются и грузовые лифты.</p>
                    <div class="reed__more--content">
                        <p>38-й мкр. расположен в очень удачном месте относительно городской инфраструктуры. Рядом находится ТРЦ «Аура», недалеко располагаются железнодорожный вокзал и выезд из города. В непосредственной близости имеется лесок, который в ближайшем будущем станет прекрасным мини-парком. Кроме того, тут возведен детский сад (их здесь предполагается построить еще два, также планируется строительство школы) — то есть проблем с определением мест, куда будет ходить ребенок, нет. В-третьих, на территории комплекса имеется большое дворовое пространство с детскими игровыми площадками, построен двухуровневый паркинг, а пешеходные дорожки во дворах отделены от проезжей зоны для безопасности жильцов. Также можно отметить, что дома 38-го микрорайона построены по мировым стандартам энергоэффективности, имеют специальную защиту от промерзания стен и оснащены новейшим оборудованием, позволяющим рационально расходовать электричество, воду и тепло.</p>
                    </div>
                    <a class="read__more " id="reeds" href="#">Читать полностью <i><img src="/images/5413.png"
               alt=""></i> </a>
                </div>
            </div>
        </div>
    </section>
    <section class="enes">
        <div class="container">
            <div class="row">
                <div class="enes__logo"><a href="#">
                    <img src="/images/logo-enes20113.png" alt=""></a>
                </div>
                <div class="enes__about">
                    Компания «Сибпромстрой» уже дважды участвовала во <a href="#">Всероссийском конкурсе</a> реализованных проектов в области энергосбережения и повышения энергоэффективности ENES и оба раза заняла лидирующие позиции. Так, по итогам 2015 года застройщик занял первое место в категории «Лучший энергоэффективный многоквартирный жилой дом». В 2014 году Сибпромстрой с реализованным проектом застройки микрорайона № 40 в Сургуте удостоился на этом конкурсе второго места, уступив лишь Татарстану.
                </div>
            </div>
        </div>
    </section>
    <section class="infrostructure">
        <div class="container">
            <div class="row">
                <h2 class="white">
                Инфраструктура 38 микрорайона
            </h2>
                <p class="sub">Микрорайон спланирован как пространственно-закрытая композиция зданий: по периметру восемь домов, а в середине —
                    <br>большое дворовое пространство с детскими и спортивными площадками, пешеходными дорожками и автомобильный
                    <br>подземный паркинг. Возведены школа-детский сад. Рядом находится ТРЦ "Аура".</p>
            </div>
            <div class="row">
                <div class="icon__blue">
                    <img src="/images/portfel.png" alt="">
                    <p>Современная
                        <br> школа в пешей
                        <br> доступности</p>
                </div>
                <div class="icon__blue">
                    <img src="/images/duck.png" alt="">
                    <p>Lетский сад
                        <br> находится
                        <br>рядом</p>
                </div>
                <div class="icon__blue">
                    <img src="/images/busket.png" alt="">
                    <p>Микрорайон
                        <br> рядом с
                        <br>гипермаркетом «Лента»</p>
                </div>
                <div class="icon__blue">
                    <img src="/images/arrowss.png" alt="">
                    <p>Удобная
                        <br>транспортная развязка</p>
                </div>
                <div class="icon__blue">
                    <img src="/images/car.png" alt="">
                    <p>Подземный
                        <br>паркинг
                        <br> на 470 мест</p>
                </div>
                <div class="icon__blue">
                    <img src="/images/city.png" alt="">
                    <p>Огороженные
                        <br>детские
                        <br> площадки
                    </p>
                </div>
            </div>
            <div class="whiteblock">
                <div class="row">
                <h2 class="black">Покупать выгодно квартиры в нашем микрорайоне!</h2>
                </div>
                <div class="row">
                <div class="icon--romb">
                    <img src="/images/portmone.png" alt="">
                    <h3>Самые низкие цены<br>
на готовые квартиры <br>
от 43 тыс.руб./м&#178;

</h3>
                    <p>Стеновые панели ровные и не требуют оштукатуривания.</p>
                </div>
                <div class="icon--romb">
                    <img src="/images/saleromb.png" alt="">
                    <h3>Максимальная скидка
до 660 000 рублей
</h3>
                    <p>
                        Уточните вашу скидку у <a href="#" class="toManager">менеджера</a></p>
                </div>
                <div class="icon--romb">
                    <img src="/images/percent.png" alt="">
                    <h3>Экономия <br>на ЖКУ<br>
до 40%

</h3>
                    <p>- Энергоэффективные дома
                        <br>класс: "А","А+"
                        <br> - Низкая площадь мест общего
                        <br> пользования, нет подвалов и чердаков - Бойлерная система горячего водоснабжения делает Вас
                        <br>хозяином положения</p>
                </div>
                <div class="icon--romb">
                    <img src="/images/remont.png" alt="">
                    <h3>Ремонт квартир <br>от 1,2 тыс.руб./м&#178; <br>включается в ипотеку

</h3>
                    <p>Сроки выполнения ремонта
                        <br>от 1 недели на стадии оформления документов.</p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-invest">
        <div class="container">
            <div class="row">
                <h2>Дома сданы, отсутствуют инвестиционные риски</h2>
            </div>
            <div class="row">
                <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video__image">
                    <img class="img-responsive" src="/images/video__image.png" alt="">
                </a>
                <div class="text">
                    <p>Одно из последних предложений, утверждённых президентом страны, было озвучено в начале мая — уголовная ответственность за обман дольщиков. Но даже такие радикальные методы в сложных экономических условиях, когда многие строительные компании буквально сводят концы с концами, не всегда помогают. Поэтому на том же госсовете было озвучено — лучше покупать уже готовое жильё. Только такие сделки могут сегодня гарантировать отсутствие проблем при покупке квартиры.</p>
                    <p>

                        «В связи с кризисом строительные компании тоже находятся в очень непростом положении, и, конечно же, это всё так или иначе отражается на покупателях, на рядовых гражданах. Если компания посыпалась, обанкротилось, либо находится в неком предбанкротном состоянии, то сдать вовремя объект очень сложно. Необходимо сегодня особенно внимательно относиться к компаниям, где вы планируете приобретать жильё, и стараться выбирать все-таки именно в готовое жильё», — прокомментировал заместитель директора ООО «Сибпромстрой-Югория» Николай Епифанов.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="fast">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h2>Торопитесь пока есть выбор!</h2>
                    <p class="subhead"><span>Мене 250 квартир доступно для продажи по адресу ул. Ивана Захарова, 12/1.</span>
                        <br> Для подбора квартиры мы выделим Вам персонального менеджера.</p>
                </div>
                <div class="arrow"><img src="/images/arrowfast.png " alt=""></div>
                <div class="form">
                    <form class="Forms" action="">
                        <input type="hidden" class="form__name--input" value="Торопитесь пока есть выбор">

                        <div class="baner__form--input">
                            <i class="baner__form--icon"><img src="/images/User.png"
                    alt=""></i>
                            <input required class="name name--input" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="baner__form--input">
                            <i class="baner__form--icon"><img src="/images/Iphone.png"
                    alt=""></i>
                            <input required class="name phone--input" type="text" placeholder="+7 ">
                        </div>
                        <input type="submit" value="Оставить заявку" href="#small-dialog" class="baner__form--submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="plan">
        <div class="container">
            <div class="row">
                <h2>Выберите планировку для квартиры:</h2>
            </div>
            <div class="row mar30">
                <div class="variant">
                    <a href="big/2/1variant.jpg" class="image-popup-vertical-fit" title="1 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/1variant.png" alt="">
                    </a>
                </div>
                <div class="variant">
                    <a href="big/2/2variant.jpg" class="image-popup-vertical-fit" title="2 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/2variant.png" alt="">
                    </a>
                </div>
                <div class="variant">
                    <a href="big/2/3variant.jpg" class="image-popup-vertical-fit" title="3 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/3variant.png" alt=""></a>
                </div>
                <div class="variant">
                    <a href="big/2/4variant.jpg" class="image-popup-vertical-fit" title="4 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/4variant.png" alt=""></a>
                </div>
                <div class="variant">
                    <a href="big/2/5variant.jpg" class="image-popup-vertical-fit" title="5 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/5variant.png" alt=""></a>
                </div>
            </div>
            <div class="row mar30">
                <div class="variant">
                    <a href="big/2/6variant.jpg" class="image-popup-vertical-fit" title="6 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/6variant.png" alt=""></a>

                </div>
                <div class="variant">
                    <a href="big/2/7variant.jpg" class="image-popup-vertical-fit" title="7 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/7variant.png" alt=""></a>

                </div>
                <div class="variant">
                    <a href="big/2/8variant.jpg" class="image-popup-vertical-fit" title="8 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/8variant.png" alt=""></a>

                </div>
                <div class="variant">
                    <a href="big/2/9variant.jpg" class="image-popup-vertical-fit" title="9 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/9variant.png" alt=""></a>

                </div>
                <div class="variant">
                    <a href="big/2/10variant.jpg" class="image-popup-vertical-fit" title="10 <a style='color:#fff;' target='_blank' href='/big/2/10variant.jpg'>(Скачать)</a>">
                        <img src="/images/10variant.png" alt=""></a>

                </div>
            </div>
        </div>
    </section>
    <section class="oformlenie">
        <div class="container">
            <div class="row">
                <h2>
                    Оформление ипотеки
                </h2>
                <p>В офисе продаж компании Сибпромстрой-Югория присутствуют представители сразу нескольких крупных банков. Ознакомиться с основными условиями ипотечных продуктов можно ниже.</p>
            </div>
            <div class="row">
                <div class="bank">
                    <div class="img">

                        <img src="/images/sber.png" alt=""></div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 15%</span></p>
                        <p>Процентная ставка:<span>от 13,5%</span></p>
                        <a href="#" class="greybtn">до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub">Ипотека плюс материнский капитал.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
                <div class="bank">
                    <div class="img">

                        <img src="/images/hanty.png" alt="">
                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 20%</span></p>
                        <p>Процентная ставка:<span>от 13.5%</span></p>
                        <a href="#" class="greybtn">От 5 до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub">Ипотека плюс материнский капитал.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
                <div class="bank">
                    <div class="img">
                        <img src="/images/sngb.png" alt="">
                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 10%</span></p>
                        <p>Процентная ставка:<span>от 13,5%</span></p>
                        <a href="#" class="greybtn">от 1 до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub">Акция с даром, с ремонтом.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
                <div class="bank">
                    <div class="img">
                        <img src="/images/uralsib.png" alt="">
                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 20%</span></p>
                        <p>Процентная ставка:<span>от 13,5%</span></p>
                        <a href="#" class="greybtn">от 3 до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub">Снижение % стаки для бюджетников.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>

            </div>
            <div class="row mar20">
                <div class="bank long">
                    <div class="img">
                        <img src="/images/raifa.png" alt="">

                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 15%</span></p>
                        <p>Процентная ставка:<span>от 12,25%</span></p>
                        <a href="#" class="greybtn">до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub2">Снижение % стаки для бюджетников.Работают с даром, включают ремонт, свои льготные условия по страховке, созаемщиками могут быть гражданские супруги.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
                <div class="bank long">
                    <div class="img">
                        <img src="/images/vtb.png" alt="">


                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 15%</span></p>
                        <p>Процентная ставка:<span>от 14%</span></p>
                        <a href="#" class="greybtn">от 1 до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub2">Акция с даром, с ремонтом.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
                <div class="bank long">
                    <div class="img">
                        <img src="/images/zaps.png" alt="">

                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 20%</span></p>
                        <p>Процентная ставка:<span>от 13,5%</span></p>
                        <a href="#" class="greybtn">до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub2">Снижение %-й ставки для зарплатников.</div>
                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
                <div class="bank long">
                    <div class="img">
                        <img src="/images/gazprom.png" alt="">


                    </div>
                    <div class="panel ">
                    <div class="front card">
                        <p>Первоначальный взнос:<span>от 20%</span></p>
                        <p>Процентная ставка:<span>от 13,5%</span></p>
                        <a href="#" class="greybtn">от 3 до 30 лет</a>
                        <h3>Особые условия:</h3>
                        <div class="sub2">До даты предоставления в Банк ГПБ (АО) документов, подтвержда-ющих государственную регистра-цию залога (ипотеки), процентная ставка увеличивается на 0,5 процентных пункта. <a href="#" data-text="Процентная ставка уменьшается на 0,5 % для заемщиков, получающих заработную плату не менее 3-х месяцев на банковские карты и счета Банка ГПБ. При рефинансировании ипотечного кредита другого банка, процентная ставка по кредиту увеличивается на 1 % (только по кредитам на приобретение квартир, на которые зарегистрировано право собственности) на период с момента выдачи кредита до регистрации ипотеки в пользу Банка">Подробнее</a>

                        </div>


                    </div>
                    <div class="back card">
                        <p class="phone"><a href="tel:73462398301">+7 (3462) 39-83-01</a></p>
                        <p class="time">пн-пт: 9:00-17:00 (без перерыва) </p>
                        <p class="site"><a href="http://www.sngb.ru">www.sngb.ru</a></p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row mar20">
                <div class="actual">
                    Предложение актуально на 01.06.2016. Подробности уточняйте у банков-партнёров.
                </div>
            </div>
        </div>
    </section>
    <section class="photos">
        <div class="container ">
            <div class="row">
                <h2>
            Фотогалерея</h2></div>
            <div class="photogalery">
                <div class="row ">
                    <a href="/big/2/sps6.jpg" title="">
                        <img src="images/21.png" alt="" class="img"> 
                    </a>
                    <a href="big/2/IMG_9002.jpg" title="">
                        <img src="images/22.png" alt="" title="" class="img">                        
                    </a>
                    <a href="big/2/IMG_9008.jpg" title="">
                        <img src="images/23.png" alt="" class="img">                       
                        
                    </a>
                    <a href="big/2/house.jpg" title="">
                        <img src="images/24.png" alt="" class="img">
                        
                    </a>
                    <a href="big/2/divan.jpg" title="">
                        <img src="images/25.png" alt="" class="img">                        
                    </a>
                </div>
                <div class="row">
                    <a href="/big/2/sps6.jpg" title="">
                        <img src="images/26.png" alt="" class="img">
                        
                    </a>
                    <a href="big/2/IMG_9002.jpg" title="">
                        <img src="images/27.png" alt="" title="" class="img">
                        
                    </a>
                    <a href="big/2/IMG_9008.jpg" title="">
                        <img src="images/28.png" alt="" class="img">
                        
                    </a>
                    <a href="big/2/house.jpg" title="">
                        <img src="images/29.png" alt="" class="img">
                        
                    </a>
                    <a href="big/2/divan.jpg" title="">
                        <img src="images/210.png" alt="" class="img">
                        
                    </a>
                </div>
                    <div id="lazy-container">
                        <div class="row">

                            <a href="/big/2/sps6.jpg" title="">
                                <img data-src="images/26.png" alt="" class="img lazy">

                            </a>
                            <a href="big/2/IMG_9002.jpg" title="">
                                <img data-src="images/27.png" alt="" title="" class="img lazy">

                            </a>
                            <a href="big/2/IMG_9008.jpg" title="">
                                <img data-src="images/28.png" alt="" class="img lazy">

                            </a>
                            <a href="big/2/house.jpg" title="">
                                <img data-src="images/29.png" alt="" class="img lazy">

                            </a>
                            <a href="big/2/divan.jpg" title="">
                                <img data-src="images/210.png" alt="" class="img lazy">

                            </a>
                        </div>
                        <div class="row">

                            <a href="/big/2/sps6.jpg" title="">
                                <img data-src="images/26.png" alt="" class="img lazy">

                            </a>
                            <a href="big/2/IMG_9002.jpg" title="">
                                <img data-src="images/27.png" alt="" title="" class="img lazy">

                            </a>
                            <a href="big/2/IMG_9008.jpg" title="">
                                <img data-src="images/28.png" alt="" class="img lazy">

                            </a>
                            <a href="big/2/house.jpg" title="">
                                <img data-src="images/29.png" alt="" class="img lazy">

                            </a>
                            <a href="big/2/divan.jpg" title="">
                                <img data-src="images/210.png" alt="" class="img lazy">

                            </a>
                        </div>
                    </div>

            </div>
            <div class="row">
                <a class="read__more loadall" href="#">Больше фотографий <i><img src="/images/5413.png"
               alt=""></i> </a>
            </div>
        </div>
    </section>
    <section>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=XN34YihoXdBm7qq5gJXwOmSLKYBuhh9V&width=100%&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script>
    </section>
    <section class="other">
        <div class="container">
            <div class="row">
                <h2>Посмотрите квартиру в других наших домах Сургута</h2>
            </div>
            <div class="row">
                <div class="urls">              
                    <a href="/">38 микрорайон  </a>
                    <a href="/{{env('3PAGE','melik-karamova-40,40(1)')}}">ул. Мелик-Карамаова 40, 40/1</a>
                </div>
            </div>
        </div>
    </section>
    <section class="fast fast2">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h2>Остались вопросы?</h2>
                    <p class="subhead">
                        Заполните форму и наши менеджеры обязательно свяжутся с вами.</p>
                </div>
                <div class="arrow"><img src="/images/A46-TrendArrow-Orange-GoUp.png" alt=""></div>
                <div class="form">
                    <form class="Forms" action="">
                        <input type="hidden" class="form__name--input" value="Форма в футере сайта">

                        <div class="baner__form--input">
                            <i class="baner__form--icon"><img src="/images/User.png"
                    alt=""></i>
                            <input required class="name name--input" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="baner__form--input">
                            <i class="baner__form--icon"><img src="/images/Iphone.png"
                    alt=""></i>
                            <input required class="name phone--input"  type="text" placeholder="+7 ">
                        </div>
                        <input type="submit" value="Заказать звонок менеджера" class="baner__form--submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <footer class="footer">
            <div class="footer__logo">
                <img src="images/logo.png" alt="Logo image">
            </div>
            <div class="footer__nav">
                <ul class="nav nav-tabs">
                    <li role="presentation" >
                        <a href="/"> 38 микрорайон</a>
                    </li>
                    <li role="presentation" class="active"><a href="/{{env('2PAGE','ivana-zaharova-12(1)')}}"><i class="footer__nav--geo">
                            <img src="images/Fill.png" alt="geo-icon"></i>ул. Ивана Захарова 12/1</a> </li>
                    <li role="presentation"><a href="/{{env('3PAGE','melik-karamova-40,40(1)')}}">ул. Мелик-Карамаова 40, 40/1</a></li>
                </ul>
            </div>
            <div class="footer__phone">
                <div class="footer__phone--number"><a href="tel:+73462600190">8 (3462) 600-190</a></div>
                <div class="footer__phone--label">Отдел продаж</div>
                <div class="footer__phone--address">Сургут, Тюменский тракт, 2/1</div>
            </div>
        </footer>
    </div>
    <section class="extra">
        <div class="container">
            <div class="row">
                <p>Информация, представленная на данном сайте, ни в каком виде не является публичной офертой. Подробнее об акциях и актуальных ценах узнавайте в отделе продаж компании</p>
            </div>
        </div>
    </section>

    <div id="small-dialog" class="zoom-anim-dialog mfp-hide small-dialog">
        <h2>Ожидайте звонка!</h2>
        <p>Вы уже оставляли заявку, ожидайте
            <br> звонка менеджера в ближайшее время.</p>
    </div>

    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide small-dialog">
        <h2>Спасибо! </h2>
        <p>Ваша заявка была принята, менеджер<br> перезвонит Вам в ближайшее время.</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.0/jquery.lazy.min.js"></script>


    <script src="{!! asset('index.js') !!}"></script>
</body>

</html>