<hr/>
<footer>
    <div>
        <?= $this->Html->link(
            $this->Html->image('cake.power.gif', ['border' => '0']), 'http://www.cakephp.org/',
            ['target' => '_blank', 'escape' => false]
        );
        ?>
    </div>
    <?= $this->element('sql_dump'); ?>
</footer>