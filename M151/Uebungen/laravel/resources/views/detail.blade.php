<style>
    .product{
        height: 50%;
        width: 50%;
    }
    h1{
        color: white;
    }
</style>
<div style="background-color: greenyellow;">
<h1>{{$product->name}}</h1>
<img src="{{$product->image}}" class="product">
</div>