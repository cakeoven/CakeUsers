<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset(); ?>
        <title>
            <?= $title_for_layout; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $this->Html->meta('icon'); ?>
        <?= $this->Html->css('CakeBootstrap.bootstrap'); ?>
        <?= $this->Html->css('CakeBootstrap.font-awesome'); ?>
        <?= $this->Html->css('CakeBootstrap.chosen'); ?>
        <?= $this->Html->css('CakeBootstrap.chosen-custom'); ?>
        <?= $this->Html->css('Users.login'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?= $this->Session->flash(); ?>
                    <?= $this->fetch('content'); ?>
                    <?= $this->element('footer'); ?>
                </div>
            </div>
        </div>
        <?= $this->Html->script('CakeBootstrap.jquery', ['once' => true]); ?>
        <?= $this->Html->script('CakeBootstrap.bootstrap', ['once' => true]); ?>
        <?= $this->Html->script('CakeBootstrap.chosen', ['once' => true]); ?>
        <?= $this->Html->script('CakeBootstrap.datepicker', ['once' => true]); ?>
        <?= $this->Html->script('CakeBootstrap.functions', ['once' => true]); ?>
    </body>
</html>