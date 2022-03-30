<style>
    table{
        margin: auto;
    }
    div{
        text-align: center;
        margin: auto; 
    }
</style>
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