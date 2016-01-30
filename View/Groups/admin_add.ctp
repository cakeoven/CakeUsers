<?php $this->Html->addCrumb($this->Html->link(
    __('Groups'),
    ['action' => 'index'],
    ['icon' => ['class' => 'icon icon-users icon-fw']]
)); ?>
<?php $this->Html->addCrumb(__('Create')); ?>
<?php echo $this->Form->create('Group'); ?>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel panel-default">
                <?php echo $this->Html->panelHeader(__('Add Group')); ?>
                <div class="panel-body">
                    <?php echo $this->Form->input('name'); ?>
                    <?php echo $this->Form->input('comments', ['rows' => 5, 'placeholder' => false]); ?>
                </div>
                <div class="panel-footer">
                    <?php echo $this->Form->btnSubmit(); ?>
                    <?php echo $this->Form->btnReset(); ?>
                </div>
            </div>
        </div>
    </div>
<?php echo $this->Form->end(); ?>