<?php $__env->startSection('content'); ?>

    <div class="container-fluid bg-white">
        <div class="row">
            <?php echo $__env->make('layouts.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Product Aanmaken</h1>
                </div>

                <?php if(count($errors)): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form method="POST" action="/../admin/products/store" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Naam</label>
                        <input class="form-control" name="name" type="text" required>
                    </div>

                    <div class="form-group">
                        <label>Prijs</label>
                        <input class="form-control" name="price" type="number" step="0.01" required>
                    </div>

                    <div class="form-group">
                        <label>Beschrijving</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Afbeelding</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label>Categorie</label>
                        <select class="form-control" name="category">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->category); ?>"><?php echo e($category->category); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">aanmaken</button>
                </form>
            </main>
        </div>
    </div>

    <?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>