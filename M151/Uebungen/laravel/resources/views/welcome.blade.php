<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>

    </head>
    <body>
        Webshop
        <form action="/login">
        <button type="submit">Anmelden</button>
        </form>
        <form action="/register">
        <button type="submit">Registrieren</button>
        </form>
        <a href="/products">Zu den Produkten</a>
    </body>
</html>
