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
    <legend><?= __('Edit Facture') ?></legend>
    <?php
    echo $this->Form->control('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("save")); ?>
<?= $this->Form->end() ?>
