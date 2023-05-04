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
            <?= $this->Html->link(__('Edit Assesstements Item'), ['action' => 'edit', $assesstementsItem->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assesstements Item'), ['action' => 'delete', $assesstementsItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assesstementsItem->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assesstements Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assesstements Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assesstementsItems view content">
            <h3><?= h($assesstementsItem->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= $assesstementsItem->has('item') ? $this->Html->link($assesstementsItem->item->name, ['controller' => 'Items', 'action' => 'view', $assesstementsItem->item->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Assessment') ?></th>
                    <td><?= $assesstementsItem->has('assessment') ? $this->Html->link($assesstementsItem->assessment->id, ['controller' => 'Assessments', 'action' => 'view', $assesstementsItem->assessment->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assesstementsItem->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
