<?php

namespace Application\form;
use Zend\Form\Form;
use Zend\Form\Element\Hidden;
use Zend\Form\Element\Text;
use Zend\Form\Element\File;
use Zend\Form\Element\Textarea;
use Zend\Form\Element\Checkbox;  
use Zend\Form\Element\Button;

class ProdutoForm extends Form{
    
    public function __construct($name = null) {
        parent::__construct('produto');
        
        $id=       new Hidden('produto_id');
        
        $nome=     new Text('produto_nome');
        $nome->setLabel('Nome:')
            ->setAttribute(array(
                'style'=> 'width:150px;'
                
            ));
        $preco=     new Text('produto_preco');
        $preco->setLabel('Preço:')
            ->setAttribute(array(
                'style'=> 'width:60px;'
                
            ));
        $foto=     new File('produto_foto');
        $foto->setLabel('Foto:')
            ->setAttribute(array(
                'style'=> 'width:150px;'
                
            ));
        
        $descricao=     new Textarea('produto_descricao');
        $descricao ->setLabel('Descrição:')
            ->setAttribute(array(
                'style'=> 'width:60px; heght 100px;'
            ));
        
        $status=     new Checkbox('produto_status');
        $status->setLabel('Status:')
               ->setValue(1);
        
        $submit=    new Button();
        $descricao ->setLabel('Cadastrar')
             ->setAttribute(array('type'=>'submit'
            ));
}
}

?>