<style>
    form{
        text-align: center;
    }
    table{
        margin: auto;
    }
    .form-group{
        margin: auto;
    }
    .btn.primary{
        margin-right: 0%;
    }
    input{
        border-radius: 10px;
        border: lightgray;
    }
</style>

<form method="POST" action="/register">
    <h2>Register</h2>
    {{ csrf_field() }}
    <div class="form-group">
    <table>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" class="form-control" id="email" name="email"></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" class="form-control" id="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><button style="cursor:pointer" type="submit" class="btn-primary">Submit</button></td>
        </tr>
    </table>
    </div>
    <div class="form-group">
        
    </div>
</form>