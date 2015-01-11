<?php

//important
echo $this->Form->create('Attachment', array('type' => 'file'));
echo $this->Form->input('file', array(
			'type' => 'file',
			'label' => __d('croogo', 'Upload'),
		));
echo $this->Form->end('Ajouter');