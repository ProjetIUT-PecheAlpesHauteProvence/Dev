<div class="users form">
	<h2><?php echo $title_for_layout; ?></h2>
	<?php echo $this->Form->create('User');?>
		<fieldset>
		<?php
			echo $this->Form->input('username', array('label' => 'Nom d\'utilisateur'));
			echo $this->Form->input('password', array('value' => '','label' => 'Mot de passe'));
			echo $this->Form->input('verify_password', array('type' => 'password', 'value' => '', 'label' => 'Confirmation du Mot de passe'));
			echo $this->Form->input('email');
			echo $this->Form->input('verify_email', array('label' => 'Confirmation de l\'Email'));
			echo $this->Form->input('website', array('label' => 'Site Web'));
			echo $this->Form->input('name', array('label' => 'Nom'));
			echo $this->Form->input('firstname', array('label' => 'Prénom'));
			echo $this->Form->input('birthdate', array('label' => 'Date de naissance', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' =>date('Y') - 13));
			echo $this->Form->input('street', array('label' => 'Rue'));
			echo $this->Form->input('zipcode', array('label' => 'Code Postal'));
			echo $this->Form->input('city', array('label' => 'Ville'));

		?>
		</fieldset>
	<?php echo $this->Form->end('S\'inscrire');?>
</div>

