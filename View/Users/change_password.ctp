<?php $this->Html->addCrumb($this->Html->link(__('Users'), array('action' => 'index'),
    array('icon' => array('class' => 'icon icon-user icon-fw')))); ?>
<?php $this->Html->addCrumb(__('Change Password')); ?>

<div class="row">
    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
        <?php echo $this->Form->create('User', array('url' => array($id, $token), 'autocomplete' => 'off')); ?>
        <div class="well">
            <?php
            echo $this->Form->input('old_password', array('type' => 'password', 'placeholder' => false));
            echo $this->Form->input('new_password', array('type' => 'password', 'placeholder' => false));
            echo $this->Form->input('verify_password', array('type' => 'password', 'placeholder' => false));
            ?>
            <?php echo $this->Form->btnSubmit(__('Change')); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>