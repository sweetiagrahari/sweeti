<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSite</title>
    <style>
   

   body{
    background-color:#d5f4e6;
   }
</style>

   <meta property="og:title" content="@yield('ogTitle', 'Default Title')">
    <meta property="og:description" content="@yield('ogDescription', 'Default Description')">
    <meta property="og:image" content="@yield('ogImage', 'URL to Default Image')">
    <meta property="og:url" content="{{ url()->current() }}">
</head>

<body>
    @yield('content')
</body>
</html>