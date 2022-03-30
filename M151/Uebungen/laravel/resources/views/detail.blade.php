<style>
    .product{
        height: 300px;
        width: 500px;
        margin: auto;
    }
    h1{
        color: black;
        margin: auto;
    }
    .productDiv{
        margin: 20px;
        border-radius: 12px;
        align-items: center;
        margin: auto;
        text-align: center;
        padding-top: 30px;
    }
    p{
       margin: auto;
    }
</style>
<div class="productDiv" >
<h1>{{$product->name}}</h1>
<img src="{{$product->image}}" class="product">
<p>Price: {{$product->price}}</p><br>
<p>Details: {{$product->details}}</p>
</div>
<div class="productDiv">
    <form action="/addProduct" method="POST">
    {{ csrf_field() }}
        <input type="number" name="count">
        <input type="text" value="{{$product->id}}"name="id" hidden>
        <button type="submit" >Add to Cart🛒</button>
    </form>
</div>
