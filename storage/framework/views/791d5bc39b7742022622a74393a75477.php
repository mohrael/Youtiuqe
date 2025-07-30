






<?php if(session('success')): ?>
    <div style="color: green; padding: 10px; background-color: #d4edda; border: 1px solid #c3e6cb; margin-bottom: 10px;">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<div class="container">
    <h2>Create New Product</h2>

    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div>
            <label for="name">Product Name:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" required></textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01" required>
        </div>

        <div>
            <label for="category_id">Category:</label>
            <select name="category_id" required>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div>
            <label for="image">Product Image:</label>
            <input type="file" name="image" accept="image/*">
        </div>

        <button type="submit">Create Product</button>
    </form>
    <pre><?php echo e(print_r(session()->all(), true)); ?></pre>

</div>

<?php /**PATH E:\downloads\NTI\Xampp\htdocs\ecommerce\Youtiuqe\resources\views/admin/products/create.blade.php ENDPATH**/ ?>