<?php $this->Html->addCrumb($this->Html->link(__('Users'), array('action' => 'index'),
    array('icon' => array('class' => 'icon icon-user icon-fw')))); ?>
<?php $this->Html->addCrumb(__('View')); ?>
<?php $this->Html->addCrumb($user['User']['id']); ?>
<div class="row">
    <div class="col-sm-2">
        <div class="list-group">
            <?php echo $this->Element->listItemLinkReturn(); ?>
            <?php echo $this->Element->listItemLinkAdd(); ?>
            <?php echo $this->Element->listItemLinkEdit($user['User']['id']); ?>
            <?php echo $this->Element->listItemLinkDelete($user['User']['id']); ?>
            <?php echo $this->Html->link(__('Renew Token'), array('action' => 'renewToken', $user['User']['id']),
                array('class' => 'list-group-item', 'icon' => array('class' => 'icon icon-refresh icon-fw'))); ?>
            <?php echo $this->Html->link(__('Renew Token Email'),
                array('action' => 'renewTokenEmail', $user['User']['id']),
                array('class' => 'list-group-item', 'icon' => array('class' => 'icon icon-refresh icon-fw'))); ?>
        </div>
    </div>
    <div class="col-sm-10">
        <?php echo $this->Element->pageTitle(__('View user'), 'h4'); ?>
        <dl class="dl-horizontal">
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($user['User']['id']); ?>
            </dd>
            <dt><?php echo __('Active'); ?></dt>
            <dd>
                <?php echo $this->Html->status($user['User']['active']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Verified'); ?></dt>
            <dd>
                <?php echo $this->Html->status($user['User']['verified']); ?>
                &nbsp;
            </dd>
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
            <dt><?php echo __('Token'); ?></dt>
            <dd>
                <?php echo h($user['User']['token']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Token Email'); ?></dt>
            <dd>
                <?php echo h($user['User']['token_email']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Date created'); ?></dt>
            <dd>
                <time><?php echo h($user['User']['created']); ?></time>
            </dd>
            <dt><?php echo __('Date updated'); ?></dt>
            <dd>
                <time><?php echo h($user['User']['updated']); ?></time>
            </dd>
        </dl>
        <ul class="nav nav-tabs nav-tabs-remote">
            <li class="active"><?php echo $this->Html->link(__('Logins'),
                    array('controller' => 'logins', 'action' => 'related', 'user_id' => $user['User']['id']),
                    array('data-toggle' => 'tab', 'data-target' => '#related-logins')) ?></li>
        </ul>
        <div class="tab-content">
            <div id="related-logins" class="tab-pane active"></div>
        </div>
    </div>
</div>

