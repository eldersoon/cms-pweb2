<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News $news
 */
?>
<div class="row">
        <div class="col-10">
            <h3><?= __('Editar Notícia') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Notícias'), ['action' => 'index'], [ 'class' => 'btn btn-dark']) ?>
        </div>
</div>

<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
    <div class="form-group">
        <?php
            echo $this->Form->control('created_at', array('class' => 'form-control')); 
        ?>
        </div>
        <div class="form-group">
        <?php
            echo $this->Form->control('updated_at', array('class' => 'form-control'));  
        ?>
        </div>
        <div class="form-group">
            <?php
                echo $this->Form->control('title', array('class' => 'form-control', 'type' => 'text', 'placeholder'=>'Título'));
            ?>
        </div>
        <div class="form-group">
            <?php
                echo $this->Form->control('subtitle', array('class' => 'form-control', 'type' => 'text', 'placeholder'=>'Subtítulo'));
            ?>
        </div>
        <div class="form-group">
            <?php
                echo $this->Form->control('photo', array('type' => 'file', 'placeholder'=>'Selecione uma imagem...', 'class' => 'form-control-file'));
            ?>
        </div>
        <div class="form-group">
            <?php
                echo $this->Form->control('text', array('placeholder'=>'Digite a notícia', 'maxlength' => '5000', 'id' => 'text-area'));
            ?>
        </div>
        <div class="form-check">
            <?php
                echo $this->Form->control('active', array('type' => 'checkbox', 'class'=> 'form-check-input'));
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit'), array('class' => 'btn btn-dark')) ?>
    <?= $this->Form->end() ?>
</div>
