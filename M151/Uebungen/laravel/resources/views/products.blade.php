<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
    table{
        margin: auto;
    }
    div{
        text-align: center;
        margin: auto; 
    }

</style>
<form action="/">
        <button class="main_button" type="submit">Home</button>
</form>
<div>
<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Details</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="/product/{{ $product->id }}"><button>Details</button></a>
                
            </td>
        </tr>
    @endforeach
</table>
<a href="/cart">Cart</a>
</div>