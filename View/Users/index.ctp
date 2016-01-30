<?php $this->Html->addCrumb($this->Html->link(
    __('Users'),
    array('action' => 'index'),
    array('icon' => array('class' => 'icon icon-user icon-fw'))
)); ?>
    <div class="toolbar toolbar-default">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $this->element('search'); ?>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped small">
            <tr>
                <th><?php echo $this->Paginator->sort('username'); ?></th>
                <th><?php echo $this->Paginator->sort('firstname'); ?></th>
                <th><?php echo $this->Paginator->sort('lastname'); ?></th>
                <th><?php echo $this->Paginator->sort('email'); ?></th>
                <th><?php echo $this->Paginator->sort('phone'); ?></th>
                <th><?php echo $this->Paginator->sort('cellphone'); ?></th>
                <th><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $this->Html->link(
                        $user['User']['username'],
                        array('action' => 'view', $user['User']['id'])
                    ); ?></td>
                    <td><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
                    <td><?php echo $this->Text->autoLinkEmails($user['User']['email']) ?>&nbsp;</td>
                    <td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
                    <td><?php echo h($user['User']['cellphone']); ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Element->btnLinkView($user['User']['id']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php
echo $this->element('pagination/paging');
echo $this->element('pagination/pagination');
