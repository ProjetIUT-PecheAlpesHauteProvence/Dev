<div class="users form">
	<h2><?php echo $title_for_layout; ?></h2>
	<fieldset>
	<?php echo $this->Form->create('User');?>
		
		<?php
			echo $this->Form->input('username', array('label' => 'Nom d\'utilisateur'));
			echo $this->Form->input('email');
			echo $this->Form->input('website', array('label' => 'Site Web'));
			echo $this->Form->input('name', array('label' => 'Nom'));
			echo $this->Form->input('firstname', array('label' => 'Prénom'));
			echo $this->Form->input('street', array('label' => 'Rue'));
			echo $this->Form->input('zipcode', array('label' => 'Code Postal'));
			echo $this->Form->input('city', array('label' => 'Ville'));

		?>
		
	<?php echo $this->Form->end('Sauvegarder');?>
	</fieldset>
</div>

