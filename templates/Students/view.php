<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Classroom') ?></th>
                    <td><?= $student->has('classroom') ? $this->Html->link($student->classroom->name, ['controller' => 'Classrooms', 'action' => 'view', $student->classroom->ID]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Item Answers') ?></h4>
                <?php if (!empty($student->item_answers)) : ?>
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
                        <?php foreach ($student->item_answers as $itemAnswers) : ?>
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
