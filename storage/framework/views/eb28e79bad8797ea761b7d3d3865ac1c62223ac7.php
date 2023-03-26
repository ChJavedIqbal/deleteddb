<h1>welcome</h1>
<?php if(session('user')): ?>
    <?php echo e(session('user')); ?>

<?php endif; ?>


<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
        <td>Delete</td>
    </tr>
    <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td><?php echo e($item['id']); ?></td>
        <td><?php echo e($item['name']); ?></td>
        <td><?php echo e($item['email']); ?></td>
        <td><?php echo e($item['address']); ?></td>
        <td><a href=<?php echo e("delete/".$item['id']); ?>>Delete</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH /var/www/html/deletedb/resources/views/list.blade.php ENDPATH**/ ?>