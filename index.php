<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дитячий садок ЗДО | Офіційний сайт</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary: #2E8B57; --secondary: #4a90e2; --accent: #FF6B35; --light: #f8f9fa; --dark: #2c3e50; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, sans-serif; background: #f5f7fa; color: #333; line-height: 1.6; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        
        /* ХЕДЕР */
        header {
            background: linear-gradient(135deg, var(--primary) 0%, #3CB371 100%);
            color: white;
            padding: 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            height: 70px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .logo i { color: #FFD700; }
        
        .login-btn {
            background: white;
            color: var(--primary);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .login-btn:hover {
            background: #FFD700;
            transform: translateY(-2px);
        }
        
        /* ПАНЕЛЬ ВКЛАДОК */
        .tabs-panel {
            background: white;
            position: fixed;
            top: 70px;
            width: 100%;
            z-index: 999;
            border-bottom: 2px solid #eee;
            overflow-x: auto;
            white-space: nowrap;
        }
        
        .tabs-container {
            display: flex;
            padding: 0;
        }
        
        .tab-btn {
            padding: 15px 20px;
            background: none;
            border: none;
            border-bottom: 3px solid transparent;
            font-size: 1rem;
            font-weight: 600;
            color: #555;
            cursor: pointer;
            transition: all 0.3s;
            min-width: max-content;
        }
        
        .tab-btn:hover {
            background: #f0f8ff;
            color: var(--primary);
        }
        
        .tab-btn.active {
            color: var(--primary);
            border-bottom: 3px solid var(--primary);
            background: #f0f8ff;
        }
        
        /* ОСНОВНИЙ КОНТЕНТ */
        .main-content {
            margin-top: 140px;
            padding: 20px 0 80px;
        }
        
        .section {
            display: none;
            padding: 20px 0;
        }
        
        .section.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* КНОПКИ */
        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background: #e55a2b;
            transform: translateY(-2px);
        }
        
        .btn-small {
            padding: 8px 16px;
            font-size: 0.9rem;
        }
        
        /* КАРТКИ */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .card h3 {
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        /* ФАЙЛИ */
        .file-upload-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border: 2px dashed #ddd;
        }
        
        .files-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        
        .file-item {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid var(--primary);
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        .file-icon {
            font-size: 1.8rem;
            color: var(--primary);
        }
        
        .file-info h4 {
            margin-bottom: 5px;
        }
        
        .file-date {
            font-size: 0.8rem;
            color: #666;
        }
        
        /* СПОВІЩЕННЯ */
        .notification {
            position: fixed;
            top: 150px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 15px 25px;
            border-radius: 5px;
            z-index: 2000;
            display: none;
        }
        
        /* МОДАЛЬНЕ ВІКНО */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
        }
        
        /* КОМЕНТАРІ */
        .comments-section {
            margin-top: 30px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        
        .comment {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            border-left: 3px solid var(--secondary);
        }
        
        .comment-author {
            font-weight: bold;
            color: var(--primary);
        }
        
        /* ФУТЕР */
        footer {
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }
        
        /* АДАПТИВ */
        @media (max-width: 768px) {
            .tabs-panel {
                top: 60px;
            }
            
            header {
                height: 60px;
            }
            
            .main-content {
                margin-top: 120px;
            }
            
            .tab-btn {
                padding: 12px 15px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- ХЕДЕР -->
    <header>
        <div class="container header-content">
            <a href="#" class="logo" onclick="showTab('home')">
                <i class="fas fa-seedling"></i>
                <span>ДИТЯЧИЙ САДОК ЗДО</span>
            </a>
            
            <button class="login-btn" onclick="showTab('admin')">
                <i class="fas fa-sign-in-alt"></i>
                Увійти
            </button>
        </div>
    </header>

    <!-- ПАНЕЛЬ ВКЛАДОК -->
    <div class="tabs-panel">
        <div class="tabs-container">
            <button class="tab-btn active" onclick="showTab('home')">
                <i class="fas fa-home"></i> Головна
            </button>
            <button class="tab-btn" onclick="showTab('groups')">
                <i class="fas fa-users"></i> Групи
            </button>
            <button class="tab-btn" onclick="showTab('teachers')">
                <i class="fas fa-chalkboard-teacher"></i> Атестація
            </button>
            <button class="tab-btn" onclick="showTab('news')">
                <i class="fas fa-newspaper"></i> Новини
            </button>
            <button class="tab-btn" onclick="showTab('files')">
                <i class="fas fa-file-upload"></i> Файли
            </button>
            <button class="tab-btn" onclick="showTab('comments')">
                <i class="fas fa-comments"></i> Обговорення
            </button>
        </div>
    </div>

    <!-- СПОВІЩЕННЯ -->
    <div class="notification" id="notification">Повідомлення</div>

    <!-- МОДАЛЬНЕ ВІКНО -->
    <div class="modal" id="fileModal">
        <div class="modal-content">
            <h3 id="modalTitle">Файл</h3>
            <div id="modalContent"></div>
            <button class="btn" onclick="closeModal()" style="margin-top: 20px;">Закрити</button>
        </div>
    </div>

    <!-- ОСНОВНИЙ КОНТЕНТ -->
    <div class="container main-content">
        <!-- Головна -->
        <div id="home" class="section active">
            <h1>Дитячий садок ЗДО</h1>
            <p>Ласкаво просимо до нашого садочка! Тут ви можете переглядати та завантажувати файли.</p>
            
            <div class="file-upload-section" id="homeUploadSection">
                <h3><i class="fas fa-upload"></i> Завантажити файл на головну</h3>
                <input type="text" id="homeFileName" placeholder="Назва файлу" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                <textarea id="homeFileDesc" placeholder="Опис файлу" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; height: 80px;"></textarea>
                <button class="btn" onclick="uploadFile('home')">Завантажити файл</button>
            </div>
            
            <div class="files-list" id="homeFiles"></div>
        </div>

        <!-- Групи -->
        <div id="groups" class="section">
            <h1>Наші групи</h1>
            <div class="card-grid">
                <div class="card">
                    <h3>Група "Зірочки"</h3>
                    <p>Вік: 1-2 роки</p>
                    <p>Вихователь: Петренко А.І.</p>
                    
                    <div class="file-upload-section">
                        <h4><i class="fas fa-paperclip"></i> Файли для цієї групи</h4>
                        <input type="text" id="group1FileName" placeholder="Назва файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px;">
                        <textarea id="group1FileDesc" placeholder="Опис файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px; height: 60px;"></textarea>
                        <button class="btn-small" onclick="uploadFile('group1')">Додати файл</button>
                    </div>
                    
                    <div class="files-list" id="group1Files"></div>
                </div>
                
                <div class="card">
                    <h3>Група "Сонечка"</h3>
                    <p>Вік: 2-3 роки</p>
                    <p>Вихователь: Коваленко М.П.</p>
                    
                    <div class="file-upload-section">
                        <h4><i class="fas fa-paperclip"></i> Файли для цієї групи</h4>
                        <input type="text" id="group2FileName" placeholder="Назва файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px;">
                        <textarea id="group2FileDesc" placeholder="Опис файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px; height: 60px;"></textarea>
                        <button class="btn-small" onclick="uploadFile('group2')">Додати файл</button>
                    </div>
                    
                    <div class="files-list" id="group2Files"></div>
                </div>
            </div>
        </div>

        <!-- Атестація -->
        <div id="teachers" class="section">
            <h1>Атестація педагогів</h1>
            
            <div class="file-upload-section">
                <h3><i class="fas fa-file-upload"></i> Завантажити документи атестації</h3>
                <input type="text" id="teachersFileName" placeholder="Назва документа" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                <textarea id="teachersFileDesc" placeholder="Опис документа" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; height: 80px;"></textarea>
                <select id="teachersFileCategory" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                    <option value="">Оберіть категорію</option>
                    <option value="Атестаційні листи">Атестаційні листи</option>
                    <option value="Дипломи">Дипломи</option>
                    <option value="Сертифікати">Сертифікати</option>
                </select>
                <button class="btn" onclick="uploadFile('teachers')">Завантажити документ</button>
            </div>
            
            <div class="files-list" id="teachersFiles"></div>
        </div>

        <!-- Новини -->
        <div id="news" class="section">
            <h1>Новини</h1>
            
            <div class="card">
                <h3>Додати новину з файлами</h3>
                <input type="text" id="newsTitle" placeholder="Заголовок новини" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                <textarea id="newsText" placeholder="Текст новини" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; height: 100px;"></textarea>
                
                <div class="file-upload-section">
                    <h4><i class="fas fa-paperclip"></i> Додати файли до новини</h4>
                    <input type="text" id="newsFileName" placeholder="Назва файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px;">
                    <button class="btn-small" onclick="uploadFile('news')">Додати файл</button>
                </div>
                
                <button class="btn" onclick="addNews()">Опублікувати новину</button>
            </div>
            
            <div id="newsContainer"></div>
        </div>

        <!-- ФАЙЛИ -->
        <div id="files" class="section">
            <h1>Всі файли садочка</h1>
            
            <div class="file-upload-section">
                <h3><i class="fas fa-cloud-upload-alt"></i> Завантажити новий файл</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <input type="text" id="globalFileName" placeholder="Назва файлу" style="width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px;">
                    </div>
                    <div>
                        <select id="globalFileCategory" style="width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Категорія файлу</option>
                            <option value="Документи">Документи</option>
                            <option value="Фотографії">Фотографії</option>
                            <option value="Відео">Відео</option>
                            <option value="Презентації">Презентації</option>
                        </select>
                    </div>
                </div>
                <textarea id="globalFileDesc" placeholder="Опис файлу (обов'язково для всіх)" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; height: 80px;"></textarea>
                <button class="btn" onclick="uploadFile('global')">Завантажити файл для всіх</button>
            </div>
            
            <div class="files-list" id="allFiles"></div>
        </div>

        <!-- ОБГОВОРЕННЯ -->
        <div id="comments" class="section">
            <h1>Обговорення</h1>
            
            <div class="card">
                <h3><i class="fas fa-comment-medical"></i> Додати повідомлення</h3>
                <input type="text" id="commentAuthor" placeholder="Ваше ім'я" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                <textarea id="commentText" placeholder="Ваше повідомлення" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; height: 100px;"></textarea>
                
                <div class="file-upload-section">
                    <h4><i class="fas fa-paperclip"></i> Додати файл до повідомлення</h4>
                    <input type="text" id="commentFileName" placeholder="Назва файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px;">
                    <textarea id="commentFileDesc" placeholder="Опис файлу" style="width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 5px; height: 60px;"></textarea>
                    <button class="btn-small" onclick="uploadFile('comment')">Додати файл</button>
                </div>
                
                <button class="btn" onclick="addComment()">Надіслати повідомлення</button>
            </div>
            
            <div class="comments-section" id="commentsContainer"></div>
        </div>

        <!-- АДМІНКА -->
        <div id="admin" class="section">
            <h1>Адмін-панель</h1>
            
            <div class="card">
                <h3>Вхід для адміністратора</h3>
                <input type="email" id="adminEmail" placeholder="Email" value="lisovecartem333@gmail.com" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                <input type="password" id="adminPassword" placeholder="Пароль" value="admin_zdo_2024" style="width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px;">
                <button class="btn" onclick="loginAdmin()">Увійти</button>
            </div>
            
            <div id="adminPanel" style="display: none; margin-top: 30px;">
                <h3>Керування файлами</h3>
                <div class="files-list" id="adminFiles"></div>
                <button class="btn" onclick="clearAllFiles()" style="background: #dc3545; margin-top: 20px;">Видалити всі файли</button>
            </div>
        </div>
    </div>

    <!-- ФУТЕР -->
    <footer>
        <div class="container">
            <p style="text-align: center;">&copy; 2024 Дитячий садок ЗДО. Всі файли доступні для перегляду.</p>
        </div>
    </footer>

    <script>
        // ===== ВСІ ДАНІ =====
        let allFiles = [];
        let news = [];
        let comments = [];
        let isAdmin = false;

        // ===== ФУНКЦІЇ ДЛЯ ФАЙЛІВ =====
        function uploadFile(section) {
            let fileName, fileDesc, category;
            
            // Отримуємо дані з відповідної секції
            if (section === 'home') {
                fileName = document.getElementById
