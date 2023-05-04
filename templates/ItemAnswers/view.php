<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemAnswer $itemAnswer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Item Answer'), ['action' => 'edit', $itemAnswer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item Answer'), ['action' => 'delete', $itemAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemAnswer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Item Answers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item Answer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemAnswers view content">
            <h3><?= h($itemAnswer->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Student') ?></th>
                    <td><?= $itemAnswer->has('student') ? $this->Html->link($itemAnswer->student->name, ['controller' => 'Students', 'action' => 'view', $itemAnswer->student->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Assessment') ?></th>
                    <td><?= $itemAnswer->has('assessment') ? $this->Html->link($itemAnswer->assessment->id, ['controller' => 'Assessments', 'action' => 'view', $itemAnswer->assessment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $itemAnswer->has('item') ? $this->Html->link($itemAnswer->item->name, ['controller' => 'Items', 'action' => 'view', $itemAnswer->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($itemAnswer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Answer') ?></th>
                    <td><?= $this->Number->format($itemAnswer->answer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duration') ?></th>
                    <td><?= $this->Number->format($itemAnswer->duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateTime') ?></th>
                    <td><?= h($itemAnswer->dateTime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
