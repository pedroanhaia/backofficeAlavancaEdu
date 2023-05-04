<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssesstementsItem[]|\Cake\Collection\CollectionInterface $assesstementsItems
 */
?>
<div class="assesstementsItems index content">
    <?= $this->Html->link(__('New Assesstements Item'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Assesstements Items') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item_id') ?></th>
                    <th><?= $this->Paginator->sort('assessment_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assesstementsItems as $assesstementsItem): ?>
                <tr>
                    <td><?= $this->Number->format($assesstementsItem->id) ?></td>
                    <td><?= $assesstementsItem->has('item') ? $this->Html->link($assesstementsItem->item->name, ['controller' => 'Items', 'action' => 'view', $assesstementsItem->item->id]) : '' ?></td>
                    <td><?= $assesstementsItem->has('assessment') ? $this->Html->link($assesstementsItem->assessment->id, ['controller' => 'Assessments', 'action' => 'view', $assesstementsItem->assessment->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $assesstementsItem->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assesstementsItem->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assesstementsItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assesstementsItem->id)]) ?>
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
