<section class="auth-section">
    <div class="container">
        <div class="auth-container">
            <div class="auth-form-wrapper">
                <div class="auth-header">
                    <h1>Регистрация</h1>
                    <p>Создайте аккаунт для доступа к персональным функциям</p>
                </div>
                
                <form method="POST" class="auth-form">
                    <input type="hidden" name="action" value="register">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="full_name">Полное имя</label>
                            <div class="input-wrapper">
                                <i class="fas fa-user"></i>
                                <input type="text" id="full_name" name="full_name" required placeholder="Иван Иванов">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Имя пользователя</label>
                            <div class="input-wrapper">
                                <i class="fas fa-at"></i>
                                <input type="text" id="username" name="username" required placeholder="username">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" required placeholder="example@email.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <div class="input-wrapper">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="password" name="password" required placeholder="Минимум 6 символов">
                                <button type="button" class="password-toggle" data-target="password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm_password">Подтвердите пароль</label>
                            <div class="input-wrapper">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Повторите пароль">
                                <button type="button" class="password-toggle" data-target="confirm_password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" required>
                            <span class="checkmark"></span>
                            Я согласен с <a href="#" target="_blank">условиями использования</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-full">
                        <i class="fas fa-user-plus"></i>
                        Зарегистрироваться
                    </button>
                </form>
                
                <div class="auth-footer">
                    <p>Уже есть аккаунт? <a href="?page=login">Войти</a></p>
                </div>
            </div>
            
            <div class="auth-info">
                <div class="auth-info-content">
                    <h2>Преимущества регистрации</h2>
                    <ul>
                        <li><i class="fas fa-rocket"></i> Быстрое оформление заказов</li>
                        <li><i class="fas fa-chart-line"></i> Отслеживание прогресса проектов</li>
                        <li><i class="fas fa-gift"></i> Эксклюзивные предложения</li>
                        <li><i class="fas fa-headset"></i> Персональная поддержка</li>
                    </ul>
                    
                    <div class="auth-contact">
                        <h3>Нужна помощь?</h3>
                        <p>Свяжитесь с нами по телефону <strong>+7 (XXX) XXX-XX-XX</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 