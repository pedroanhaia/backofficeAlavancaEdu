<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependence $dependence
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dependence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dependence->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dependences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dependences form content">
            <?= $this->Form->create($dependence) ?>
            <fieldset>
                <legend><?= __('Edit Dependence') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
