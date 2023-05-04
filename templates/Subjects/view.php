<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Subjects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subjects view content">
            <h3><?= h($subject->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subject->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subject->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($subject->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Department Id') ?></th>
                            <th><?= __('Subject Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Statement') ?></th>
                            <th><?= __('Option 1') ?></th>
                            <th><?= __('Option 2') ?></th>
                            <th><?= __('Option 3') ?></th>
                            <th><?= __('Option 4') ?></th>
                            <th><?= __('Correnct Answer') ?></th>
                            <th><?= __('Shareable') ?></th>
                            <th><?= __('Bncc Ref') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subject->items as $items) : ?>
                        <tr>
                            <td><?= h($items->id) ?></td>
                            <td><?= h($items->department_id) ?></td>
                            <td><?= h($items->subject_id) ?></td>
                            <td><?= h($items->name) ?></td>
                            <td><?= h($items->statement) ?></td>
                            <td><?= h($items->option_1) ?></td>
                            <td><?= h($items->option_2) ?></td>
                            <td><?= h($items->option_3) ?></td>
                            <td><?= h($items->option_4) ?></td>
                            <td><?= h($items->correnct_answer) ?></td>
                            <td><?= h($items->shareable) ?></td>
                            <td><?= h($items->bncc_ref) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
