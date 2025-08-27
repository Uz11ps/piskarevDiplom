# 🏢 TV-ENGINEERING - Корпоративный веб-сайт

<div align="center">

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

**Современный корпоративный веб-сайт для компании ООО "ТВ-ИНЖИНИРИНГ"**

[🚀 Демо](#) • [📖 Документация](#документация) • [🛠️ Установка](#установка) • [📞 Поддержка](#поддержка)

</div>

---

## 📋 Описание проекта

**TV-ENGINEERING** - это современный корпоративный веб-сайт для инженерной компании, специализирующейся на промышленном строительстве, проектировании и техническом обслуживании. Сайт включает в себя полнофункциональную систему управления пользователями, красивый адаптивный дизайн и мощную административную панель.

### 🎯 Основные цели проекта:
- Создание профессионального онлайн-присутствия компании
- Привлечение новых клиентов через интернет
- Автоматизация процесса получения заявок
- Управление клиентской базой

---

## ✨ Особенности

### 🎨 **Дизайн и UX**
- 🎭 **Современный дизайн** с анимациями и плавными переходами
- 📱 **Полностью адаптивная верстка** для всех устройств
- 🌙 **Темная/светлая тема** (планируется)
- ⚡ **Быстрая загрузка** и оптимизированная производительность

### 🔐 **Система авторизации**
- 👤 **Регистрация и авторизация** пользователей
- 🛡️ **Безопасное хэширование паролей** (PHP password_hash)
- 👥 **Управление профилем** пользователя
- 🔒 **Защита от XSS и SQL-инъекций**

### 📊 **Функциональность**
- 📝 **Контактная форма** для заявок
- 📈 **Портфолио проектов** (в разработке)
- 📰 **Система новостей** (в разработке)
- 🔧 **Административная панель** (в разработке)

---

## 🛠️ Технологический стек

<table>
<tr>
<td>

**Backend**
- PHP 7.4+
- MySQL 5.7+
- PDO для работы с БД
- Сессии для авторизации

</td>
<td>

**Frontend**
- HTML5 семантическая разметка
- CSS3 с Grid и Flexbox
- Vanilla JavaScript ES6+
- Font Awesome 6 иконки

</td>
</tr>
</table>

### 📚 **Архитектурные решения:**
- **MVC-подобная архитектура** с разделением логики
- **Объектно-ориентированное программирование** (классы User, Session, Database)
- **Подготовленные запросы** для безопасности БД
- **Модульная структура** для легкого расширения

---

## 📋 Системные требования

| Компонент | Минимальная версия | Рекомендуемая |
|-----------|-------------------|---------------|
| **PHP** | 7.4 | 8.0+ |
| **MySQL** | 5.7 | 8.0+ |
| **Веб-сервер** | Apache 2.4 / Nginx 1.18 | Apache 2.4+ / Nginx 1.20+ |
| **Расширения PHP** | PDO, PDO_MySQL, session | + mbstring, openssl |

---

## 🚀 Установка

### 📥 **Шаг 1: Загрузка проекта**

```bash
# Клонирование репозитория
git clone https://github.com/Uz11ps/piskarevDiplom.git
cd piskarevDiplom

# Или скачать ZIP архив и распаковать
```

### 🗄️ **Шаг 2: Настройка базы данных**

1. Создайте базу данных MySQL:
```sql
CREATE DATABASE tv_engineering CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Скопируйте файл конфигурации:
```bash
cp config/database.example.php config/database.php
```

3. Отредактируйте `config/database.php`:
```php
private $host = 'localhost';
private $username = 'your_username';      // Ваш логин MySQL
private $password = 'your_password';      // Ваш пароль MySQL
private $database = 'tv_engineering';     // Имя созданной БД
```

### ⚙️ **Шаг 3: Установка системы**

1. Откройте в браузере:
```
http://your-domain.com/install.php
```

2. Следуйте инструкциям установщика

3. **ВАЖНО:** Удалите файл `install.php` после установки:
```bash
rm install.php
```

### 🔐 **Шаг 4: Первый вход**

**Данные администратора по умолчанию:**
- **Email:** `admin@tv-engineering.ru`
- **Пароль:** `admin123`

> ⚠️ **ОБЯЗАТЕЛЬНО смените пароль** после первого входа!

---

## 📁 Структура проекта

```
📦 PiskarevDiplom/
├── 📂 assets/                    # Статические ресурсы
│   ├── 📂 css/
│   │   └── 📄 style.css         # Основные стили
│   └── 📂 js/
│       └── 📄 script.js         # JavaScript функции
├── 📂 classes/                   # PHP классы
│   ├── 📄 User.php              # Управление пользователями
│   ├── 📄 Session.php           # Управление сессиями
│   └── 📄 Database.php          # Работа с БД
├── 📂 config/                    # Конфигурация
│   ├── 📄 database.php          # Настройки БД (игнорируется Git)
│   └── 📄 database.example.php  # Шаблон настроек БД
├── 📂 pages/                     # Страницы сайта
│   ├── 📄 home.php              # Главная страница
│   ├── 📄 about.php             # О компании
│   ├── 📄 services.php          # Услуги
│   ├── 📄 portfolio.php         # Портфолио
│   ├── 📄 contact.php           # Контакты
│   ├── 📄 login.php             # Авторизация
│   ├── 📄 register.php          # Регистрация
│   └── 📄 profile.php           # Профиль пользователя
├── 📄 index.php                 # Главный файл с роутингом
├── 📄 install.php               # Установщик (удалить после установки)
├── 📄 .gitignore               # Игнорируемые Git файлы
├── 📄 README.md                # Документация
└── 📄 TROUBLESHOOTING.md       # Решение проблем
```

---

## 🌐 Страницы сайта

### 🌍 **Публичные страницы**
| Страница | URL | Описание |
|----------|-----|----------|
| 🏠 **Главная** | `/` | Презентация компании, услуги, статистика |
| ℹ️ **О компании** | `/?page=about` | История, команда, достижения |
| 🛠️ **Услуги** | `/?page=services` | Подробное описание услуг |
| 🎨 **Портфолио** | `/?page=portfolio` | Выполненные проекты |
| 📞 **Контакты** | `/?page=contact` | Контактная информация и форма |

### 🔒 **Система авторизации**
| Страница | URL | Описание |
|----------|-----|----------|
| 🔑 **Вход** | `/?page=login` | Авторизация пользователей |
| 📝 **Регистрация** | `/?page=register` | Создание нового аккаунта |
| 👤 **Профиль** | `/?page=profile` | Личный кабинет пользователя |

---

## 💾 База данных

### 📊 **Схема БД**

```sql
-- Пользователи системы
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    company VARCHAR(100),
    role ENUM('user', 'admin') DEFAULT 'user',
    avatar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL,
    is_active BOOLEAN DEFAULT TRUE
);

