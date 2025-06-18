<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Creative Portfolio | Web Developer</title>

    <!-- ✅ Logo (favicon) -->
    <link rel="icon" href="/images/logo.png" type="image/png">

    <!-- ✅ Font Awesome & Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- ✅ CSS pakai path absolut -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    @include('layouts.header')
    
    <main>
        @yield('content')
    </main>
    
    @include('layouts.footer')

    <!-- ✅ JS pakai path absolut -->
    <script src="/js/script.js"></script>

    @stack('scripts')
</body>
</html>
