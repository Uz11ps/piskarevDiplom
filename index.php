<?php
// Включаем буферизацию вывода для предотвращения проблем с заголовками
ob_start();

// Запускаем сессию в самом начале, до любого вывода
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'classes/Session.php';
require_once 'classes/User.php';

// Инициализация
$user = new User();
$currentPage = $_GET['page'] ?? 'home';
$error = '';
$success = '';

// Обработка форм без вывода
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'login':
                $login = trim($_POST['login'] ?? '');
                $password = $_POST['password'] ?? '';
                
                if (empty($login) || empty($password)) {
                    $error = 'Заполните все поля';
                } else {
                    $userData = $user->login($login, $password);
                    if ($userData) {
                        Session::setUser($userData);
                        header('Location: ?page=profile');
                        exit;
                    } else {
                        $error = 'Неверный логин или пароль';
                    }
                }
                break;
                
            case 'register':
                $username = trim($_POST['username'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $password = $_POST['password'] ?? '';
                $fullName = trim($_POST['full_name'] ?? '');
                
                if (empty($username) || empty($email) || empty($password) || empty($fullName)) {
                    $error = 'Заполните все поля';
                } elseif (strlen($password) < 6) {
                    $error = 'Пароль должен содержать минимум 6 символов';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error = 'Неверный формат email';
                } else {
                    $userId = $user->register($username, $email, $password, $fullName);
                    if ($userId) {
                        $success = 'Регистрация успешна! Теперь вы можете войти в систему.';
                        $currentPage = 'login';
                    } else {
                        $error = 'Пользователь с таким email или логином уже существует';
                    }
                }
                break;
                
            case 'update_profile':
                if (!Session::isLoggedIn()) {
                    header('Location: ?page=login');
                    exit;
                }
                
                $updateData = [
                    'username' => trim($_POST['username'] ?? ''),
                    'email' => trim($_POST['email'] ?? ''),
                    'full_name' => trim($_POST['full_name'] ?? ''),
                    'phone' => trim($_POST['phone'] ?? ''),
                    'company' => trim($_POST['company'] ?? '')
                ];
                
                if ($user->updateProfile(Session::getUserId(), $updateData)) {
                    $success = 'Профиль обновлен';
                } else {
                    $error = 'Ошибка обновления профиля';
                }
                break;
                
            case 'contact':
                $name = trim($_POST['name'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $message = trim($_POST['message'] ?? '');
                
                if (!empty($name) && !empty($email) && !empty($message)) {
                    $success = 'Сообщение отправлено! Мы свяжемся с вами в ближайшее время.';
                } else {
                    $error = 'Заполните все поля';
                }
                break;
        }
    }
}

// Обработка выхода
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    Session::destroy();
    header('Location: /');
    exit;
}

// Простой роутинг
$allowedPages = ['home', 'about', 'services', 'portfolio', 'contact', 'login', 'register', 'profile'];
if (!in_array($currentPage, $allowedPages)) {
    $currentPage = 'home';
}

// Защита страницы профиля
if ($currentPage === 'profile' && !Session::isLoggedIn()) {
    header('Location: ?page=login');
    exit;
}

// Получение данных пользователя для профиля
$currentUser = null;
if (Session::isLoggedIn()) {
    $currentUser = $user->getUserById(Session::getUserId());
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        $titles = [
            'home' => 'TV-ENGINEERING - Главная',
            'about' => 'О компании - TV-ENGINEERING',
            'services' => 'Услуги - TV-ENGINEERING',
            'portfolio' => 'Портфолио - TV-ENGINEERING',
            'contact' => 'Контакты - TV-ENGINEERING',
            'login' => 'Вход - TV-ENGINEERING',
            'register' => 'Регистрация - TV-ENGINEERING',
            'profile' => 'Профиль - TV-ENGINEERING'
        ];
        echo $titles[$currentPage] ?? 'TV-ENGINEERING';
    ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Навигация -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="/">
                    <i class="fas fa-tv"></i>
                    TV-ENGINEERING
                </a>
            </div>
            
            <div class="nav-menu" id="nav-menu">
                <a href="?page=home" class="nav-link <?php echo $currentPage === 'home' ? 'active' : ''; ?>">Главная</a>
                <a href="?page=about" class="nav-link <?php echo $currentPage === 'about' ? 'active' : ''; ?>">О нас</a>
                <a href="?page=services" class="nav-link <?php echo $currentPage === 'services' ? 'active' : ''; ?>">Услуги</a>
                <a href="?page=portfolio" class="nav-link <?php echo $currentPage === 'portfolio' ? 'active' : ''; ?>">Портфолио</a>
                <a href="?page=contact" class="nav-link <?php echo $currentPage === 'contact' ? 'active' : ''; ?>">Контакты</a>
                
                <?php if (Session::isLoggedIn()): ?>
                    <a href="?page=profile" class="nav-link <?php echo $currentPage === 'profile' ? 'active' : ''; ?>">
                        <i class="fas fa-user"></i> <?php echo htmlspecialchars(Session::getUsername()); ?>
                    </a>
                    <a href="?action=logout" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Выход
                    </a>
                <?php else: ?>
                    <a href="?page=login" class="nav-link <?php echo $currentPage === 'login' ? 'active' : ''; ?>">Вход</a>
                    <a href="?page=register" class="nav-link <?php echo $currentPage === 'register' ? 'active' : ''; ?>">Регистрация</a>
                <?php endif; ?>
            </div>
            
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Главный контент -->
    <main>
        <?php if ($error): ?>
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>
        
        <?php
        // Подключение страниц
        $pageFile = "pages/{$currentPage}.php";
        if (file_exists($pageFile)) {
            include $pageFile;
        } else {
            include 'pages/home.php';
        }
        ?>
    </main>

    <!-- Футер -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>TV-ENGINEERING</h3>
                    <p>Ваш надежный партнер в мире телекоммуникаций и медиа-технологий</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="?page=services">Проектирование</a></li>
                        <li><a href="?page=services">Монтаж оборудования</a></li>
                        <li><a href="?page=services">Техническое обслуживание</a></li>
                        <li><a href="?page=services">Консультации</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Контакты</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> +7 (495) 123-45-67</li>
                        <li><i class="fas fa-envelope"></i> info@tv-engineering.ru</li>
                        <li><i class="fas fa-map-marker-alt"></i> Москва, ул. Примерная, д. 123</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 TV-ENGINEERING. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
<?php
// Очищаем буфер вывода
ob_end_flush();
?> 