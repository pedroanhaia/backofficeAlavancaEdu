<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentTemplate $assessmentTemplate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Assessment Template'), ['action' => 'edit', $assessmentTemplate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Assessment Template'), ['action' => 'delete', $assessmentTemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentTemplate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Assessment Templates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Assessment Template'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="assessmentTemplates view content">
            <h3><?= h($assessmentTemplate->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($assessmentTemplate->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($assessmentTemplate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($assessmentTemplate->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($assessmentTemplate->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Guidelines') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($assessmentTemplate->guidelines)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Assessments') ?></h4>
                <?php if (!empty($assessmentTemplate->assessments)) : ?>
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
                        <?php foreach ($assessmentTemplate->assessments as $assessments) : ?>
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
        </div>
    </div>
</div>
