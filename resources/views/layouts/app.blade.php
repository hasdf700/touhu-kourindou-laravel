<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', '幻想商鋪：香霖堂')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;700;900&family=Shippori+Mincho:wght@400;500;600;700&family=Zen+Antique&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/touhou.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    .pagination .page-link {
        background-color: #1A0A2E;
        border-color: #C9A84C40;
        color: #F5E6C8;
    }

    .pagination .page-item.active .page-link {
        background-color: #C9A84C;
        border-color: #C9A84C;
        color: #0D0520;
    }

    .pagination .page-link:hover {
        background-color: #2A1550;
        color: #F5E6C8;
    }

    /* 隱藏分頁元件自帶的「Showing X to Y of Z results」文字 */
    .small {
        display: none;
    }
</style>

<body style="background:#0D0520; color:#F5E6C8;">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>

</html>
