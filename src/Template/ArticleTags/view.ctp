<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticleTag $articleTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article Tag'), ['action' => 'edit', $articleTag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article Tag'), ['action' => 'delete', $articleTag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articleTag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Article Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articleTags view large-9 medium-8 columns content">
    <h3><?= h($articleTag->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Article') ?></th>
            <td><?= $articleTag->has('article') ? $this->Html->link($articleTag->article->title, ['controller' => 'Articles', 'action' => 'view', $articleTag->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $articleTag->has('tag') ? $this->Html->link($articleTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $articleTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articleTag->id) ?></td>
        </tr>
    </table>
</div>
