<?php
class Sanjay_Forms_Signup extends Zend_Form
{
    public function __construct($options=null)
    {
        parent::__construct($options);
        $this->setName('signup');
        
        $name = new Zend_Form_Element_Text('name');
        $name->setLabel("Name:")
             ->setRequired(true);

        $username = new Zend_Form_Element_Text('username');
        $username->setLabel('Username')
                ->addValidator('stringLength', false, array(6, 20))
                ->setRequired(true);

        $password = new Zend_Form_Element_Text('password');
        $password->setLabel('Password')
                 ->addValidator('stringLength', false, array(6, 20))
                 ->setRequired(true);

        $email = new Zend_Form_Element_Text('email');
        $email->setLabel('Email:')
              ->setRequired(true);

        $phone = new Zend_Form_Element_Text('phone');
        $phone->setLabel('Phone')
              ->setRequired(true);

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setLabel('Register');
        

        $this->addElements(array($name, $username, $password, $email, $phone, $submit));
    }
}