<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="minimum-scale=1.0, target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    
    <title><?php wp_title(); ?></title>
    
    <link rel="icon" type="image/png" sizes="256x256" href="<?php echo get_template_directory_uri();?>/img/favicons/icon256.png">
    <link rel="icon" type="image/png" sizes="128x128" href="<?php echo get_template_directory_uri();?>/img/favicons/icon128.png">
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri();?>/img/favicons/icon64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/img/favicons/icon32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/img/favicons/icon16.png">
    <link rel="icon" type="image/svg+xml" sizes="any" href="<?php echo get_template_directory_uri();?>/images/icons/iconSVG.svg"> 

    <link rel="stylesheet" type="text/css" href="style.css">
    
    
    <?php wp_head();?> 

</head>

<body>

    <? include "modal-win.php";?>

    <div class="great-shadow"></div>
    <div id="wrapper">
        <header id="header">
            <div class="header__top">
                <div class="inner">
                    <a href="#" class="main-logo header__top__item">
                        <img src="img/main-logo.svg" class="spacer" alt="">
                    </a>
                    <a href="#" class="burger-btn">
                        <span></span>
                    </a>
                    <div class="header__top__item work-time">
                        Работаем <span>24</span>/<span>7</span>
                    </div>
                    <a href="#" class="header__top__item location">
                        <span class="marker"></span>Курск
                    </a>
                    <div class="header__top__item contact-box">
                        <span class="db desktop phone">8 (800)-000-00-00</span>
                        <a href="tel:88000000000" class="db mobil phone">8 (800)-000-00-00</a>
                        <a href="mailto:mail@mail.ru" class="email">mail@mail.ru</a>
                    </div>
                </div>
            </div>
            <div class="header__bottom">
                <div class="inner">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="#">Техосмотр</a></li>
                            <li><a href="#">Проверка карты</a></li>
                            <li><a href="#">ОСАГО</a></li>
                            <li><a href="#">Сотрудничество</a></li>
                            <li><a href="#">Отзывы</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>
        <main class="main">
            <section class="banner">
                <div class="inner clearfix">
                    <div class="text-container">
                        <h1>
                            Помощь в оформлении <br>ТЕХОСМОТРА
                        </h1>
                        <ul>
                            <li><span class="list-marker"></span>400 рублей</li>
                            <li><span class="list-marker"></span>10 минут</li>
                        </ul>
                        <a href="#" class="btn">Начать оформление</a>
                        <div class="decor-element">
                            <img src="img/car.png" class="spacer" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="order-section">
                <div class="inner2">
                    <h3 class="big-title">
                        Порядок оформления услуги
                    </h3>
                    <div class="order-greed">
                        <div class="order_wr">
                            <div class="order__item">
                                <span class="caption">
                                    Заполнение формы
                                </span>
                                <p>
                                    Заполните форму заявки с внесение всех необходимых данных
                                </p>
                                <div class="decor-element"></div>
                            </div>
                        </div>
                        <div class="order_wr">
                            <div class="order__item">
                                <span class="caption">
                                    Ответ на звонок
                                </span>
                                <p>
                                    Менеджер свяжется с Вами в течение 3-х минут
                                </p>
                                <div class="decor-element"></div>
                            </div>
                        </div>
                        <div class="order_wr">
                            <div class="order__item accent">
                                <span class="caption">
                                    Проверка в ЕАИСТО
                                </span>
                                <p>
                                    Проверьте наличие карты в базе
                                </p>
                                <div class="decor-element"></div>
                            </div>
                        </div>
                        <div class="order_wr">
                            <div class="order__item">
                                <span class="caption">
                                    Оплата
                                </span>
                                <p>
                                    Оплатите услугу любым удобным способом
                                </p>
                                <div class="decor-element"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="advantages-section">
                <div class="inner2">
                    <h2 class="big-title">Преимущества нашей услуги</h2>
                    <div class="advantages-box">
                        <div class="advantage-greed">
                            <div class="advantage_wr">
                                <div class="advantage">
                                    <div class="icon cheap_icon"></div>
                                    <span class="caption db">
                                        ДЁШЕВО
                                    </span>
                                    <p>
                                        Без посредников<br>
                                        Без дополнительных плат<br>
                                        Фиксированная стоимость 400 рублей
                                    </p>
                                </div>
                            </div>
                            <div class="advantage_wr">
                                <div class="advantage">
                                    <div class="icon fast_icon"></div>
                                    <span class="caption db">
                                        БЫСТРО
                                    </span>
                                    <p>
                                        Среднее время предоставления услуги – 8 минут
                                    </p>
                                </div>
                            </div>
                            <div class="advantage_wr">
                                <div class="advantage">
                                    <div class="icon reliable_icon"></div>
                                    <span class="caption db">
                                        НАДЕЖНО
                                    </span>
                                    <p>
                                        Все карты заносятся в базу ЕАИСТО аккредитованным оператором
                                    </p>
                                </div>
                            </div>
                            <div class="advantage_wr">
                                <div class="advantage">
                                    <div class="icon conveniently_icon"></div>
                                    <span class="caption db">
                                        УДОБНО
                                    </span>
                                    <p>
                                        Пользуйтесь нашим сервисом в любое время в любом месте без очередей с любого устройства
                                    </p>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </section>
            <section class="request-section">
                <div class="inner">
                    <h2 class="big-title">
                        Заполните заявку
                    </h2>
                    <form class="request-form">
                        <div class="control-panel">
                            <a href="" class="control-panel__item current">
                                <span class="db step">
                                    Шаг 1
                                </span>
                                <span class="db step-desk">
                                    Информация о владельце
                                </span>
                            </a>
                            <a href="" class="control-panel__item">
                                <span class="db step">
                                    Шаг 2
                                </span>
                                <span class="db step-desk">
                                    Информация о машине
                                </span>
                            </a>
                            <a href="" class="control-panel__item">
                                <span class="db step">
                                    Шаг 3
                                </span>
                                <span class="db step-desk">
                                    Информация о машине
                                </span>
                            </a>
                            <a href="" class="control-panel__item">
                                <span class="db step">
                                    Шаг 4
                                </span>
                                <span class="db step-desk">
                                    Контактные данные
                                </span>
                            </a>
                        </div>
                        <div class="input-panel">
                            <div class="input-panel__step active">
                                <div class="row">
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Фамилия</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Фамилия" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Имя</span>
                                            <input type="text" name="name" class="inputbox " placeholder="Имя" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label class="error">
                                            <span class="caption db">Отчество</span>
                                            <input type="text" name="patronymic" class="inputbox " placeholder="Отчество" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="#" class="btn">Далее</a>
                                </div>
                            </div>
                            <div class="input-panel__step ">
                                <div class="row">
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Шины марка</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Шины марка" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db">Пробег ТС в км</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Пробег" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <span class="caption db">Тип ТС</span>
                                        <select class="selectBox" name="type_ts">
                                            <option value="" selected>Обычный автомобиль</option>
                                            <option value="">Используеутся в такси</option>
                                            <option value="">Для обучения</option>
                                            <option value="">Для перевозки опасных грузов Для перевозки опасных грузов</option>
                                            <option value="">Мотоцикл</option>
                                        </select>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Тип топлива</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Тип топлива" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Гос. рег. номер</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Гос. рег. номер" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="#" class="btn">Назад</a>
                                    <a href="#" class="btn">Далее</a>
                                </div>
                            </div>
                            <div class="input-panel__step ">
                                <div class="free-row">
                                    <div class="input-panel__field-box input-panel__field-box__doc">
                                        <span class="caption db mandatory">Документ</span>
                                        <select class="selectBox" name="type_ts">
                                            <option value="СТС" selected>
                                                СТС
                                            </option>
                                            <option value="ПТС">
                                                ПТС
                                            </option>
                                            <option value="ЭПТС">
                                                ЭПТС
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-panel__field-box input-panel__field-box-series">
                                        <label>
                                            <span class="caption db mandatory">Серия</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="0000" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Номер</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="123456" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Выдано</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Выдано" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box input-panel__field-box-date">
                                        <label>
                                            <span class="caption db mandatory">Дата выдачи</span>
                                            <input type="text" id="field-date" name="lastname" class="inputbox " placeholder="дд.мм.гггг" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Марка</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Марка" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Модель</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Модель" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <span class="caption db mandatory">Категория ТС</span>
                                        <select class="selectBox" name="type_ts">
                                            <option value="А | L - Мототранспортные средства" selected>
                                                А | L - Мототранспортные средства
                                            </option>
                                            <option value="B | M1 - Легковые автомобили">
                                                B | M1 - Легковые автомобили
                                            </option>
                                            <option value="B | N1 - Грузовые автомобили до 3.5 тонн">
                                                B | N1 - Грузовые автомобили до 3.5 тонн
                                            </option>
                                            <option value="C | N2 - Грузовые автомобили 3.5 - 12 тонн">
                                                C | N2 - Грузовые автомобили 3.5 - 12 тонн
                                            </option>
                                            <option value="C | N3 - Грузовые автомобили свыше 12 тонн">
                                                C | N3 - Грузовые автомобили свыше 12 тонн
                                            </option>
                                            <option value="D | M2 - Автобусы до 5 тонн">
                                                D | M2 - Автобусы до 5 тонн
                                            </option>
                                            <option value="D | M3 - Автобусы свыше 5 тонн">
                                                D | M3 - Автобусы свыше 5 тонн
                                            </option>
                                            <option value="E | O1 - Прицепы до 0.75 тонн">
                                                E | O1 - Прицепы до 0.75 тонн
                                            </option>
                                            <option value="E | O2 - Прицепы 0.75 - 3.5 тонн">
                                                E | O2 - Прицепы 0.75 - 3.5 тонн
                                            </option>
                                            <option value="E | O3 - Прицепы 3.5 - 12 тонн">
                                                E | O3 - Прицепы 3.5 - 12 тонн
                                            </option>
                                            <option value="E | O4 - Прицепы свыше 12 тонн">
                                                E | O4 - Прицепы свыше 12 тонн
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Идентификационный номер VIN</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Идентификационный номер VIN" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Шасси №</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Шасси №" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Кузов №</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Кузов №" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Год выпуска ТС</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Год выпуска ТС" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Разрешенная масса, кг</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Разрешенная масса, кг" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Масса без нагрузки, кг</span>
                                            <input type="text" name="name" class="inputbox" placeholder="Масса без нагрузки, кг" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="#" class="btn">Назад</a>
                                    <a href="#" class="btn">Далее</a>
                                </div>
                            </div>
                            <div class="input-panel__step ">
                                <div class="row">
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Телефон</span>
                                            <input type="text" id="tel-field" name="lastname" class="inputbox " placeholder="+7 (999) 999-99-99" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">E-mail</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Выдано" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="input-panel__field-box">
                                        <label>
                                            <span class="caption db mandatory">Город</span>
                                            <input type="text" name="lastname" class="inputbox " placeholder="Выдано" autocomplete="off">
                                            <span class="err-message">
                                                Пожалуйста, заполните это поле.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="caption db">Ваш комментарий к заказу</span>
                                    <textarea name="message" class="textarea"></textarea>
                                    <span class="err-message">
                                        Пожалуйста, заполните это поле.
                                    </span>
                                </label>
                                <div class="consent-box">
                                    <label class="consent">
                                        <input type="checkbox">
                                        <span></span>
                                    </label>
                                    <span class="consent-mess">
                                        Даю согласие на обработку персональных данных и принимаю <a href="#">пользовательское соглашение.</a>
                                    </span>
                                </div>

                                <div class="btn-box">
                                    <a href="#" class="btn">Назад</a>
                                    <button type="submit" class="btn">Отправить</button>
                                </div>
                            </div>
                        </div>
                        <div class="request-form__footer">
                            <p>
                                Обращаем ваше внимание, оформить заявку на проведение техосмотра онлайн и оформление диагностической карты вы можете по данной форме в любое время. Данные автоматически будут отправлены в базу ГИБДД ЕАИСТО. Данная карта является легитимной для получения страхового полиса и полностью соответствует законодательству РФ.
                            </p>
                        </div>
                    </form>
                </div>
            </section>
            <section class="inform-section">
                <div class="inner">
                    <div class="inform-box">
                        <h2 class="big-title alLeft">
                            Необходимость и <span class="db"></span> сроки прохождения процедуры
                        </h2>
                        <p>
                            Легковые авто, с момента выпуска которых прошло не более 3-х лет не нуждаются в том, чтобы на них оформлялись диагностические карты. Однако, если у вас автомобиль превышает этот возраст, тогда периодичность прохождения технического осмотра будет производиться следующим образом:
                        </p>
                        <p>
                            Для транспортных средств, чей возраст составляет от 3 до 7 лет – не реже одного раза в 2 года.
                        </p>
                        <p>
                            Для авто, имеющих возраст более 7 лет – не реже одного раза в год.
                        </p>
                        <p>
                            Также уведомляем вас о том, что, когда у авто сменился собственник, не нужно еще раз оформлять новую карту не него. Карта будет действовать до момента, когда нужно ее поменять на новую, согласно требованиям законодательства.

                        </p>

                    </div>
                    <div class="decore-elem"></div>
                </div>
            </section>
            <section class="services-section">
                <div class="inner">
                    <div class="secrvices__box">
                        <div class="service">
                            <div class="service__icon shield-icon"></div>
                            <h3 class="service__caption title">
                                ОФОРМЛЕНИЕ ОСАГО
                            </h3>
                            <p class="service__desk">
                                Вы можете оформить <br>ОСАГО Онлайн на нашем сайте
                            </p>
                            <a href="#" class="btn upp">ОСАГО онлайн</a>
                        </div>
                        <div class="service">
                            <div class="service__icon wrench-icon"></div>
                            <h3 class="service__caption title">
                                ПРОВЕРКА КАРТЫ
                            </h3>
                            <p class="service__desk">
                                Вы можете убедиться в легитимности Вашей диагностической карты и проверить ее по базе ЕАИСТО ГИБДД
                            </p>
                            <a href="#" class="btn upp">ЕАИСТО</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="subfooter"></div>
        </main>
    </div>
    <footer id="footer">
        <div class="inner">
            <a href="#" class="footer-logo footer__item">
                <img src="img/footer-logo.svg" class="spacer" alt="">
            </a>
            <nav class="footer-menu footer__item">
                <ul>
                    <li>
                        <a href="#">Техосмотр</a>
                    </li>
                    <li>
                        <a href="#">Проверка карты</a>
                    </li>
                    <li>
                        <a href="#">ОСАГО</a>
                    </li>
                    <li>
                        <a href="#">Сотрудничество</a>
                    </li>
                    <li>
                        <a href="#">Отзывы</a>
                    </li>
                </ul>
            </nav>
            <div class="footer__item work-time">
                Работаем <span>24</span>/<span>7</span>
            </div>
            <div class="footer__item contact-box">
                <span class="db desktop phone">8 (800)-000-00-00</span>
                <a href="tel:88000000000" class="db mobil phone">8 (800)-000-00-00</a>
                <a href="mailto:mail@mail.ru" class="email">mail@mail.ru</a>
            </div>
        </div>
    </footer>

    <script src="js/html5.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.selectBox.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/script.js"></script>

</body>

</html>
