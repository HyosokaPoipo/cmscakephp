<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticleTag[]|\Cake\Collection\CollectionInterface $articleTags
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articleTags index large-9 medium-8 columns content">
    <h3><?= __('Article Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('article_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articleTags as $articleTag): ?>
            <tr>
                <td><?= $this->Number->format($articleTag->id) ?></td>
                <td><?= $articleTag->has('article') ? $this->Html->link($articleTag->article->title, ['controller' => 'Articles', 'action' => 'view', $articleTag->article->id]) : '' ?></td>
                <td><?= $articleTag->has('tag') ? $this->Html->link($articleTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $articleTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articleTag->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articleTag->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articleTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleTag->id)]) ?>
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
