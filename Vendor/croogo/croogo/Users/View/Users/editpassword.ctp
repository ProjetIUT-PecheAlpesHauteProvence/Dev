<div class="users form">
	<h2><?php echo $title_for_layout; ?></h2>
	<fieldset>
	<?php echo $this->Form->create('User');?>
		
		<?php

			echo $this->Form->input('password', array('value' => '','label' => 'Mot de passe'));
			echo $this->Form->input('verify_password', array('type' => 'password', 'value' => '', 'label' => 'Confirmation du Mot de passe'));


		?>
		
	<?php echo $this->Form->end('S\'inscrire');?>
	</fieldset>
</div>

