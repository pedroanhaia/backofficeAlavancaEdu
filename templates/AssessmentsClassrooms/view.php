<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentsClassroom $assessmentsClassroom
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assessments Classroom'), ['action' => 'edit', $assessmentsClassroom->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assessments Classroom'), ['action' => 'delete', $assessmentsClassroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentsClassroom->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assessments Classrooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assessments Classroom'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessmentsClassrooms view content">
            <h3><?= h($assessmentsClassroom->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Assessment') ?></th>
                    <td><?= $assessmentsClassroom->has('assessment') ? $this->Html->link($assessmentsClassroom->assessment->id, ['controller' => 'Assessments', 'action' => 'view', $assessmentsClassroom->assessment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Classroom') ?></th>
                    <td><?= $assessmentsClassroom->has('classroom') ? $this->Html->link($assessmentsClassroom->classroom->name, ['controller' => 'Classrooms', 'action' => 'view', $assessmentsClassroom->classroom->ID]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assessmentsClassroom->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
