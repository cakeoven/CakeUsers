<?php $this->Html->addCrumb($this->Html->link(__('Groups'), array('action' => 'index'),
    array('icon' => array('class' => 'icon icon-users icon-fw')))); ?>
<div class="row">
    <div class="col-sm-3 col-md-2">
        <div class="list-group">
            <?php echo $this->Element->listItemLinkReturn(); ?>
            <?php echo $this->Element->listItemLinkAdd(); ?>
            <?php echo $this->Element->listItemLinkEdit($group['Group']['id']); ?>
            <?php echo $this->Element->listItemLinkDelete($group['Group']['id']); ?>
        </div>
    </div>
    <div class="col-sm-9 col-md-10">
        <?php echo $this->Element->pageTitle(__('Group')); ?>
        <dl class="dl-horizontal">
            <dt><?php echo __('Id'); ?></dt>
            <dd>
                <?php echo h($group['Group']['id']); ?>
            </dd>
            <dt><?php echo __('Name'); ?></dt>
            <dd>
                <?php echo h($group['Group']['name']); ?>
            </dd>
            <dt><?php echo __('Comments'); ?></dt>
            <dd>
                <?php echo h($group['Group']['comments']); ?>
                &nbsp;
            </dd>
            <dt><?php echo __('Created'); ?></dt>
            <dd>
                <time><?php echo h($group['Group']['created']); ?></time>
            </dd>
            <dt><?php echo __('Modified'); ?></dt>
            <dd>
                <time><?php echo h($group['Group']['updated']); ?></time>
            </dd>
        </dl>
        <ul class="nav nav-tabs nav-tabs-remote">
            <li class="active"><?php echo $this->Html->link(__('Users'),
                    array('controller' => 'users', 'action' => 'related', 'group_id' => $group['Group']['id']),
                    array('data-toggle' => 'tab', 'data-target' => '#tab-group-related')) ?></li>
        </ul>
        <div class="tab-content">
            <div id="tab-group-related" class="tab-pane active"></div>
        </div>
    </div>
</div>