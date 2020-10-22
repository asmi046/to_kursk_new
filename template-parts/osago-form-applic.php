<section id = "request-section" class="request-section">
    <div class="inner">
        <h2 class="big-title">
            Заполните заявку
        </h2>
        <form id="request-form-osago" class="request-form request-form-to ">
            <div class="control-panel">
                <a href="" id = "control-panel_1" class="control-panel__item current">
                    <span class="db step">
                        Шаг 1
                    </span>
                    <span class="db step-desk">
                        Информация об автомобиле
                    </span>
                </a>
                <a href="" id = "control-panel_2" class="control-panel__item">
                    <span class="db step">
                        Шаг 2
                    </span>
                    <span class="db step-desk">
                        Период и регион, собственник, страхователь
                    </span>
                </a>
                <a href="" id = "control-panel_3" class="control-panel__item">
                    <span class="db step">
                        Шаг 3
                    </span>
                    <span class="db step-desk">
                        Водители
                    </span>
                </a>
                <a href="" id = "control-panel_4" class="control-panel__item">
                    <span class="db step">
                        Шаг 4
                    </span>
                    <span class="db step-desk">
                        Контактные данные
                    </span>
                </a>
            </div>
            <div class="input-panel">
                <div id = "input-panel__step_1" class="input-panel__step ">
                    <div class="row">
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db mandatory">Марка</span>
                                <input type="text" name="doc_marka" class="inputbox doc_marka" placeholder="Марка" autocomplete="off">
                                <span class="err-message">
                                    Пожалуйста, заполните это поле.
                                </span>
                            </label>
                        </div>
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db mandatory">Модель</span>
                                <input type="text" name="doc_model" class="inputbox doc_model" placeholder="Модель" autocomplete="off">
                                <span class="err-message">
                                    Пожалуйста, заполните это поле.
                                </span>
                            </label>
                        </div>
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db mandatory">Год выпуска</span>
                                <input type="number" name="doc_godvip" class="inputbox doc_godvip" placeholder="Год выпуска" autocomplete="off">
                                <span class="err-message">
                                    Пожалуйста, заполните это поле.
                                </span>
                            </label>
                        </div>
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db mandatory">Мощность двигателя</span>
                                <input type="text" name="doc_model" class="inputbox doc_model" placeholder="Мощность двигателя" autocomplete="off">
                                <span class="err-message">
                                    Пожалуйста, заполните это поле.
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="btn-box">
                        <a href="#" class="btn" id = "toStep2">Далее</a>
                    </div>
                </div>
                <div id = "input-panel__step_2" class="input-panel__step active">
                    <div class="row">
                        <div class="input-panel__field-box input-panel__field-box-date input-panel__dt-tb2">
                            <label>
                                <span class="caption db mandatory">Дата начала</span>
                                <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                                <span class="err-message">
                                    Пожалуйста, заполните это поле.
                                </span>
                            </label>
                        </div>
                        <div class="input-panel__field-box input-panel__city">
                            <label>
                                <span class="caption db mandatory">Город прописки собственника автомобиля</span>
                                <input type="text" name="pers_city" class="inputbox pers_city" placeholder="Город прописки собственника автомобиля" autocomplete="off">
                                <span class="err-message">
                                    Пожалуйста, заполните это поле.
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="input-panel__title">
                        <h2>Собственник</h2>
                    </div>
                    <div class="row">
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db mandatory">Фамилия</span>
                                <input type="text" name="lastname" class="inputbox lastname" placeholder="Фамилия" autocomplete="off">
                                <span class="err-message">
                                    Поле заполнено некорректно.
                                </span>
                            </label>
                        </div>
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db mandatory">Имя</span>
                                <input type="text" name="name" class="inputbox name" placeholder="Имя" autocomplete="off">
                                <span class="err-message">
                                    Поле заполнено некорректно.
                                </span>
                            </label>
                        </div>
                        <div class="input-panel__field-box">
                            <label>
                                <span class="caption db">*Отчество</span>
                                <input type="text" name="patronymic" class="inputbox patronymic" placeholder="Отчество" autocomplete="off">
                                <span class="err-message">
                                   Поле заполнено некорректно.
                               </span>
                           </label>
                       </div>
                       <div class="input-panel__field-box input-panel__field-box-date">
                        <label id="input-panel__data-os">
                            <span class="caption db mandatory">Дата рождения</span>
                            <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                            <span class="err-message">
                                Пожалуйста, заполните это поле.
                            </span>
                        </label>
                    </div>
                    <div class="input-panel__field-box">
                        <label>
                            <span class="caption db mandatory">Серия и номер ВУ</span>
                            <input type="text" name="doc_number" class="inputbox doc_number" placeholder="123456" autocomplete="off">
                            <span class="err-message">
                                Пожалуйста, заполните это поле.
                            </span>
                        </label>
                    </div>
                    <div class="input-panel__field-box input-panel__field-box-date">
                        <label id="input-panel__data-os">
                            <span class="caption db mandatory">Дата начала стажа</span>
                            <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                            <span class="err-message">
                                Пожалуйста, заполните это поле.
                            </span>
                        </label>
                    </div>
                </div>
                <div class="input-panel__title">
                    <h2>Страхователь</h2>
                </div>
                <div class="row">
                    <div class="input-panel__field-box">
                        <label>
                            <span class="caption db mandatory">Фамилия</span>
                            <input type="text" name="lastname" class="inputbox lastname" placeholder="Фамилия" autocomplete="off">
                            <span class="err-message">
                                Поле заполнено некорректно.
                            </span>
                        </label>
                    </div>
                    <div class="input-panel__field-box">
                        <label>
                            <span class="caption db mandatory">Имя</span>
                            <input type="text" name="name" class="inputbox name" placeholder="Имя" autocomplete="off">
                            <span class="err-message">
                                Поле заполнено некорректно.
                            </span>
                        </label>
                    </div>
                    <div class="input-panel__field-box">
                        <label>
                            <span class="caption db">*Отчество</span>
                            <input type="text" name="patronymic" class="inputbox patronymic" placeholder="Отчество" autocomplete="off">
                            <span class="err-message">
                               Поле заполнено некорректно.
                           </span>
                       </label>
                   </div>
                   <div class="input-panel__field-box input-panel__field-box-date">
                    <label id="input-panel__data-os">
                        <span class="caption db mandatory">Дата рождения</span>
                        <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                        <span class="err-message">
                            Пожалуйста, заполните это поле.
                        </span>
                    </label>
                </div>
                <div class="input-panel__field-box">
                    <label>
                        <span class="caption db mandatory">Серия и номер ВУ</span>
                        <input type="text" name="doc_number" class="inputbox doc_number" placeholder="123456" autocomplete="off">
                        <span class="err-message">
                            Пожалуйста, заполните это поле.
                        </span>
                    </label>
                </div>
                <div class="input-panel__field-box input-panel__field-box-date">
                    <label id="input-panel__data-os">
                        <span class="caption db mandatory">Дата начала стажа</span>
                        <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                        <span class="err-message">
                            Пожалуйста, заполните это поле.
                        </span>
                    </label>
                </div>
            </div>
            <div class="btn-box">
                <a href="#" class="btn" id = "bacStep1">Назад</a>
                <a href="#" class="btn" id = "toStep3">Далее</a>
            </div>
        </div>
        <div id = "input-panel__step_3" class="input-panel__step ">
            <div class="input-panel__title">
                <h2>Водитель 1</h2>
            </div>
            <div class="row">
                <div class="input-panel__field-box">
                    <label>
                        <span class="caption db mandatory">Фамилия</span>
                        <input type="text" name="lastname" class="inputbox lastname" placeholder="Фамилия" autocomplete="off">
                        <span class="err-message">
                            Поле заполнено некорректно.
                        </span>
                    </label>
                </div>
                <div class="input-panel__field-box">
                    <label>
                        <span class="caption db mandatory">Имя</span>
                        <input type="text" name="name" class="inputbox name" placeholder="Имя" autocomplete="off">
                        <span class="err-message">
                            Поле заполнено некорректно.
                        </span>
                    </label>
                </div>
                <div class="input-panel__field-box">
                    <label>
                        <span class="caption db">*Отчество</span>
                        <input type="text" name="patronymic" class="inputbox patronymic" placeholder="Отчество" autocomplete="off">
                        <span class="err-message">
                           Поле заполнено некорректно.
                       </span>
                   </label>
               </div>
               <div class="input-panel__field-box input-panel__field-box-date">
                <label id="input-panel__data-os">
                    <span class="caption db mandatory">Дата рождения</span>
                    <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                    <span class="err-message">
                        Пожалуйста, заполните это поле.
                    </span>
                </label>
            </div>
            <div class="input-panel__field-box">
                <label>
                    <span class="caption db mandatory">Серия и номер ВУ</span>
                    <input type="text" name="doc_number" class="inputbox doc_number" placeholder="123456" autocomplete="off">
                    <span class="err-message">
                        Пожалуйста, заполните это поле.
                    </span>
                </label>
            </div>
            <div class="input-panel__field-box input-panel__field-box-date">
                <label id="input-panel__data-os">
                    <span class="caption db mandatory">Дата начала стажа</span>
                    <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                    <span class="err-message">
                        Пожалуйста, заполните это поле.
                    </span>
                </label>
            </div>
        </div>
        <div class="input-panel__title">
            <h2>Водитель 2</h2>
        </div>
        <div class="row">
            <div class="input-panel__field-box">
                <label>
                    <span class="caption db mandatory">Фамилия</span>
                    <input type="text" name="lastname" class="inputbox lastname" placeholder="Фамилия" autocomplete="off">
                    <span class="err-message">
                        Поле заполнено некорректно.
                    </span>
                </label>
            </div>
            <div class="input-panel__field-box">
                <label>
                    <span class="caption db mandatory">Имя</span>
                    <input type="text" name="name" class="inputbox name" placeholder="Имя" autocomplete="off">
                    <span class="err-message">
                        Поле заполнено некорректно.
                    </span>
                </label>
            </div>
            <div class="input-panel__field-box">
                <label>
                    <span class="caption db">*Отчество</span>
                    <input type="text" name="patronymic" class="inputbox patronymic" placeholder="Отчество" autocomplete="off">
                    <span class="err-message">
                       Поле заполнено некорректно.
                   </span>
               </label>
           </div>
           <div class="input-panel__field-box input-panel__field-box-date">
            <label id="input-panel__data-os">
                <span class="caption db mandatory">Дата рождения</span>
                <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                <span class="err-message">
                    Пожалуйста, заполните это поле.
                </span>
            </label>
        </div>
        <div class="input-panel__field-box">
            <label>
                <span class="caption db mandatory">Серия и номер ВУ</span>
                <input type="text" name="doc_number" class="inputbox doc_number" placeholder="123456" autocomplete="off">
                <span class="err-message">
                    Пожалуйста, заполните это поле.
                </span>
            </label>
        </div>
        <div class="input-panel__field-box input-panel__field-box-date">
            <label id="input-panel__data-os">
                <span class="caption db mandatory">Дата начала стажа</span>
                <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
                <span class="err-message">
                    Пожалуйста, заполните это поле.
                </span>
            </label>
        </div>
    </div>
    <div class="input-panel__title">
        <h2>Водитель 3</h2>
    </div>
    <div class="row">
        <div class="input-panel__field-box">
            <label>
                <span class="caption db mandatory">Фамилия</span>
                <input type="text" name="lastname" class="inputbox lastname" placeholder="Фамилия" autocomplete="off">
                <span class="err-message">
                    Поле заполнено некорректно.
                </span>
            </label>
        </div>
        <div class="input-panel__field-box">
            <label>
                <span class="caption db mandatory">Имя</span>
                <input type="text" name="name" class="inputbox name" placeholder="Имя" autocomplete="off">
                <span class="err-message">
                    Поле заполнено некорректно.
                </span>
            </label>
        </div>
        <div class="input-panel__field-box">
            <label>
                <span class="caption db">*Отчество</span>
                <input type="text" name="patronymic" class="inputbox patronymic" placeholder="Отчество" autocomplete="off">
                <span class="err-message">
                   Поле заполнено некорректно.
               </span>
           </label>
       </div>
       <div class="input-panel__field-box input-panel__field-box-date">
        <label id="input-panel__data-os">
            <span class="caption db mandatory">Дата рождения</span>
            <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
            <span class="err-message">
                Пожалуйста, заполните это поле.
            </span>
        </label>
    </div>
    <div class="input-panel__field-box">
        <label>
            <span class="caption db mandatory">Серия и номер ВУ</span>
            <input type="text" name="doc_number" class="inputbox doc_number" placeholder="123456" autocomplete="off">
            <span class="err-message">
                Пожалуйста, заполните это поле.
            </span>
        </label>
    </div>
    <div class="input-panel__field-box input-panel__field-box-date">
        <label id="input-panel__data-os">
            <span class="caption db mandatory">Дата начала стажа</span>
            <input type="text" id="field-date" name="doc_data_v" class="inputbox doc_data_v" placeholder="дд.мм.гггг" autocomplete="off">
            <span class="err-message">
                Пожалуйста, заполните это поле.
            </span>
        </label>
    </div>