-- Заявки с сайта
CREATE TABLE contact_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    company VARCHAR(100),
    service VARCHAR(50),
    message TEXT NOT NULL,
    status ENUM('new', 'in_progress', 'completed') DEFAULT 'new',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Портфолио проектов
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    description TEXT,
    category ENUM('design', 'construction', 'maintenance') NOT NULL,
    status ENUM('planning', 'in_progress', 'completed') DEFAULT 'planning',
    client_id INT,
    start_date DATE,
    end_date DATE,
    budget DECIMAL(15,2),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (client_id) REFERENCES users(id) ON DELETE SET NULL
);

-- Новости/блог
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    slug VARCHAR(200) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    excerpt TEXT,
    image VARCHAR(255),
    author_id INT,
    status ENUM('draft', 'published') DEFAULT 'draft',
    published_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE SET NULL
);
```

---

## 🔧 Настройка и кастомизация

### 🏢 **Изменение информации о компании**

1. **Контактные данные** - отредактируйте `index.php` (футер):
```php
<li><i class="fas fa-phone"></i> +7 (495) 123-45-67</li>
<li><i class="fas fa-envelope"></i> info@tv-engineering.ru</li>
<li><i class="fas fa-map-marker-alt"></i> Москва, ул. Примерная, д. 123</li>
```

2. **Информация на главной** - файл `pages/home.php`
3. **Страница "О компании"** - файл `pages/about.php`
4. **Контактная страница** - файл `pages/contact.php`

### 🎨 **Настройка дизайна**

Основные стили находятся в `assets/css/style.css`:

```css
:root {
    --primary-color: #2563eb;      /* Основной цвет */
    --secondary-color: #64748b;    /* Вторичный цвет */
    --accent-color: #f59e0b;       /* Акцентный цвет */
    --text-color: #1f2937;         /* Цвет текста */
    --bg-color: #ffffff;           /* Фон */
}
```

### 📧 **Настройка почтовых уведомлений**

Для работы контактной формы добавьте отправку email в `index.php`:

```php
case 'contact':
    // ... существующий код ...
    
    // Отправка email
    $to = 'info@tv-engineering.ru';
    $subject = 'Новая заявка с сайта';
    $message = "Имя: $name\nEmail: $email\nСообщение: $message";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    break;
