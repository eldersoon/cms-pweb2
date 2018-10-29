<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewsPhoto[]|\Cake\Collection\CollectionInterface $newsPhotos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New News Photo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="newsPhotos index large-9 medium-8 columns content">
    <h3><?= __('News Photos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newsPhotos as $newsPhoto): ?>
            <tr>
                <td><?= $this->Number->format($newsPhoto->id) ?></td>
                <td><?= h($newsPhoto->created_at) ?></td>
                <td><?= h($newsPhoto->updated_at) ?></td>
                <td><?= $newsPhoto->has('news') ? $this->Html->link($newsPhoto->news->title, ['controller' => 'News', 'action' => 'view', $newsPhoto->news->id]) : '' ?></td>
                <td><?= h($newsPhoto->photo) ?></td>
                <td><?= h($newsPhoto->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $newsPhoto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newsPhoto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newsPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsPhoto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
