<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1 class="text-center px-8 py-10">Ninja Network</h1>
            <a href="/ninjas">All Ninjas</a>
            <a href="/ninjas/create">Create New Ninjas</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot}}
    </main>
    
</body>
</html>