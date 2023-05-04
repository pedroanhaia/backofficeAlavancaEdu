<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentTemplate $assessmentTemplate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assessmentTemplate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentTemplate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Assessment Templates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessmentTemplates form content">
            <?= $this->Form->create($assessmentTemplate) ?>
            <fieldset>
                <legend><?= __('Edit Assessment Template') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('guidelines');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
