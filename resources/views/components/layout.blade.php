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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Outfit:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>The Aulab Post</title>
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="/media/PressPioneersFavicon.png">
</head>
<body class="bg-1">
    
    <x-navbar />
@if (session()->has('message'))
<div class="alert alert-success text-center">
{{session('message')}}
</div>
@endif

@if (session()->has('unauthorized'))
<div class="alert alert-danger text-center">
{{session('unauthorized')}}
</div>
@endif
    <div>
        {{$slot}}
    </div>


    {{-- fontawesome icons --}}
    <script src="https://kit.fontawesome.com/5c8ba140a8.js" crossorigin="anonymous"></script>
</body>
</html>