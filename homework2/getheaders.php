<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <img class="logo" src="../images/logo.png" alt="logopolytech">
            <h1 class="heading">Feedback form</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <form class="contact-form">
                <?php
                    $url = 'https://httpbin.org';
                    $answer = get_headers($url);
                ?>
                <textarea name="" id="" cols="30" rows="10">
                    <?php 
                        print_r($answer);
                    ?>
                </textarea>
            </form>
        <div>
    </main>
    <footer><div class="container"><p class="footer">Собрать сайт из двух страниц.</p></div></footer>
</body>
</html>