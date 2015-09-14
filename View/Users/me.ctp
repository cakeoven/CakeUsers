<?php $this->Html->addCrumb($this->Html->link(__('Users'), array('action' => 'index'),
    array('icon' => array('class' => 'icon icon-users icon-fw')))); ?>
<?php $this->Html->addCrumb(__('Personal')); ?>
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <?php echo $this->Element->listItemLinkAdd(); ?>
            <?php echo $this->Element->listItemLinkEdit($user['User']['id']); ?>
            <?php echo $this->Html->link(__('Renew Token'), array('action' => 'renewToken', $user['User']['id']),
                array('class' => 'list-group-item', 'icon' => array('class' => 'icon icon-refresh icon-fw'))); ?>
        </div>
    </div>
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt><?php echo __('Username'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['username']); ?>
                    </dd>
                    <dt><?php echo __('Group'); ?></dt>
                    <dd>
                        <?php echo $this->Html->link($user['Group']['name'],
                            array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
                    </dd>
                    <dt><?php echo __('Firstname'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['firstname']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Lastname'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['lastname']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Email'); ?></dt>
                    <dd>
                        <?php echo $this->Text->autoLinkEmails($user['User']['email']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Phone'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['phone']); ?>
                        &nbsp;
                    </dd>
                    <dt><?php echo __('Cellphone'); ?></dt>
                    <dd>
                        <?php echo h($user['User']['cellphone']); ?>
                        &nbsp;
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<ul class="nav nav-tabs">
    <li class="active"><?php echo $this->Html->link(__('Logins'), '#related-logins',
            array("data-toggle" => "tab")) ?></li>
</ul>
<div class="tab-content">
    <div id="related-logins" class="tab-pane active">
        <?php echo $this->requestAction(array(
            'controller' => 'logins',
            'action' => 'related',
            '?' => array('user_id' => $user['User']['id'])
        ), array('return')); ?>
    </div>
</div>
