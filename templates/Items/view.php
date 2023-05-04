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
            <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="items view content">
            <h3><?= h($item->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $item->has('department') ? $this->Html->link($item->department->name, ['controller' => 'Departments', 'action' => 'view', $item->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subject') ?></th>
                    <td><?= $item->has('subject') ? $this->Html->link($item->subject->name, ['controller' => 'Subjects', 'action' => 'view', $item->subject->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($item->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bncc Ref') ?></th>
                    <td><?= h($item->bncc_ref) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($item->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correnct Answer') ?></th>
                    <td><?= $this->Number->format($item->correnct_answer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shareable') ?></th>
                    <td><?= $item->shareable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Statement') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->statement)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Option 1') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->option_1)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Option 2') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->option_2)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Option 3') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->option_3)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Option 4') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->option_4)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Assesstements Items') ?></h4>
                <?php if (!empty($item->assesstements_items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Assessment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->assesstements_items as $assesstementsItems) : ?>
                        <tr>
                            <td><?= h($assesstementsItems->id) ?></td>
                            <td><?= h($assesstementsItems->item_id) ?></td>
                            <td><?= h($assesstementsItems->assessment_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AssesstementsItems', 'action' => 'view', $assesstementsItems->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AssesstementsItems', 'action' => 'edit', $assesstementsItems->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AssesstementsItems', 'action' => 'delete', $assesstementsItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assesstementsItems->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Item Answers') ?></h4>
                <?php if (!empty($item->item_answers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Assessment Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('DateTime') ?></th>
                            <th><?= __('Answer') ?></th>
                            <th><?= __('Duration') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->item_answers as $itemAnswers) : ?>
                        <tr>
                            <td><?= h($itemAnswers->id) ?></td>
                            <td><?= h($itemAnswers->student_id) ?></td>
                            <td><?= h($itemAnswers->assessment_id) ?></td>
                            <td><?= h($itemAnswers->item_id) ?></td>
                            <td><?= h($itemAnswers->dateTime) ?></td>
                            <td><?= h($itemAnswers->answer) ?></td>
                            <td><?= h($itemAnswers->duration) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ItemAnswers', 'action' => 'view', $itemAnswers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ItemAnswers', 'action' => 'edit', $itemAnswers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItemAnswers', 'action' => 'delete', $itemAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemAnswers->id)]) ?>
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
