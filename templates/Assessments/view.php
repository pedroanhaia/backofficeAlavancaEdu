<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assessment $assessment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assessment'), ['action' => 'edit', $assessment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assessment'), ['action' => 'delete', $assessment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assessments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assessment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessments view content">
            <h3><?= h($assessment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Assessment Template') ?></th>
                    <td><?= $assessment->has('assessment_template') ? $this->Html->link($assessment->assessment_template->title, ['controller' => 'AssessmentTemplates', 'action' => 'view', $assessment->assessment_template->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Token') ?></th>
                    <td><?= h($assessment->token) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assessment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duration') ?></th>
                    <td><?= $this->Number->format($assessment->duration) ?></td>
                </tr>
                <tr>
                    <th><?= __('Starts At') ?></th>
                    <td><?= h($assessment->starts_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ends At') ?></th>
                    <td><?= h($assessment->ends_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($assessment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($assessment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Guidelines') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($assessment->guidelines)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Classrooms') ?></h4>
                <?php if (!empty($assessment->classrooms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('School Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($assessment->classrooms as $classrooms) : ?>
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
            <div class="related">
                <h4><?= __('Related Assesstements Items') ?></h4>
                <?php if (!empty($assessment->assesstements_items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Assessment Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($assessment->assesstements_items as $assesstementsItems) : ?>
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
                <?php if (!empty($assessment->item_answers)) : ?>
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
                        <?php foreach ($assessment->item_answers as $itemAnswers) : ?>
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
