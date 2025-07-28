<?php echo $__env->make('parts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



    <!--  HERO SECTION -->
    <header class="py-5 text-center text-white" style="background-color: #d8a7b1;">
        <div class="container">
            <h1 class="display-4">Welcome to Youtique</h1>
            <p class="lead">Curated fashion for every mood. Explore our newest collections today.</p>
            <a href="#" class="btn btn-light mt-3 px-4">Shop Now</a>
        </div>
    </header>


        <!--  FEATURED PRODUCTS -->
    <section class="py-5" style="background-color: #fdfaf6;">
        <div class="container">
            <h2 class="text-center mb-5 text-dark">Featured Collection</h2>
            <div class="row">
             <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <img src="<?php echo e(asset('storage/' . $prod->image)); ?>" class="card-img-top product-image" alt="Product">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo e($prod->productName); ?></h5>
                                <p class="card-text text-muted"><?php echo e($prod->price); ?></p>
                                <a href="<?php echo e(route('showProduct',$prod->id)); ?>" class="btn btn-outline-dark btn-sm"><?php echo e($prod->description); ?></a>
                            </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>



<!-- Brands section -->
<div class="container my-5">
  <h5 class="text-center mb-4">Shop by Brand</h5>
  <div class="brand-slider d-flex overflow-auto gap-4 px-4 py-4 justify-content-center align-items-center" style="white-space: nowrap;">

    <!-- Zara SVG Logo as link -->
    <a href="#" class="logo-group text-dark fw-bold text-decoration-none" style="font-size: 29px; min-width: 100px;">
        ZARA
    </a>

    <!-- Shein -->
    <a href="#" class="logo-group text-dark fw-bold text-decoration-none" style="font-size: 29px; min-width: 100px;">
        SHEIN
    </a>

    <!-- Sinsay -->
    <a href="#" class="logo-group text-dark fw-semibold text-decoration-none" style="font-size: 30px; min-width: 100px;">
        Sinsay
    </a>

    <!-- Bershka -->
    <a href="#" class="logo-group text-dark fw-semibold text-decoration-none" style="font-size: 30px; min-width: 100px;">
        Bershka
    </a>

    <!-- Pull&Bear -->
    <a href="#" class="logo-group text-dark fw-bold text-decoration-none" style="font-size: 30px; min-width: 120px;">
        Pull&Bear
    </a>

  </div>
</div>



    


    <!-- PRODUCTS BY CATEGORY -->

<section class="wrapper">
  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
          <a href="<?php echo e(route('showCategory',$category->id)); ?>" class="text-decoration-none text-dark">
            <div class="card card-has-bg text-white border-0" style="background-image: url('<?php echo e(asset('storage/' . $category->image)); ?>');">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <div class="card-body">
                  <h4 class="card-title"><?php echo e($category->name); ?></h4>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>












<?php echo $__env->make('parts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\downloads\NTI\Xampp\htdocs\ecommerce\resources\views/home.blade.php ENDPATH**/ ?>