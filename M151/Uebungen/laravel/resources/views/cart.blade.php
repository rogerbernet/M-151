<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<form action="/products">
                    <button class="main_button" type="submit">Back to Products</button>
</form>
    <table>
        <th>Product: </th>
        <th>Anzahl:</th>
        <th>Singel Price:</th>
        <th>Price:</th>
@foreach ($products as $product)
@if((session()->get('product' . $product->id)) != NULL)
    
    <tr>
        <td>{{$product->name}}</td>
        <td>{{session()->get('product' . $product->id);}}</td>
        <td>{{$product->price}}</td>
        <td><?=($product->price * session()->get('product' . $product->id))?></td>
    </tr> 
    <?php $total += ($product->price * session()->get('product' . $product->id))?>
@endif
 @endforeach
 </table>
 <h4>Total: {{$total}}</h4>