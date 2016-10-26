<div class="users form">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Modifier mon compte') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('first_name') ?>
        <?= $this->Form->input('business_name') ?>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('phone_number') ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistrer')); ?>
    <?= $this->Form->end() ?>
</div>