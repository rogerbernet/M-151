
    <table>
        <th>Product: </th>
        <th>Anzahl:</th>
        <th>Singel Price:</th>
        <th>Price:</th>
@foreach ($products as $product)
<?php $total=0; if(session()->get($product->id) != NULL) { ?>
    <tr>
        <td>{{$product->name}}</td>
        <td>{{session()->get($product->id);}}</td>
        <td>{{$product->price}}</td>
        <td><?=($product->price * session()->get($product->id))?></td>
    </tr> 
<?php $total = ($product->price * session()->get($product->id)) + $total;} ?>

 @endforeach
 </table>
 <h4>Total: <?= $total?><-Doesn't work</h4>