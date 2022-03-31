<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
        <h1>Home</h1>
        <table>
        <?php if(null == session()->get('userId')) {?>
            <tr>
                <td>
                <form action="/login">
                <button class="main_button" type="submit">Anmelden</button>
                </form>
                </td>
            </tr>
            <tr>
                <td>
                <form action="/register">
                <button class="main_button" type="submit">Registrieren</button>
                </form>
                </td>
            </tr>
        <?php } ?>
        <?php if(null !== session()->get('userId')) {?>
            <tr><td>
                <form action="/logout">
                    <button class="main_button" type="submit">Logout</button>
                </form>
            </td></tr>
        <?php } ?> 
            <tr>
                <td><a href="/products">Zu den Produkten</a></td>
            </tr>
            <tr><td><a href="/cart">Cart</a></td></tr>
        

        
        </div>
    </body>
</html>
