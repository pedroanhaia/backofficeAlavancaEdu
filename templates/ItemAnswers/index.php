<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemAnswer[]|\Cake\Collection\CollectionInterface $itemAnswers
 */
?>
<div class="itemAnswers index content">
    <?= $this->Html->link(__('New Item Answer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Item Answers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('assessment_id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('dateTime') ?></th>
                    <th><?= $this->Paginator->sort('answer') ?></th>
                    <th><?= $this->Paginator->sort('duration') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itemAnswers as $itemAnswer): ?>
                <tr>
                    <td><?= $this->Number->format($itemAnswer->id) ?></td>
                    <td><?= $itemAnswer->has('student') ? $this->Html->link($itemAnswer->student->name, ['controller' => 'Students', 'action' => 'view', $itemAnswer->student->id]) : '' ?></td>
                    <td><?= $itemAnswer->has('assessment') ? $this->Html->link($itemAnswer->assessment->id, ['controller' => 'Assessments', 'action' => 'view', $itemAnswer->assessment->id]) : '' ?></td>
                    <td><?= $itemAnswer->has('item') ? $this->Html->link($itemAnswer->item->name, ['controller' => 'Items', 'action' => 'view', $itemAnswer->item->id]) : '' ?></td>
                    <td><?= h($itemAnswer->dateTime) ?></td>
                    <td><?= $this->Number->format($itemAnswer->answer) ?></td>
                    <td><?= $this->Number->format($itemAnswer->duration) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $itemAnswer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemAnswer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemAnswer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
