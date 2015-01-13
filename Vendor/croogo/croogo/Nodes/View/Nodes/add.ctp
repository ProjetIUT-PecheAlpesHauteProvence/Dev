<h1>Ajouter un post !</h1>
<?php
    
    echo $this->Form->create('Node', array('type' => 'file'));
    echo $this->Form->input('status', array('type'=>'hidden' , 'value' => 1));
    echo $this->Form->input('promote', array('type'=>'hidden' , 'value' => 1));
    echo $this->Form->input('user_id', array('type'=>'hidden' , 'value' => AuthComponent::User('id')));
    echo $this->Form->input('title',array('label' => 'titre'));
    echo $this->Form->input('slug');
    echo $this->Form->input('body', array('rows' => '3'));

    echo $this->Form->input('file', array(
            'type' => 'file',
            'label' => __d('croogo', 'Upload'),
        ));
    
    // fenetre popu
    echo $this->Html->link(
        'Attachment',
         array(
            'controller' => 'Attachments',
            'action' => 'add',
            'full_base' => true
        ),
        array(
            'onclick'=>"var openWin = window.open('".$this->Html->url(
                '/file_manager/attachments/add',true)."','_blank', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=500,height=500'); return false;"
        )

    );
    echo $this->Form->end('Envoyer');
?>