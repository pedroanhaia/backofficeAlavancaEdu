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
            <?= $this->Html->link(__('Edit Classroom'), ['action' => 'edit', $classroom->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Classroom'), ['action' => 'delete', $classroom->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $classroom->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Classrooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Classroom'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classrooms view content">
            <h3><?= h($classroom->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($classroom->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('School') ?></th>
                    <td><?= $classroom->has('school') ? $this->Html->link($classroom->school->name, ['controller' => 'Schools', 'action' => 'view', $classroom->school->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($classroom->ID) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Assessments') ?></h4>
                <?php if (!empty($classroom->assessments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Assessment Template Id') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Guidelines') ?></th>
                            <th><?= __('Starts At') ?></th>
                            <th><?= __('Ends At') ?></th>
                            <th><?= __('Duration') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($classroom->assessments as $assessments) : ?>
                        <tr>
                            <td><?= h($assessments->id) ?></td>
                            <td><?= h($assessments->assessment_template_id) ?></td>
                            <td><?= h($assessments->token) ?></td>
                            <td><?= h($assessments->guidelines) ?></td>
                            <td><?= h($assessments->starts_at) ?></td>
                            <td><?= h($assessments->ends_at) ?></td>
                            <td><?= h($assessments->duration) ?></td>
                            <td><?= h($assessments->created) ?></td>
                            <td><?= h($assessments->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Assessments', 'action' => 'view', $assessments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Assessments', 'action' => 'edit', $assessments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assessments', 'action' => 'delete', $assessments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Students') ?></h4>
                <?php if (!empty($classroom->students)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Classroom Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($classroom->students as $students) : ?>
                        <tr>
                            <td><?= h($students->id) ?></td>
                            <td><?= h($students->classroom_id) ?></td>
                            <td><?= h($students->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
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
