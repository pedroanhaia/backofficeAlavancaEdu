<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classroom $classroom
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Classrooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classrooms form content">
            <?= $this->Form->create($classroom) ?>
            <fieldset>
                <legend><?= __('Add Classroom') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('school_id', ['options' => $schools, 'empty' => true]);
                    echo $this->Form->control('assessments._ids', ['options' => $assessments]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
