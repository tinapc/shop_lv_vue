<!DOCTYPE html>
<html lang="">
    <head>
        <title>Admin System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()  }}">
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    
    </head>

    <body>

        <div id="app">
            <example></example>
            
            <div class="container">
                <product-list table-title="Products List"></product-list>
            </div>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>