```

---

## 🚨 Безопасность

### 🛡️ **Реализованные меры безопасности:**

- ✅ **Хэширование паролей** с помощью `password_hash()`
- ✅ **Подготовленные запросы** для защиты от SQL-инъекций
- ✅ **Фильтрация ввода** с помощью `htmlspecialchars()`
- ✅ **Валидация email** с помощью `filter_var()`
- ✅ **Управление сессиями** с проверкой авторизации
- ✅ **Защита конфигурации** через .gitignore

### 🔒 **Рекомендации по безопасности:**

1. **Регулярно обновляйте пароли**
2. **Используйте HTTPS** в продакшене
3. **Настройте файрвол** на сервере
4. **Делайте резервные копии** БД
5. **Мониторьте логи** на подозрительную активность

---

## 📱 Адаптивность

Сайт полностью адаптирован для всех устройств:

| Устройство | Разрешение | Особенности |
|------------|------------|-------------|
| 📱 **Мобильные** | 320px - 767px | Мобильное меню, вертикальная навигация |
| 📱 **Планшеты** | 768px - 1023px | Адаптированная сетка, оптимизированные формы |
| 💻 **Десктопы** | 1024px - 1199px | Полная функциональность, горизонтальные меню |
| 🖥️ **Большие экраны** | 1200px+ | Максимальная ширина контента, расширенные элементы |

---

## ⚡ Производительность

### 🚀 **Оптимизации:**

- **Минимизация HTTP запросов** - объединение CSS/JS файлов
- **Оптимизация изображений** - сжатие и правильные форматы
- **Кэширование** - заголовки кэширования для статических ресурсов
- **Lazy Loading** - отложенная загрузка изображений
- **Минификация** - сжатие CSS и JS кода

### 📊 **Метрики производительности:**

- ⚡ **Время загрузки:** < 2 секунд
- 📱 **Mobile-First:** Оптимизация для мобильных устройств
- 🔍 **SEO-оптимизация:** Семантическая разметка, мета-теги

---

## 🧪 Тестирование

### ✅ **Тестируемые компоненты:**

- **Авторизация и регистрация** пользователей
- **Валидация форм** на клиенте и сервере
- **Адаптивность** на различных устройствах
- **Кроссбраузерность** (Chrome, Firefox, Safari, Edge)
- **Безопасность** - защита от основных уязвимостей

### 🔧 **Для тестирования:**

```bash
# Проверка PHP синтаксиса
php -l index.php

# Проверка подключения к БД
php -f install.php

# Валидация HTML
# Используйте онлайн валидаторы W3C
```

---

## 🐛 Устранение неполадок

### ❓ **Частые проблемы:**

<details>
<summary><strong>🔴 Ошибка подключения к базе данных</strong></summary>

**Симптомы:** Белая страница или ошибка PDO

**Решение:**
1. Проверьте данные в `config/database.php`
2. Убедитесь, что MySQL сервер запущен
3. Проверьте права доступа пользователя БД
4. Убедитесь, что база данных создана

```bash
# Проверка статуса MySQL
systemctl status mysql

