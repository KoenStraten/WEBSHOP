<?php $__env->startSection('content'); ?>

    <div class="container-fluid bg-white">
        <div class="row">
            <?php echo $__env->make('layouts.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-4 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Products</h1>
                    <a class="btn btn-primary float-right" href="/../admin/products/create"><span data-feather="plus"></span></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <td><?php echo e($product->category); ?></td>
                                    <td>
                                        <form action="/../admin/products/edit/<?php echo e($product->id); ?>">
                                            <button class="btn btn-outline-info btn-sm" type="submit"><span data-feather="edit"></span></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form method="POST" action="/../admin/products/remove/<?php echo e($product->id); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <button class="btn btn-outline-danger btn-sm" type="submit"><span data-feather="trash-2"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>