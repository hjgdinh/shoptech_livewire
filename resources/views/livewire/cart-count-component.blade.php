<div>
    {{ $cart_count }}
    @foreach (Cart::instance('cart')->content() as $item)
               
    @endforeach
</div>
