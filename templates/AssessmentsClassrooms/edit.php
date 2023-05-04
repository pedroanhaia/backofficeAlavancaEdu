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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assessmentsClassroom->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentsClassroom->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Assessments Classrooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessmentsClassrooms form content">
            <?= $this->Form->create($assessmentsClassroom) ?>
            <fieldset>
                <legend><?= __('Edit Assessments Classroom') ?></legend>
                <?php
                    echo $this->Form->control('assessment_id', ['options' => $assessments, 'empty' => true]);
                    echo $this->Form->control('classroom_id', ['options' => $classrooms, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
