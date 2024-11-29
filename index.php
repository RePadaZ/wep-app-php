<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My web-site</title>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"/>
</head>
    <body>
        <header class="header">
            <h1>Send us a Message</h1>
        </header>
        <main class="main">
            <section class="container">
                <form id="form" class="container-form" action="" method="post">
                    <div class="container-form-group">
                        <label for="name">First name:</label><br>
                        <input id="name" type="text" name="name" placeholder="Name" required>
                        <br><label for="email">Your email:</label><br>
                        <input id="email" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="container-form-group">
                        <label for="phone">Your phone:</label><br>
                        <input id="phone" type="text" name="phone" placeholder="+7 999 999 99 99" required>
                        <br>
                        <label for="url">Your website:</label>
                        <br>
                        <input id="url" type="url" name="url" placeholder="https://example.com" required >
                    </div>
                    <footer class="footer">
                        <textarea name="textarea" placeholder="Write your message"></textarea>
                        <button type="submit">Send Message</button>
                        <p id="text-send">Thanks for your feedback</p>
                    </footer>
                </form>
            </section>
        </main>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/script.js"></script>
    </body>
</html>