<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Campaign'), ['action' => 'edit', $campaign->campaigns_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campaign'), ['action' => 'delete', $campaign->campaigns_id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->campaigns_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="campaigns view large-9 medium-8 columns content">
    <h3><?= h($campaign->campaigns_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($campaign->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= h($campaign->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($campaign->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation Date') ?></th>
            <td><?= h($campaign->creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Begin Date') ?></th>
            <td><?= h($campaign->begin_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($campaign->end_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($campaign->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Names') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Mother Name') ?></th>
                <th scope="col"><?= __('Last Contact Date') ?></th>
                <th scope="col"><?= __('Last Contact Username') ?></th>
                <th scope="col"><?= __('Creation Date') ?></th>
                <th scope="col"><?= __('Creation Username') ?></th>
                <th scope="col"><?= __('Update Date') ?></th>
                <th scope="col"><?= __('Update Username') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Last Contact User Id') ?></th>
                <th scope="col"><?= __('Creation User Id') ?></th>
                <th scope="col"><?= __('Update User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($campaign->customers as $customers): ?>
            <tr>
                <td><?= h($customers->id) ?></td>
                <td><?= h($customers->names) ?></td>
                <td><?= h($customers->last_name) ?></td>
                <td><?= h($customers->mother_name) ?></td>
                <td><?= h($customers->last_contact_date) ?></td>
                <td><?= h($customers->last_contact_username) ?></td>
                <td><?= h($customers->creation_date) ?></td>
                <td><?= h($customers->creation_username) ?></td>
                <td><?= h($customers->update_date) ?></td>
                <td><?= h($customers->update_username) ?></td>
                <td><?= h($customers->comment) ?></td>
                <td><?= h($customers->last_contact_user_id) ?></td>
                <td><?= h($customers->creation_user_id) ?></td>
                <td><?= h($customers->update_user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->customer_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->customer_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->customer_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($campaign->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($campaign->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
