@include('parts/navbar')

@section('content')

<div class="container my-5">
  <h2 class="mb-4">{{ $product->name }}</h2>

  <!-- Image Gallery -->
  <div class="row">
    <!-- Main Image -->
    <div class="col-md-6">
      <div class="border p-2 rounded shadow-sm">
        <img id="mainImage" src="{{ asset('img/products/' . $product->images->first()->image_path) }}" 
             alt="Main Image" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
      </div>

      <!-- Thumbnails -->
      <div class="d-flex gap-2 mt-3 flex-wrap">
        @foreach ($product->images as $image)
          <img src="{{ asset('img/products/' . $image->image_path) }}" 
               onclick="changeMainImage(this)" 
               class="thumbnail-image border rounded shadow-sm"
               style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;">
        @endforeach
      </div>
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
      <h4>Description:</h4>
      <p>{{ $product->description }}</p>

      <h5 class="mt-3">Price:</h5>
      <p class="fw-bold text-success">${{ $product->price }}</p>
      <a href="#" class="btn btn-primary">Add to Cart</a>

    </div>
  </div>
</div>

<!-- JavaScript to switch main image -->
<script>
  function changeMainImage(thumbnail) {
    const mainImage = document.getElementById('mainImage');
    mainImage.src = thumbnail.src;

    // Remove active style from all thumbnails
    document.querySelectorAll('.thumbnail-image').forEach(img => {
      img.classList.remove('border-primary');
      img.classList.remove('border-3');
    });

    // Highlight selected thumbnail
    thumbnail.classList.add('border-primary', 'border-3');
  }
</script>
