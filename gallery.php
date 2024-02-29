<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
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

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
            max-width: 800px;
            margin: 20px auto;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 10px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .username {
            font-size: 14px;
            color: #555;
        }
                .index-link {
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

        .index-link:hover {
            background-color: #333;
            transform: scale(0.95);
        }

        .index-link:active {
            transform: scale(0.85);
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
        .gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Updated line to have two columns */
            gap: 16px;
            max-width: 300px;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <a class="index-link" href="index.php">Вернуться на главную</a>
    <h1>Галерея</h1>
    

    <div class="gallery">
        <?php
            $imageDirectory = "upload/";

            if (is_dir($imageDirectory)) {
                $files = scandir($imageDirectory);

                foreach ($files as $file) {
                    if ($file != "." && $file != "..") {
                        // Извлекаем расширение файла
                        $extension = pathinfo($file, PATHINFO_EXTENSION);

                        // Проверяем допустимые расширения
                        if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif'])) {
                            echo '<div class="gallery-item">
                                    <img onclick="openModal(\'' . $imageDirectory . $file . '\')" src="' . $imageDirectory . $file . '" alt="Фото">
                                  </div>';
                        }
                    }
                }
            }
        ?>
    </div>



    <!-- Your existing body content -->
</body>
</html>
