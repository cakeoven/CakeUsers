<?php $this->Html->addCrumb($this->Html->link(__('Users'), array('action' => 'index'),
    array('icon' => array('class' => 'icon icon-user icon-fw')))); ?>
<?php $this->Html->addCrumb(__('Personal')); ?>

<?php echo $this->Form->create('User'); ?>
<?php echo $this->Form->input('id'); ?>
    <div class="row">
        <div class="col-md-9">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><?php echo $this->Html->link(__('General'), '#general',
                        array("data-toggle" => 'tab', 'role' => 'tab')); ?></li>
                <li><?php echo $this->Html->link(__('Misc.'), '#misc',
                        array("data-toggle" => 'tab', 'role' => 'tab')); ?></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <?php echo $this->Form->input('username', array('disabled' => true)); ?>
                    <?php echo $this->Form->input('email', array('disabled' => true)); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('firstname'); ?>
                        </div>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('lastname'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('phone'); ?>
                        </div>
                        <div class="col-sm-6">
                            <?php echo $this->Form->input('cellphone'); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->chosen('bank_account_id'); ?>
                </div>
                <div class="tab-pane" id="misc">
                    <?php echo $this->Form->input('comments', array('rows' => '7', 'placeholder' => false)); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 tabs-next">
            <?php echo $this->element('forms/buttons-bottom'); ?>
        </div>
    </div>
<?php echo $this->Form->end(); ?>