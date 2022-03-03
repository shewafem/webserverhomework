<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>тестируем PHP!</title>
</head>
<body>
    <header>
            <img width="500" style="position: relative; left: 50%; transform: translate(-50%);" src="../images/logo.png" alt="logo-polytech">
    </header> 
    <main>
        <h1 style="text-align: center;">
        <?php echo "Hello, World!" ?></h1>
        <div style="text-align:center;"> 
            <?php 
                echo "current time is: "; 
                echo date('m/d/Y h:i:s')."<br>"; 
                echo "<b>done by Tamir Sundureev, group 211-322</b>";
            ?> 
        </div>
    </main>
    <footer>
        <h2 style="text-align:center; font-family: 'Courier New';">Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг. 
</h2>
    </footer>
</body>
</html>