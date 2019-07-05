<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
   
<?= $this->Form->create($service); ?>
<fieldset>
    <legend><?= __('Add Service') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    ?>
</fieldset>
<?= $this->Form->button(__("add")); ?>
<?= $this->Form->end() ?>
