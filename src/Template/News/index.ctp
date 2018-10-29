<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>




<div class="news index large-9 medium-8 columns">
  
    <div class="row">
        <div class="col-11">
            <h3><?= __('Notícias') ?></h3>
        </div>
        <div class="col-1">
            <?= $this->Html->link(__('Criar'), ['action' => 'add'], ['class' => 'btn btn-dark']) ?>
        </div>
    </div>

    <table class="table table-dark" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= h($news->created_at) ?></td>
                <td><?= h($news->updated_at) ?></td>
                <td><?= h($news->title) ?></td>
                <td><?= h($news->subtitle) ?></td>
                <td><?= h($news->photo) ?></td>
                <td><?= h($news->active) ?></td>
                <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $news->id], ['class' => 'btn btn-dark', 'id' => 'btn-link']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id], ['class' => 'btn btn-dark', 'id' => 'btn-link']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Tem certeza que deseja remover # {0}?', $news->title),'class' => 'btn btn-dark', 'id' => 'btn-link']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php 
        $paginator = $this->Paginator->setTemplates([
            'number'=>'<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'current'=>'<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'first'=>'<li class="page-item"><a class="page-link" href="{{url}}">&laquo;</a></li>',
            'last'=>'<li class="page-item"><a class="page-link" href="{{url}}">&raquo</a></li>',
            'prevActive'=>'<li class="page-item"><a class="page-link" href="{{url}}">&lt</a></li>',
            'nextActive'=>'<li class="page-item"><a class="page-link" href="{{url}}">&gt</a></li>',

        ]);
    ?>

    <nav class="pagination">
        <ul class="pagination justify-content-center">
            <?php 
                echo $paginator->first();
                if($paginator->hasPrev()){
                    echo $paginator->prev();
                }
                echo $paginator->last();
                if($paginator->hasNext()){
                    echo $paginator->next();
                }
                echo $paginator->last();
            ?>
        </ul>
    </nav>
    <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, Mostrando {{current}} notícia(s) de um total de {{count}}')]) ?></p>

</div>
