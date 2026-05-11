<?php
class DefaultController
{
    public function index()
    {
        echo '
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HELLO HUTECH</title>
            <link rel="stylesheet" href="/PROJECT1/public/css/style.css?v=homepro1">
        </head>
        <body>
            <main class="home-page">
                <span class="home-decor one"></span>
                <span class="home-decor two"></span>

                <section class="home-card">
                    <h1>HELLO HUTECH</h1>
                    <a href="/PROJECT1/Product/list">Vào Product Studio</a>
                </section>
            </main>
        </body>
        </html>';
    }
}
