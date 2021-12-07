

<?php $__env->startSection('content'); ?>
    
       
            <div class="row">
                <div class="col-xl-8">
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
                                        </tr>
                                    </thead>
                                    
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

                        
                    </div>
                </div> <!-- /.col-md-4 -->
            </div>
        
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('agent.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MAGANG\ticketing\resources\views/agent/edit.blade.php ENDPATH**/ ?>