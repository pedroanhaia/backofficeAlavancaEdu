<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit School'), ['action' => 'edit', $school->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete School'), ['action' => 'delete', $school->id], ['confirm' => __('Are you sure you want to delete # {0}?', $school->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Schools'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New School'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="schools view content">
            <h3><?= h($school->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($school->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Department') ?></th>
                    <td><?= $school->has('department') ? $this->Html->link($school->department->name, ['controller' => 'Departments', 'action' => 'view', $school->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($school->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Classrooms') ?></h4>
                <?php if (!empty($school->classrooms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('School Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($school->classrooms as $classrooms) : ?>
                        <tr>
                            <td><?= h($classrooms->ID) ?></td>
                            <td><?= h($classrooms->name) ?></td>
                            <td><?= h($classrooms->school_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classrooms', 'action' => 'view', $classrooms->ID]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classrooms', 'action' => 'edit', $classrooms->ID]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classrooms', 'action' => 'delete', $classrooms->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $classrooms->ID)]) ?>
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
