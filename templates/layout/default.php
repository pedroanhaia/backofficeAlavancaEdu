<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Alavanca Edu: 
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'fontawesome/css/all.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	<?php if (!($this->name == "Users")): ?>
    <nav class="top-nav" style="max-width: 100%; justify-content:center">
        <div class="top-nav-links">		
            <?= $this->Html->link('<i class="fa fa-users"></i> ' . __('Users'), '/users', ['escape' => false, 'class' => 'button button-outline']);?>
            <?= $this->Html->link('<i class="fa fa-user-graduate"></i> ' . __('Students'), '/students', ['escape' => false, 'class' => 'button button-outline']);?>
            <?= $this->Html->link('<i class="fa fa-book-reader"></i> ' . __('Items'), '/items', ['escape' => false, 'class' => 'button button-outline']);?>
            <?= $this->Html->link('<i class="fa fa-book"></i> ' . __('Assessments'), '/assessments', ['escape' => false, 'class' => 'button button-outline']);?>
            <?= $this->Html->link('<i class="fa fa-building"></i> ' . __('Departments'), '/departments', ['escape' => false, 'class' => 'button button-outline']);?>
            <?= $this->Html->link('<i class="fa fa-university"></i> ' . __('Schools'), '/schools', ['escape' => false, 'class' => 'button button-outline']);?>
            <?= $this->Html->link('<i class="fa fa-chalkboard-teacher"></i> ' . __('Classrooms'), '/classrooms', ['escape' => false, 'class' => 'button button-outline']);?>
        </div>
    </nav>
    <?php endif; ?>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