</div>
<div class="btn-box">
    <a href="#" class="btn" id = "bacStep2">Назад</a>
    <a href="#" class="btn" id = "toStep4">Далее</a>
</div>
</div>
<div id = "input-panel__step_4" class="input-panel__step ">
    <div class="row">
        <div class="input-panel__field-box">
            <label>
                <span class="caption db mandatory">Телефон</span>
                <input type="tel" id="pers_tel" name="pers_tel" class="inputbox pers_tel" placeholder="+7 (999) 999-99-99" autocomplete="off">
                <span class="err-message">
                    Пожалуйста, заполните это поле.
                </span>
            </label>
        </div>
        <div class="input-panel__field-box">
            <label>
                <span class="caption db mandatory">E-mail</span>
                <input type="email" name="pers_mail" class="inputbox pers_mail" placeholder="введите e-mail" autocomplete="off">
                <span class="err-message">
                    Пожалуйста, заполните это поле.
                </span>
            </label>
        </div>
        <div class="input-panel__field-box">
            <label>
                <span class="caption db mandatory">Город</span>
                <input type="text" name="pers_city" class="inputbox pers_city" placeholder="Введите город" autocomplete="off">
                <span class="err-message">
                    Пожалуйста, заполните это поле.
                </span>
            </label>
        </div>
    </div>
    <label>
        <span class="caption db">Ваш комментарий к заказу</span>
        <textarea name="pers_message" class = "pers_message textarea" class="textarea"></textarea>
        <span class="err-message">
            Пожалуйста, заполните это поле.
        </span>
    </label>
    <div class="consent-box">
        <label class="consent">
            <input class = "policy_checed" type="checkbox">
            <span></span>
        </label>
        <span class="consent-mess">
            Даю согласие на обработку персональных данных и принимаю <a href="#">пользовательское соглашение.</a>
        </span>
    </div>

    <div class="btn-box">
        <a href="#" class="btn"  id = "bacStep3" >Назад</a>
        <button type="submit" class="btn" id = "sendTOform" >Отправить</button>
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

