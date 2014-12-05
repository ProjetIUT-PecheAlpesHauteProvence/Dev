<div class="users form">
	<h2><?php echo __d('croogo', 'Login'); ?></h2>
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
		<fieldset>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?php echo $this->Form->end('Submit');?>

	<?= $this->html->link('TEST' , array('plugin' => 'nodes', 'controller' => 'nodes', 'action' => 'promoted')); ?>
</div>