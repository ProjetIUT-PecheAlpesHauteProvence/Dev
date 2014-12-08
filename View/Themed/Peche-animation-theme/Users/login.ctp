<div class="users form">
	<h2>Connexion</h2>
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'),'role'=>'form', 'class'=> 'form-horizontal col-md-12'));?>
		<?php
		echo '<div class="form-group">';
			echo $this->Form->input('username',array('label'=> array('text'=>'Nom D\'utilisateur','class'=>'col-md-4'),'class'=>'col-md-8'));
		echo '</div><div class="form-group">';
			echo $this->Form->input('password',array('label'=> array('text'=>'Mot de passe','class'=>'col-md-4'),'class'=>'col-md-8'));
		echo '</div>';
		$option = array(
				'class'=>'btn btn-default col-md-10',
				"type"=>'submit',
				'label'=>'Connexion');
		?>
	<?php echo $this->Form->end($option);?>
</div>