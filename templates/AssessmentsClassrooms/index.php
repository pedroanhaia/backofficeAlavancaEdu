<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentsClassroom[]|\Cake\Collection\CollectionInterface $assessmentsClassrooms
 */
?>
<div class="assessmentsClassrooms index content">
    <?= $this->Html->link(__('New Assessments Classroom'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Assessments Classrooms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('assessment_id') ?></th>
                    <th><?= $this->Paginator->sort('classroom_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assessmentsClassrooms as $assessmentsClassroom): ?>
                <tr>
                    <td><?= $this->Number->format($assessmentsClassroom->id) ?></td>
                    <td><?= $assessmentsClassroom->has('assessment') ? $this->Html->link($assessmentsClassroom->assessment->id, ['controller' => 'Assessments', 'action' => 'view', $assessmentsClassroom->assessment->id]) : '' ?></td>
                    <td><?= $assessmentsClassroom->has('classroom') ? $this->Html->link($assessmentsClassroom->classroom->name, ['controller' => 'Classrooms', 'action' => 'view', $assessmentsClassroom->classroom->ID]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $assessmentsClassroom->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assessmentsClassroom->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assessmentsClassroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentsClassroom->id)]) ?>
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
