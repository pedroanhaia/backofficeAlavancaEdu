<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssesstementsItem $assesstementsItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Assesstements Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assesstementsItems form content">
            <?= $this->Form->create($assesstementsItem) ?>
            <fieldset>
                <legend><?= __('Add Assesstements Item') ?></legend>
                <?php
                    echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
                    echo $this->Form->control('assessment_id', ['options' => $assessments, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
