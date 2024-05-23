<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AI Concierge</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body class="h-full dark:bg-gray-900">
  <div class="antialiased bg-gray-50 dark:bg-gray-900">
    @include('user.components.nav-bar')
    @include('user.components.side-bar')

    <main class="p-4 md:ml-64 h-auto pt-20">
      @yield('content')
    </main>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  @stack('scripts')
</body>
</html>
