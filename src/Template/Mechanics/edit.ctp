<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mechanic $mechanic
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>

<?= $this->Form->create($mechanic); ?>
<fieldset>
    <legend><?= __('Edit Mechanic') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->control('surname');
    echo $this->Form->control('service_id', ['options' => $services]);
    echo $this->Form->control('salary');
    echo $this->Form->control('address');
    echo $this->Form->control('phone');
    echo $this->Form->control('status');
   // echo $this->Form->control('cars._ids', ['options' => $cars]);
    ?>
</fieldset>
<?= $this->Form->button(__("save")); ?>
<?= $this->Form->end() ?>
