<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manajemen penulis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<h4>Manajemen penulis</h4>
<a href="<?php echo e(route('penulis.create')); ?>" class="btn btn-primary">Tambah</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nama_penulis</th>
            <th>hasil_karya</th>
            <th>penerbit</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $penulis2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row['nama_penulis']); ?></td>
                <td><?php echo e($row['hasil_karya']); ?></td>
                <td><?php echo e($row['penerbit']); ?></td>
            </tr>
    </tbody>
</table>
</html><?php /**PATH D:\penulis\resources\views/penulis2/index.blade.php ENDPATH**/ ?>