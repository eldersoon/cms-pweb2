<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsPhoto $newsPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newsPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newsPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List News Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="newsPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($newsPhoto) ?>
    <fieldset>
        <legend><?= __('Edit News Photo') ?></legend>
        <?php
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('new_id', ['options' => $news]);
            echo $this->Form->control('photo');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
