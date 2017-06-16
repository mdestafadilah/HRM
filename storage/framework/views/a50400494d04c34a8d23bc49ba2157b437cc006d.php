<?php $__env->startSection('title', 'Report-Rents'); ?>
<?php $__env->startSection('extraStyle'); ?>
  <link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/libs/select2/select2.css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
  <section>
    <div class="section-header no-print">
      <ol class="breadcrumb">
        <li class="active">Rents Report</li>
      </ol>
    </div><!--end .section-header -->
    <div class="section-body">
      <section>
        <div class="section-body">
          <div class="row no-print">
            <div class="col-lg-12">
              <form class="form form-validate floating-label"
                    novalidate="novalidate"
                    action="<?php echo e(URL::route('report.rents')); ?>"
                    method="GET"
                    enctype="multipart/form-data">

                <div class="card">
                  <div class="card-head style-primary">
                    <header>Filters</header>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <?php echo Form::select('project', $projects, $project, ['class' => 'form-control select2-list', 'required' => 'required']); ?>

                          <label for="">Project</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <?php echo Form::select('status', ['All' => 'All', '0' => 'Inactive','1' =>'Active'], $status, ['class' => 'form-control select2-list', 'required' => 'required']); ?>

                          <label for="">Status</label>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary ink-reaction"><i class="md md-filter-list"></i> get</button>
                        </div>
                      </div>
                    </div>

                  </div><!--end .card-body -->
                </div><!--end .card -->
              </form>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card card-printable style-default-light">
                <div class="card-head no-print">
                  <div class="tools">
                    <div class="btn-group">
                      <a class="btn btn-floating-action btn-primary" href="javascript:void(0);" onclick="javascript:window.print();"><i class="md md-print"></i></a>
                    </div>
                  </div>
                </div><!--end .card-head -->
                <div class="card-body style-default-bright top-zero">
                  <div class="row">
                    <div class="col-xs-5">
                      <img src="/assets/img/logo.png" height="80px" width="100px" alt="">
                      <span class="text-left" style="font-size:16px">Shamsul Alamin Group</span>
                    </div>
                    <div class="col-xs-5 text-left">
                      <h3 class="text-light text-default-light"><strong><?php if($project !="All" and count($rents)): ?><?php echo e($rents[0]->project->name); ?> <?php endif; ?> Rents
                          <?php if($status !="All" ): ?> [ <?php if($status==1): ?> Active <?php else: ?> Inactive <?php endif; ?>] <?php endif; ?></strong></h3>
                    </div>
                    <div class="col-xs-2 text-right">
                      <div class="pull-right">Print:<?php echo e(date('d/m/Y')); ?> </div>
                    </div>
                  </div><!--end .row -->

                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-striped">
                        <thead>
                        <tr>
                          <?php if($project =="All"): ?>
                            <th class="text-center">Project</th>
                          <?php endif; ?>
                          <th class="text-center">Customer Name</th>
                          <th class="text-center">C. Mobile</th>
                          <th class="text-center">C. P.Address</th>
                          <th class="text-center">Project</th>
                          <th class="text-center">Flat</th>
                          <th class="text-center">Rent(&#2547;)</th>
                          <?php if($status =="All" ): ?>
                          <th class="text-center">Status</th>
                          <?php endif; ?>
                          <th class="text-center">Entry</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $rents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rent): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                          <tr>
                            <?php if($project =="All"): ?>
                              <td class="text-center"><?php echo e($rent->project->name); ?></td>
                            <?php endif; ?>
                            <td class="text-center"><?php echo e($rent->customer->name); ?></td>
                            <td class="text-center"><?php echo e($rent->customer->cellNo); ?></td>
                            <td class="text-center"><?php echo e($rent->customer->permanentAddress); ?></td>
                            <td class="text-center"><?php echo e($rent->project->name); ?></td>
                            <td class="text-center"><?php echo e($rent->flat->description); ?></td>
                            <td class="text-center"><?php echo e($rent->rent); ?></td>
                              <?php if($status =="All" ): ?>
                            <td class="text-center">
                              <?php if($rent->status == 0): ?>
                                <span class="text-warning text-bold">Inactive</span>
                              <?php else: ?>
                                <span class="text-success text-bold">Active</span>

                              <?php endif; ?>
                            </td>
                              <?php endif; ?>

                            <td class="text-center"><?php echo e($rent->entryDate->format('d/m/Y')); ?></td>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                        <tfoot>
                        <tr>
                          <td colspan="<?php if($project =="All" and $status =="All"): ?>8 <?php endif; ?> <?php if($project == "All" or $status =="All"): ?>7 <?php else: ?> 6 <?php endif; ?>" class="text-right"><strong class="text-lg text-default-dark">Total</strong></td>
                          <td class="text-right"><strong class="text-lg text-default-dark"><?php echo e(count($rents)); ?></strong></td>
                        </tr>
                        </tfoot>
                      </table>
                    </div><!--end .col -->
                  </div><!--end .row -->

                </div><!--end .card-body -->
              </div><!--end .card -->
            </div><!--end .col -->
          </div><!--end .row -->
        </div>
      </section>
    </div>

  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extraScript'); ?>
  <script src="<?php echo e(url('/')); ?>/assets/js/libs/select2/select2.min.js"></script>

  <script type="text/javascript">
      $( document ).ready(function() {
          $('#menubarToggler').trigger('click');
          $('select').select2();

      });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>