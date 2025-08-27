<?php
// Проверка авторизации уже выполнена в index.php
// Данные пользователя передаются в переменной $currentUser
?>

<section class="profile-section">
    <div class="container">
        <div class="profile-header">
            <div class="profile-avatar">
                <div class="avatar-placeholder">
                    <i class="fas fa-user"></i>
                </div>
                <button class="avatar-upload-btn">
                    <i class="fas fa-camera"></i>
                </button>
            </div>
            <div class="profile-info">
                <h1><?= htmlspecialchars($currentUser['full_name']) ?></h1>
                <p class="profile-username">@<?= htmlspecialchars($currentUser['username']) ?></p>
                <p class="profile-email"><?= htmlspecialchars($currentUser['email']) ?></p>
                <div class="profile-stats">
                    <div class="stat">
                        <span class="stat-value">0</span>
                        <span class="stat-label">Проектов</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value"><?= date('Y', strtotime($currentUser['created_at'])) ?></span>
                        <span class="stat-label">С нами с</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-content">
            <div class="profile-sidebar">
                <nav class="profile-nav">
                    <a href="#profile-info" class="nav-item active" data-tab="profile-info">
                        <i class="fas fa-user"></i>
                        Личная информация
                    </a>
                    <a href="#projects" class="nav-item" data-tab="projects">
                        <i class="fas fa-project-diagram"></i>
                        Мои проекты
                    </a>
                    <a href="#orders" class="nav-item" data-tab="orders">
                        <i class="fas fa-shopping-cart"></i>
                        Заказы
                    </a>
                    <a href="#settings" class="nav-item" data-tab="settings">
                        <i class="fas fa-cog"></i>
                        Настройки
                    </a>
                </nav>
            </div>

            <div class="profile-main">
                <!-- Личная информация -->
                <div id="profile-info" class="tab-content active">
                    <div class="card">
                        <div class="card-header">
                            <h2>Личная информация</h2>
                            <button class="btn btn-primary btn-sm" id="edit-profile-btn">
                                <i class="fas fa-edit"></i>
                                Редактировать
                            </button>
                        </div>
                        <div class="card-body">
                            <form id="profile-form" class="profile-form" method="POST">
                                <input type="hidden" name="action" value="update_profile">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="full_name">Полное имя</label>
                                        <input type="text" id="full_name" name="full_name" 
                                               value="<?= htmlspecialchars($currentUser['full_name']) ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Имя пользователя</label>
                                        <input type="text" id="username" name="username" 
                                               value="<?= htmlspecialchars($currentUser['username']) ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" 
                                               value="<?= htmlspecialchars($currentUser['email']) ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Телефон</label>
                                        <input type="tel" id="phone" name="phone" 
                                               value="<?= htmlspecialchars($currentUser['phone'] ?? '') ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company">Компания</label>
                                    <input type="text" id="company" name="company" 
                                           value="<?= htmlspecialchars($currentUser['company'] ?? '') ?>" disabled>
                                </div>
                                <div class="form-actions" style="display: none;">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i>
                                        Сохранить
                                    </button>
                                    <button type="button" class="btn btn-secondary" id="cancel-edit-btn">
                                        <i class="fas fa-times"></i>
                                        Отмена
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Проекты -->
                <div id="projects" class="tab-content">
                    <div class="card">
                        <div class="card-header">
                            <h2>Мои проекты</h2>
                        </div>
                        <div class="card-body">
                            <div class="empty-state">
                                <i class="fas fa-project-diagram"></i>
                                <h3>Пока нет проектов</h3>
                                <p>Когда вы начнете работу с нами, здесь появятся ваши проекты</p>
                                <a href="?page=contact" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    Начать проект
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Заказы -->
                <div id="orders" class="tab-content">
                    <div class="card">
                        <div class="card-header">
                            <h2>История заказов</h2>
                        </div>
                        <div class="card-body">
                            <div class="empty-state">
                                <i class="fas fa-shopping-cart"></i>
                                <h3>Пока нет заказов</h3>
                                <p>История ваших заказов будет отображаться здесь</p>
                                <a href="?page=services" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                    Посмотреть услуги
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Настройки -->
                <div id="settings" class="tab-content">
                    <div class="card">
                        <div class="card-header">
                            <h2>Настройки аккаунта</h2>
                        </div>
                        <div class="card-body">
                            <div class="settings-section">
                                <h3>Безопасность</h3>
                                <div class="setting-item">
                                    <div class="setting-info">
                                        <h4>Изменить пароль</h4>
                                        <p>Обновите пароль для защиты аккаунта</p>
                                    </div>
                                    <button class="btn btn-outline">
                                        <i class="fas fa-key"></i>
                                        Изменить
                                    </button>
                                </div>
                            </div>
                            
                            <div class="settings-section">
                                <h3>Уведомления</h3>
                                <div class="setting-item">
                                    <div class="setting-info">
                                        <h4>Email уведомления</h4>
                                        <p>Получать уведомления о новых проектах</p>
                                    </div>
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 