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
@if (session()->has('message'))
<div class="alert alert-success">
{{session('message')}}
</div>
@endif
    <div>
        {{$slot}}
    </div>


    {{-- fontawesome icons --}}
    <script src="https://kit.fontawesome.com/5c8ba140a8.js" crossorigin="anonymous"></script>
</body>
</html>