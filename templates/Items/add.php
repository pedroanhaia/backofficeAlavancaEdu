<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
                    echo $this->Form->control('subject_id', ['options' => $subjects, 'empty' => true]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('statement');
                    echo $this->Form->control('option_1');
                    echo $this->Form->control('option_2');
                    echo $this->Form->control('option_3');
                    echo $this->Form->control('option_4');
                    echo $this->Form->control('correnct_answer');
                    echo $this->Form->control('shareable');
                    echo $this->Form->control('bncc_ref');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
