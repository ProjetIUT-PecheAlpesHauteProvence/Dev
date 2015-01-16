<h1>Ajouter un post !</h1>
<?php
    
    // form for post add
    echo $this->Form->create('Node', array('type' => 'file'));

    // hidden fields
    echo $this->Form->input('status', array('type'=>'hidden' , 'value' => 1));
    echo $this->Form->input('promote', array('type'=>'hidden' , 'value' => 1));
    echo $this->Form->input('user_id', array('type'=>'hidden' , 'value' => AuthComponent::User('id')));

    // fields not hidden
    echo $this->Form->input('title',array('label' => 'titre'));
    echo $this->Form->input('slug');
    echo $this->Form->input('body', array('rows' => '3'));

    // button for add an attachments
    echo $this->Form->input('file', array(
            'type' => 'file',
            'label' => __d('croogo', 'Upload'),
        ));
    
    // end of the form with send of the data to NodeController
    echo $this->Form->end('Envoyer');
?>