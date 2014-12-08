<div class="users form">
	<h2><?php echo $title_for_layout; ?></h2>
	
	<?php echo $this->Form->create('User',array('role'=>'form' , 'class'=>"form-horizontal"));?>
		<div class="form-group">
			<?= $this->Form->input('username', array('label' => array('text'=>'Nom d\'utilisateur','class'=>'col-md-5 text-right'),'class'=>'col-md-5')); ?>
		</div>

		<div class="form-group">
			<?= $this->Form->input('password', array('value' => '','label' => array('text'=>'Mot de passe','class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('verify_password', array('type' => 'password', 'value' => '', 'label' => array('text'=>'Confirmation du Mot de passe', 'class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('email',array('label'=>array('text'=> 'Email', 'class'=> 'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('verify_email', array('label' => array('text'=>'Confirmation de l\'Email','class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('website', array('label' => array('text'=>'Site Web','class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group ">
			<?= $this->Form->input('name', array('label' => array('text'=>'Nom','class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('firstname', array('label' => array('text'=>'Prénom','class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group ">
			<?= $this->Form->input('birthdate', array('label' =>array('text'=>'Date de naissance', 'class'=>'col-md-5 text-right'),'class'=>'col-md-5', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 100, 'maxYear' =>date('Y') - 13));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('street', array('label' => array('text'=>'Rue', 'class'=>'col-md-5 text-right'),'class'=>'col-md-5'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('zipcode', array('label' => array('text'=>'Code Postal','class'=>'col-md-5 text-right'),'class'=>'col-md-2'));?>
		</div>
		<div class="form-group">
			<?= $this->Form->input('city', array('label' => array('text'=>'Ville','class'=>'col-md-5 text-right'), 'class'=>'col-md-5'));?>
		</div>

		
		<?php 
			$option = array(
				'class'=>'btn btn-default col-md-10',
				"type"=>'submit',
				'label'=>'S\'inscrire');
			echo $this->Form->end($option);?>
</div>