<?php $__env->startSection('content'); ?>

    <div class="container">
        <h3>Home</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$loop->last): ?>
                    <div class="row productline">
                        <?php else: ?>
                            <div class="row lastline">
                                <?php endif; ?>
                                <div class="col-md-4">
                                    <a href="../product/<?php echo e($p->id); ?>">
                                        <img src="<?php echo e($p->image); ?>" style="max-height: 200px">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h4><a class="text-dark" href="../product/<?php echo e($p->id); ?>"><?php echo e($p->name); ?></a></h4>
                                    <p><?php echo e($p->description); ?> <br><br>
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                            <?php if($i < $p->rating()): ?>
                                                <span class="fa fa-star checked"></span>
                                            <?php else: ?>
                                                <span class="fa fa-star unchecked"></span>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                        <span class="card-text"><?php echo e(" ( " . count($p->reviews) . " )"); ?></span>
                                </div>
                                <div class="col-md-2">
                                    <p class="price"><?php echo e("$" . $p->price); ?></p>
                                    <a href="../product/<?php echo e($p->id); ?>" class="btn btn-warning">To product page ></a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>