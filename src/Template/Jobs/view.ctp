<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Services'), ['controller' => 'JobServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Service'), ['controller' => 'JobServices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $job->has('user') ? $this->Html->link($job->user->name, ['controller' => 'Users', 'action' => 'view', $job->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $job->has('customer') ? $this->Html->link($job->customer->id, ['controller' => 'Customers', 'action' => 'view', $job->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($job->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trandate') ?></th>
            <td><?= h($job->trandate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Job Services') ?></h4>
        <?php if (!empty($job->job_services)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->job_services as $jobServices): ?>
            <tr>
                <td><?= h($jobServices->id) ?></td>
                <td><?= h($jobServices->job_id) ?></td>
                <td><?= h($jobServices->service_id) ?></td>
                <td><?= h($jobServices->price) ?></td>
                <td><?= h($jobServices->qty) ?></td>
                <td><?= h($jobServices->discount) ?></td>
                <td><?= h($jobServices->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'JobServices', 'action' => 'view', $jobServices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'JobServices', 'action' => 'edit', $jobServices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'JobServices', 'action' => 'delete', $jobServices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobServices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
