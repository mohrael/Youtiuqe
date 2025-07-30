@include('parts.navbar')

{{-- <h2>{{ $category->name }}</h2> --}}
   
<section class="py-5" style="background-color: #fdfaf6;">
        <div class="container">
            <h2 class="text-center mb-5 text-dark">{{ $category->name }}</h2>

<div class="row">
    @foreach($category->products as $product)
        <div class="col-md-3">
            <div class="card border-0 shadow-sm mb-4">
                <img src="{{asset('storage/img/' .  $product->image)}}" class="card-img-top product-image" alt="{{ $product->productName }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->productName }}</h5>
                    <p class="card-text text-muted">{{ $product->price }} </p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
        </div>
</section>


@extends('parts.footer')

