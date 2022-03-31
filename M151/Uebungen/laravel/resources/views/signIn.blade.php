<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h2>Log In</h2>
    
    <form method="POST" action="/login">
        {{ csrf_field() }}
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button type="submit" >Login</button>
    </form>