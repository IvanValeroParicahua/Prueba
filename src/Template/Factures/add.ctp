<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Facture $facture
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
 
<?= $this->Form->create($facture); ?>
<fieldset>
    <legend><?= __('Add Facture') ?></legend>
    <?php
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("add")); ?>
<?= $this->Form->end() ?>
