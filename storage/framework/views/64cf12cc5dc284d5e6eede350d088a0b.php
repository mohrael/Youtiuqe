<?php echo $__env->make('parts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


   
<section class="py-5" style="background-color: #fdfaf6;">
        <div class="container">
            <h2 class="text-center mb-5 text-dark"><?php echo e($category->name); ?></h2>

<div class="row">
    <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm mb-4">
                <img src="<?php echo e(asset('storage/img/' .  $product->image)); ?>" class="card-img-top product-image" alt="<?php echo e($product->productName); ?>">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo e($product->productName); ?></h5>
                    <p class="card-text text-muted"><?php echo e($product->price); ?> </p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
        </div>
</section>





<?php echo $__env->make('parts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\downloads\NTI\Xampp\htdocs\ecommerce\Youtiuqe\resources\views/showCategory.blade.php ENDPATH**/ ?>