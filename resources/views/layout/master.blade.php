<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        aside {
            float: left;
        }
    </style>
</head>
<body>
    <header>
        <h1>header</h1>
    </header>
    <main>
        <aside>aside</aside>
        <div class="content">@yield('content')</div>
    </main>
    <footer>footer</footer>
</body>
</html>