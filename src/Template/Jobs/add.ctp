<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>

<!-- Content Header (Page header) -->
<?= $this->element('Form/nav-top', [
        'title' => 'Add Job',
        'links' => [['class'=>'fa fa-list', 'title'=>'Job List', 'action'=>'index','method'=>'link']],
]);?>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>
            <?php $this->Form->setTemplates(['dateWidget' => '{{day}}{{month}}{{year}}']);?>
            <?= $this->Form->create($job, ['id'=>'inputForm', 'class'=>'repeater']) ?>
                <?php $photo = '/files/Users/photo/' . $this->getRequest()->getSession()->read('Auth.User.photo');?>

                <fieldset>
                    <?= $this->Form->control('user_id', ['type'=>'hidden', 'value'=>$loguser['id'] ]) ?>
                    <div class="row invoice-info">
                        <div class="col-sm-5 invoice-col">
                        <address>
                            <strong><?= 'Staff Name '?></strong><br>
                            <h2><?= $this->getRequest()->getSession()->read('Auth.User.name') ?> </h2><br>    
                        </address>
                        <address>
                            <?php echo $this->Html->image($photo, ['class' => 'user-image', 'alt' => 'User Image', 'width'=>'200px', 'height'=>'250px']); ?>
                        </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-5 invoice-col">
                            <address>
                                <strong>Date Time</strong><br>
                                <?= $this->Form->control('trandate', ['type'=>'text', 'readonly'=>true, 'empty'=>false, 'label'=>false, 'class'=>'form-control', 'id'=>'trandate']) ?>
                            </address>
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Sales Today</span>
                                        <span class="info-box-number"><?= $totday;?></span>
                                    </div>
                            </div>                    
                            <div class="info-box">
                                <span class="info-box-icon bg-yellow"><i class="fa fa-flag-o"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Sales Month</span>
                                        <span class="info-box-number"><?= $totmonth;?></span>
                                    </div>
                            </div>                    
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="fa fa-flag-o"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Total Sales Year</span>
                                        <span class="info-box-number"><?= $totyear;?></span>
                                    </div>
                            </div>                    

                            
                        </div>
                        <!-- /.col -->

                    </div>
                    <div class="box-body">
                        <div class="box">
                            <div class="form-group">
                                <?= $this->Form->control('customer_id', ['options' => $customers, 'empty' => false,'label'=>'Customer Name', 'class'=>'form-control']);?>
                            </div>
                            <div class="box-header">
                            <h3 class="box-title">Job List</h3>
                            </div>
                            <!-- /.box-header -->
                            <div data-repeater-list="job_services">
                                <div data-repeater-item>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <?= $this->Form->control('service_id', ['options' => $services, 'empty' => true, 'label'=>false, 'placeholder'=>'Service', 'class'=>'form-control select2']);?>
                                            </div>
                                            <div class="col-xs-3">
                                                <?= $this->Form->control('qty', ['label'=>false, 'placeholder'=>'Count', 'class'=>'form-control']);?>
                                            </div>
                                            <div class="col-xs-3">
                                                <?= $this->Form->control('discount', ['label'=>false, 'placeholder'=>'Discount %', 'class'=>'form-control']);?>
                                            </div>
                                            <div class="col-xs-2">    
                                                <input data-repeater-delete type="button" value="Delete" class='btn btn-danger'/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <input data-repeater-create type="button" id="repeater-button" value="Add" class='btn btn-primary'/>
                    </div>    
                </fieldset>
                <div class="box-footer">
                    <?= $this->Form->button(__('Save'),['class'=>'btn btn-info pull-right']) ?>
                </div>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

<?php $this->Html->css([
    'AdminLTE./plugins/select2/select2.min',
    'AdminLTE./plugins/datetimepicker/bootstrap-datetimepicker.min',
  ],
  ['block' => 'css']);

$this->Html->script([
  'AdminLTE./plugins/input-mask/jquery.inputmask',
  'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
  'AdminLTE./plugins/select2/select2.full.min',
  'AdminLTE./plugins/datetimepicker/bootstrap-datetimepicker.min',
  'jquery.repeater'
],
['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
$(document).ready(function() {
    $("[data-mask]").inputmask();
    $('.repeater').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (deleteElement) {
                if(confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            ready: function (setIndexes) {

            }
        });

    $(".select2").select2({
                placeholder: "Choose Service",
                allowClear: true
    });    
    
    $('.select2').on('change', function() {
      var data = $(".select2 option:selected").text();
      $("#test").val(data);
      console.log('tes');
    })
    $("#repeater-button").click(function(){
        setTimeout(function(){
 
            $(".select2").select2({
                placeholder: "Choose Service",
                allowClear: true
            });    
                  
        }, 100);
    });    


});
$("#trandate").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>
<?php $this->end(); ?>

