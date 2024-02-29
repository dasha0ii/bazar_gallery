<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .upload-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-bottom: 20px;
        }

        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #333;
            transform: scale(0.95);
        }

        button:active {
            transform: scale(0.85);
        }

        .gallery-link {
            background-color: #000;
            color: #fff;
            padding: 8px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            max-width: 200px; /* Ограничение по ширине */
            width: 100%;
            text-align: center;
            transition: all 0.3s ease;
        }

        .gallery-link:hover {
            background-color: #333;
            transform: scale(0.95);
        }

        .gallery-link:active {
            transform: scale(0.90);
        }

        body {
            font-family: 'Font', Arial, sans-serif;
            /* Добавьте другие стили по необходимости */
        }

        /* Добавьте другие стили по необходимости */

        @font-face {
            font-family: 'Font';
            src: url('font/font.ttf') format('truetype');
            /* Укажите правильный путь к вашему шрифту в поддиректории font */
            font-weight: normal;
            font-style: normal;
        }
        .custom-button {
            font-family: 'Font', Arial, sans-serif;

        }
        .custom-button2 {
            font-family: 'Font', Arial, sans-serif;

        }
        .custom-button:hover {
            background-color: #333;
        }
        .usdt-image {
            max-width: 10%;
            height: auto;
            cursor: pointer;
            transition: transform 0.5s ease; /* Add a smooth transition effect */
        .usdt-container {
            text-align: center;
            margin-top: 20px;
        }
        }
    </style>
    <script>
        function uploadFile() {
            var formData = new FormData(document.getElementById("uploadForm"));

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        // Успешно загружено
                        alert('Файл успешно загружен!');
                        document.getElementById("username").value = ""; // Очистка инпута после загрузки
                        window.location.reload(); // Обновление страницы после загрузки
                    } else {
                        // Произошла ошибка
                        alert('Ошибка при загрузке файла.');
                    }
                }
            };

            xhr.open("POST", "create.php", true);
            xhr.send(formData);

            return false; // Предотвращаем переход на create.php
        }
    </script>
</head>
<body>

    <form class="upload-form" id="uploadForm" enctype="multipart/form-data" onsubmit="return uploadFile()" class="custom-button2">
        <input type="file" name="image" class="custom-button2">
        <button type="submit" class="custom-button">Загрузить</button>
    </form>
    <a class="gallery-link" href="gallery.php">Посмотреть галерею</a>
    <div style="text-align: center; margin-top: 20px;">
        <a href="https://github.com/dasha0ii/bazar_gallery" target="_blank" style="text-decoration: none; color: #A9A9A9; font-weight: bold;">
            Исходный код
        </a>
        <a target="_blank" style="text-decoration: none; color: #010101; font-weight: bold;">|</a>
        <a href="usdt.html" target="_blank" style="text-decoration: none; color: #A9A9A9; font-weight: bold;">USDT</a>
    </div>
</body>
</html>
