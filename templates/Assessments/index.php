<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assessment[]|\Cake\Collection\CollectionInterface $assessments
 */
?>
<div class="assessments index content">
    <?= $this->Html->link(__('New Assessment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Assessments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('assessment_template_id') ?></th>
                    <th><?= $this->Paginator->sort('token') ?></th>
                    <th><?= $this->Paginator->sort('starts_at') ?></th>
                    <th><?= $this->Paginator->sort('ends_at') ?></th>
                    <th><?= $this->Paginator->sort('duration') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assessments as $assessment): ?>
                <tr>
                    <td><?= $this->Number->format($assessment->id) ?></td>
                    <td><?= $assessment->has('assessment_template') ? $this->Html->link($assessment->assessment_template->title, ['controller' => 'AssessmentTemplates', 'action' => 'view', $assessment->assessment_template->id]) : '' ?></td>
                    <td><?= h($assessment->token) ?></td>
                    <td><?= h($assessment->starts_at) ?></td>
                    <td><?= h($assessment->ends_at) ?></td>
                    <td><?= $this->Number->format($assessment->duration) ?></td>
                    <td><?= h($assessment->created) ?></td>
                    <td><?= h($assessment->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $assessment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assessment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assessment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessment->id)]) ?>
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
