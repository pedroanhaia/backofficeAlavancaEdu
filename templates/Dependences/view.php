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
            <?= $this->Html->link(__('Edit Dependence'), ['action' => 'edit', $dependence->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dependence'), ['action' => 'delete', $dependence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependence->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dependences'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dependence'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dependences view content">
            <h3><?= h($dependence->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($dependence->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dependence->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Departments') ?></h4>
                <?php if (!empty($dependence->departments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Dependence Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dependence->departments as $departments) : ?>
                        <tr>
                            <td><?= h($departments->id) ?></td>
                            <td><?= h($departments->location_id) ?></td>
                            <td><?= h($departments->dependence_id) ?></td>
                            <td><?= h($departments->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
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
