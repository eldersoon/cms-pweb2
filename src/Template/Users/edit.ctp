<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Editar usuário') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], [ 'class' => 'btn btn-dark']) ?>
        </div>
</div>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <div class="form-group">
            <?php
                echo $this->Form->control('email', array('class' => 'form-control', 'type' => 'email', 'aria-describedby' => 'emailHelp', 'placeholder'=>'Enter email'));
            ?>
        </div>
        <div class="form-group">
            <?php
                echo $this->Form->control('password', array('class' => 'form-control', 'placeholder'=>'Password'));
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), array('class' => 'btn btn-dark')) ?>
    <?= $this->Form->end() ?>
</div>
