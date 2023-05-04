<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classroom[]|\Cake\Collection\CollectionInterface $classrooms
 */
?>
<div class="classrooms index content">
    <?= $this->Html->link(__('New Classroom'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classrooms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('school_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classrooms as $classroom): ?>
                <tr>
                    <td><?= $this->Number->format($classroom->ID) ?></td>
                    <td><?= h($classroom->name) ?></td>
                    <td><?= $classroom->has('school') ? $this->Html->link($classroom->school->name, ['controller' => 'Schools', 'action' => 'view', $classroom->school->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classroom->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classroom->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classroom->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->ID)]) ?>
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
