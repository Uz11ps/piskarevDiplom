<section class="auth-section">
    <div class="container">
        <div class="auth-container">
            <div class="auth-form-wrapper">
                <div class="auth-header">
                    <h1>Вход в систему</h1>
                    <p>Войдите в свой аккаунт для доступа к персональным функциям</p>
                </div>
                
                <form method="POST" class="auth-form">
                    <input type="hidden" name="action" value="login">
                    <div class="form-group">
                        <label for="login">Email или имя пользователя</label>
                        <div class="input-wrapper">
                            <i class="fas fa-user"></i>
                            <input type="text" id="login" name="login" required placeholder="Введите email или логин">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <div class="input-wrapper">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" required placeholder="Введите пароль">
                            <button type="button" class="password-toggle" data-target="password">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="form-options">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="remember">
                            <span class="checkmark"></span>
                            Запомнить меня
                        </label>
                        <a href="#" class="forgot-link">Забыли пароль?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-full">
                        <i class="fas fa-sign-in-alt"></i>
                        Войти
                    </button>
                </form>
                
                <div class="auth-footer">
                    <p>Нет аккаунта? <a href="?page=register">Зарегистрируйтесь</a></p>
                </div>
            </div>
            
            <div class="auth-info">
                <div class="auth-info-content">
                    <h2>Добро пожаловать в ТВ-ИНЖИНИРИНГ</h2>
                    <ul>
                        <li><i class="fas fa-check"></i> Отслеживайте статус ваших заказов</li>
                        <li><i class="fas fa-check"></i> Получайте персональные предложения</li>
                        <li><i class="fas fa-check"></i> Доступ к истории проектов</li>
                        <li><i class="fas fa-check"></i> Приоритетная техподдержка</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> 