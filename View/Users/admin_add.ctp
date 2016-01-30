<?php $this->Html->addCrumb($this->Html->link(
    __('Users'),
    ['action' => 'index'],
    ['icon' => ['class' => 'fa fa-user fa-fw']]
)); ?>
<?= $this->Form->create('User'); ?>
    <div class="row">
        <div class="col-md-9">
            <ul class="nav nav-tabs" role="tablist">
                <li class="active">
                    <?= $this->Html->link(
                        __('User'),
                        '#user',
                        ["data-toggle" => 'tab', 'role' => 'tab']
                    ); ?></li>
                <li><?= $this->Html->link(
                        __('Misc.'),
                        '#misc',
                        ["data-toggle" => 'tab', 'role' => 'tab']
                    ); ?></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="user">
                    <div class="row">
                        <div class="col-sm-9">
                            <?= $this->Form->input('username'); ?>
                            <?= $this->Form->input('password'); ?>
                            <?= $this->Form->chosen('group_id', ['empty' => false]); ?>
                            <?= $this->Form->input('firstname'); ?>
                            <?= $this->Form->input('lastname'); ?>
                            <?= $this->Form->input('email'); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="misc">
                    <?= $this->Form->input('comments', ['placeholder' => false, 'rows' => '7']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 tabs-next">
            <?= $this->element('forms/buttons-bottom'); ?>
        </div>
    </div>
<?= $this->Form->end(); ?>