<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <section class="user">
            <div class="user_options-container">
                <div class="user_options-text">
                    <div class="user_options-unregistered">
                        <h2 class="user_unregistered-title">Вы не зарегистрированы?</h2>
                        <p class="user_unregistered-text">Заполните форму для регистрации</p>
                        <button class="user_unregistered-signup" id="signup-button">Зарегистрироваться</button>
                    </div>

                    <div class="user_options-registered">
                        <h2 class="user_registered-title">Уже зарегистрированы</h2>
                        <p class="user_registered-text">Заполните форму для входа в личный кабинет</p>
                        <button class="user_registered-login" id="login-button">Войти</button>
                    </div>
                </div>

                <div class="user_options-forms" id="user_options-forms">
                    <div class="user_forms-login">
                        <h2 class="forms_title">Войти</h2>
                        <form action="/account/auth" class="forms_form">
                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    <input name="login" type="text" placeholder="логин" class="forms_field-input" required autofocus />
                                </div>
                                <div class="forms_field">
                                    <input name="pwd" type="password" placeholder="пароль" class="forms_field-input" required />
                                </div>
                            </fieldset>
                            <div class="forms_buttons">
                                <button type="button" class="forms_buttons-forgot">Забыли пароль?</button>
                                <input type="submit" value="Log In" class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                    <div class="user_forms-signup">
                        <h2 class="forms_title">Зарегистрироваться</h2>
                        <form action="/account/registration" class="forms_form">
                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    <input name="login" type="text" placeholder="логин" class="forms_field-input" required />
                                </div>
                                <div class="forms_field">
                                    <input name="email" type="email" placeholder="e-mail" class="forms_field-input" required />
                                </div>
                                <div class="forms_field">
                                    <input name="pwd" type="password" placeholder="пароль" class="forms_field-input" required />
                                </div>
                            </fieldset>
                            <div class="forms_buttons">
                                <input type="submit" value="Sign up" class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

