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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemAnswer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemAnswer->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Item Answers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemAnswers form content">
            <?= $this->Form->create($itemAnswer) ?>
            <fieldset>
                <legend><?= __('Edit Item Answer') ?></legend>
                <?php
                    echo $this->Form->control('student_id', ['options' => $students, 'empty' => true]);
                    echo $this->Form->control('assessment_id', ['options' => $assessments, 'empty' => true]);
                    echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
                    echo $this->Form->control('dateTime', ['empty' => true]);
                    echo $this->Form->control('answer');
                    echo $this->Form->control('duration');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
