<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Controller $controller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Controller'), ['action' => 'edit', $controller->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Controller'), ['action' => 'delete', $controller->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controller->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Controllers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Controller'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actions'), ['controller' => 'Actions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Action'), ['controller' => 'Actions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controllers view large-9 medium-8 columns content">
    <h3><?= h($controller->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cname') ?></th>
            <td><?= h($controller->cname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($controller->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actions') ?></h4>
        <?php if (!empty($controller->actions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Controller Id') ?></th>
                <th scope="col"><?= __('Aname') ?></th>
                <th scope="col"><?= __('Caname') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($controller->actions as $actions): ?>
            <tr>
                <td><?= h($actions->id) ?></td>
                <td><?= h($actions->controller_id) ?></td>
                <td><?= h($actions->aname) ?></td>
                <td><?= h($actions->caname) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actions', 'action' => 'view', $actions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actions', 'action' => 'edit', $actions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actions', 'action' => 'delete', $actions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
