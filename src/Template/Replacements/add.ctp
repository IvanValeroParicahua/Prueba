<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Replacement $replacement
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
    
<?= $this->Form->create($replacement); ?>
<fieldset>
    <legend><?= __('Add Replacement') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    echo $this->Form->control('category_id', ['options' => $categories]);
    echo $this->Form->control('unit_price');
    ?>
</fieldset>
<?= $this->Form->button(__("add")); ?>
<?= $this->Form->end() ?>
