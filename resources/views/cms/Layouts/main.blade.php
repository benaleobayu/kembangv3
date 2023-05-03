<!doctype html>
<html lang="en" data-bs-theme="auto">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>CMS Kembang</title>


    <!-- Custom styles for this template -->
    <link href="/asset/css/sidebars.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  </head>
  <body>
   

<main class="d-flex flex-nowrap">
  @include('cms.Layouts.sidebar')

  @yield('content')
</main>

      <script src="/asset/js/sidebars.js"></script>
  </body>
</html>