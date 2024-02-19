<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')
    <main class="container p-5">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>