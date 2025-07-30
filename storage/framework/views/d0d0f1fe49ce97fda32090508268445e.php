<?php echo $__env->make('parts/navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="container my-5">
  <h2 class="mb-4"><?php echo e($product->name); ?></h2>

  <!-- Image Gallery -->
  <div class="row">
    <!-- Main Image -->
    <div class="col-md-6">
      <div class="border p-2 rounded shadow-sm">
<img id="mainImage" src="<?php echo e(asset('storage/img/' . $product->images->first()->image_path)); ?>"
alt="Main Image" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
      </div>

      <!-- Thumbnails -->
      <div class="d-flex gap-2 mt-3 flex-wrap">
        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img src="<?php echo e(asset('storage/img/' . $image->image_path)); ?>" 
               onclick="changeMainImage(this)" 
               class="thumbnail-image border rounded shadow-sm"
               style="width: 80px; height: 80px; object-fit: cover; cursor: pointer;">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>

    <!-- Product Details -->
    <div class="col-md-6">
      <h4>Description:</h4>
      <p><?php echo e($product->description); ?></p>

      <h5 class="mt-3">Price:</h5>
      <p class="fw-bold text-success">$<?php echo e($product->price); ?></p>
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
<?php /**PATH E:\downloads\NTI\Xampp\htdocs\ecommerce\Youtiuqe\resources\views/showProduct.blade.php ENDPATH**/ ?>