

<?php $__env->startSection('content'); ?>
    
<?php if(session('status')): ?>
<div class="alert alert-danger"><?php echo e(session('status')); ?></div>
<?php endif; ?>

<?php if(session('statusberhasil')): ?>
<div class="alert alert-primary"><?php echo e(session('status')); ?></div>
<?php endif; ?>

<?php if(session('statusedit')): ?>
<div class="alert alert-succes"><?php echo e(session('status')); ?></div>
<?php endif; ?>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Report Client</h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">NO</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $laporans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $no => $laporans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td Scope="col"><?php echo e($no+1); ?></td>
                                            <td><a href="http://localhost/phpmyadmin/sql.php?server=1&db=helpdesk&table=reports&pos=0">AFF<?php echo e($laporans->id); ?></a></td>
                                            <td><?php echo e($laporans->user->name); ?></td>
                                            <td><?php echo e($laporans->subject); ?></td>
                                            <td><?php echo e($laporans->priority); ?></td>
                                                <form action="<?php echo e(route('update',$laporans->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                            <td> <div class="mb-3">
                                                <select class="form-select" id="status" value="<?php echo e(old('status')); ?>"  name="status" aria-label="Default select example"  >
                                                    <option selected><?php echo e($laporans->status); ?></option>
                                                    <option value="Sedang Dalam Proses">Sedang Dalam Proses</option>
                                                    <option value="Sedang Dalam Proses">Sudah Selesai Perbaiki</option>
                                                    <option value="Sedang Dalam Proses">Closed</option>
                                                  </select>
                                              </div>
                                            </td>
                                        
                                            <td>
                                                <div class="btn-group me-2" role="group" aria-label="Second group">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
                                                </form>
                                             
                                                    <form action="/hapus<?php echo e($laporans->id); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger"><i class="far fa-times-circle"></i></button>
                                                    </form>
                                                  </div>
                                               
                                            </td>
                                            
                                            
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->

                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-lg-6 col-xl-12">
                            <div class="card br-0">
                                <div class="card-body">
                                    <div class="chart-container ov-h">
                                        <div id="flotPie1" class="float-chart"></div>
                                    </div>
                                </div>
                            </div><!-- /.card -->
                        </div>

                        <div class="col-lg-6 col-xl-12">
                            <div class="card bg-flat-color-3  ">
                                <div class="card-body">
                                    <h4 class="card-title m-0  white-color ">August 2018</h4>
                                </div>
                                <div class="card-body">
                                    <div id="flotLine5" class="flot-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col-md-4 -->
            </div>
        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('agent.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MAGANG\ticketing\resources\views/agent/form.blade.php ENDPATH**/ ?>