# Подключение к MySQL
mysql -u username -p
```
</details>

<details>
<summary><strong>🔴 Страницы не загружаются (404 ошибка)</strong></summary>

**Симптомы:** 404 ошибка при переходе по страницам

**Решение:**
1. Проверьте права доступа к файлам (755 для папок, 644 для файлов)
2. Убедитесь, что все файлы загружены
3. Проверьте настройки веб-сервера
4. Убедитесь, что mod_rewrite включен (для Apache)

```bash
# Установка правильных прав
chmod -R 755 /path/to/project
find /path/to/project -type f -exec chmod 644 {} \;
```
</details>

<details>
<summary><strong>🔴 Стили не применяются</strong></summary>

**Симптомы:** Сайт отображается без стилей

**Решение:**
1. Проверьте пути к CSS файлам в `index.php`
2. Убедитесь, что файл `assets/css/style.css` существует
3. Очистите кэш браузера (Ctrl+F5)
4. Проверьте консоль браузера на ошибки

```html
<!-- Правильный путь к стилям -->
<link rel="stylesheet" href="assets/css/style.css">
```
</details>

<details>
<summary><strong>🔴 Проблемы с сессиями</strong></summary>

**Симптомы:** Пользователи не могут войти в систему

**Решение:**
1. Проверьте права на папку сессий PHP
2. Убедитесь, что сессии включены в PHP
3. Проверьте настройки `session.save_path`

```bash
# Проверка настроек сессий
php -i | grep session
```
</details>

### 📋 **Логи для диагностики:**

```bash
# Логи ошибок PHP
tail -f /var/log/php_errors.log

# Логи веб-сервера Apache
tail -f /var/log/apache2/error.log

# Логи MySQL
tail -f /var/log/mysql/error.log
```

---

## 🔄 Планы развития

### 🚧 **В разработке:**

- [ ] 🔧 **Административная панель** - управление контентом
- [ ] 📊 **Система аналитики** - статистика посещений
- [ ] 📧 **Email уведомления** - автоматические письма
- [ ] 🌐 **Многоязычность** - поддержка нескольких языков
- [ ] 🔍 **Поиск по сайту** - полнотекстовый поиск
- [ ] 📱 **PWA поддержка** - прогрессивное веб-приложение

### 💡 **Идеи для улучшения:**

- [ ] 🤖 **Чат-бот** для консультаций
- [ ] 📅 **Система записи** на консультации
- [ ] 💳 **Онлайн оплата** услуг
- [ ] 📊 **CRM интеграция** с внешними системами
- [ ] 🔔 **Push уведомления** для пользователей

---

## 🤝 Участие в разработке

### 🛠️ **Как внести вклад:**

1. **Fork** репозитория
2. Создайте **feature branch** (`git checkout -b feature/AmazingFeature`)
3. **Commit** изменения (`git commit -m 'Add some AmazingFeature'`)
4. **Push** в branch (`git push origin feature/AmazingFeature`)
5. Откройте **Pull Request**

### 📝 **Стандарты кодирования:**

- **PHP:** PSR-12 стандарт
- **JavaScript:** ES6+ синтаксис
- **CSS:** BEM методология
- **Комментарии:** на русском языке
- **Коммиты:** на английском языке

---

## 📞 Поддержка

### 💬 **Получить помощь:**

- 📧 **Email:** [support@tv-engineering.ru](mailto:support@tv-engineering.ru)
- 🐛 **Issues:** [GitHub Issues](https://github.com/Uz11ps/piskarevDiplom/issues)
- 📖 **Wiki:** [Документация](https://github.com/Uz11ps/piskarevDiplom/wiki)

### 🆘 **Экстренная поддержка:**

При критических проблемах:
1. Создайте **Issue** с меткой `urgent`
2. Опишите проблему максимально подробно
3. Приложите скриншоты и логи ошибок
4. Укажите версию PHP, MySQL и браузера

---

## 📄 Лицензия

Этот проект разработан в рамках **дипломной работы** и предназначен для образовательных целей.

```
Copyright (c) 2024 Пискарев
Все права защищены.

Данный проект создан в рамках дипломной работы и не предназначен 
для коммерческого использования без согласия автора.
```

---

## 👨‍💻 Автор

<div align="center">

**Пискарев**  
*Студент-разработчик*

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Uz11ps)
[![Email](https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:piskarev@example.com)

*Дипломная работа • 2024 год*

</div>

---

<div align="center">

**⭐ Если проект был полезен, поставьте звездочку!**

*Сделано с ❤️ для изучения веб-разработки*

</div>