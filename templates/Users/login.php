<center><?= $this->Html->image('alavanca_logo.png');?></center>
<br/>
<br/>
<br/>
<br/>
<div class="row">
    <div class="column column-50 column-offset-25">
        <?= $this->Form->create() ?>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->button('Login') ?>
        <?= $this->Form->end() ?>   
    </div>
</div>