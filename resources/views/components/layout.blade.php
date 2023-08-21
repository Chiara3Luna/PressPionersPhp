<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&family=Lobster&family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>The Aulab Post</title>
</head>
<body class="bg-1">
    
    <x-navbar />

    <div>
        {{$slot}}
        <h1 class="text-center pb-3 display-1">The Aulab Post</h1>
        <h2 class="text-center pb-5 display-6 fw-bold">SEZIONE NOTIZIE</h2>
        <x-header />
    </div>
    


    {{-- fontawesome icons --}}
    <script src="https://kit.fontawesome.com/5c8ba140a8.js" crossorigin="anonymous"></script>
</body>
</html>