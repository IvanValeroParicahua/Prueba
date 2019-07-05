<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
   
<?= $this->Form->create($detail); ?>
<fieldset>
    <legend><?= __('Add Detail') ?></legend>
    <?php
    echo $this->Form->control('facture_id', ['options' => $factures]);
    echo $this->Form->control('replacement_id', ['options' => $replacements]);
    echo $this->Form->control('amount');
 
    ?>
</fieldset>
<?= $this->Form->button(__("add")); ?>
<?= $this->Form->end() ?>
