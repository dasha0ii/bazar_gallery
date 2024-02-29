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
            transform: scale(0.85);
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
    <form class="upload-form" id="uploadForm" enctype="multipart/form-data" onsubmit="return uploadFile()">
        <input type="file" name="image">
        <button type="submit">Загрузить</button>
    </form>

    <a class="gallery-link" href="gallery.php">Посмотреть галерею</a>
</body>
</html>
