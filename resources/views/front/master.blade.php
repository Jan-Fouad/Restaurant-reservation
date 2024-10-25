<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.partials.header')
    <!-- تضمين مكتبة FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    @include('front.partials.navbar')
    @include('front.partials.spinner')
    
    <!-- محتوى الصفحة -->
    @yield('content')

    @include('front.partials.footer')

    <!-- تضمين ملفات JavaScript أخرى هنا إذا لزم الأمر -->
    <script src="path/to/your/scripts.js"></script>
</body>
</html>
