<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function signupAction()
    {
        /*//Layout for signup page
    	$this->_helper->layout->setLayout('signup');
    	
    	//Post action
    	if($this->getRequest()->isPost())
    	{
    		//Post data
    		$signupValidationResult = self::validateSignupForm($this->getRequest()->getParams());
    		
    		//If error exists
    		if( count($signupValidationResult)>0 )
    		{
    			//Render error messages and post data
    			$this->view->errorMessage = $signupValidationResult;
    			$this->view->postInfo = $this->getRequest()->getParams();
    		}
    		else 
    		{
    			$this->view->postInfo = $this->getRequest()->getParams();
    			
    			$userInfo = array();
    			$userInfo['name'] = $this->view->postInfo['name'];
    			$userInfo['username'] = $this->view->postInfo['username'];
    			$userInfo['password'] = $this->view->postInfo['password'];
    			$userInfo['email'] = $this->view->postInfo['email'];
    			$userInfo['phone'] = $this->view->postInfo['phone'];

    			
    		}
    	}*/
    }
    
    private function validateSignupForm($postval)
    {
    	// Validation array initialized as blank
    	$validationArray = array();
    	
    	//Name vaidation
    	if( empty($postval['name']) )
    	{
    		$validationArray['name'] = 'Please enter your name';
    	}
    	
    	//Username validation
    	if( empty($postval['username']) )
    	{
    		$validationArray['username'] = 'Please enter your username';
    	}
    	elseif( (strlen($postval['username']) < 6) || (strlen($postval['username']) > 12) )
    	{
    		$validationArray['username'] = 'Username length should be 6 to 12';
    	}
    	else
    	{
    		
    	}
    	
    	//Password validation
    	if( empty($postval['password']) )
    	{
    		$validationArray['password'] = 'Please enter the password';
    	}
    	elseif( (strlen($postval['password']) < 6) || (strlen($postval['password']) > 12) )
    	{
    		$validationArray['password'] = 'Password length should be 6 to 12';
    	}
    	else
    	{
    		
    	}
    	
    	//Email address validation
    	$emailValidator = new Zend_Validate_EmailAddress();
    	if( empty($postval['email']) )
    	{
    		$validationArray['email'] = 'Please enter your email';
    	}
    	elseif (!$emailValidator->isValid($postval['email'])) 
    	{
    		$validationArray['email'] = 'Please enter your email in right format';
    	}
    	else
    	{
    		
    	}
    	
    	//Phone number validation
    	if ( empty($postval['phone']) )
    	{
    		$validationArray['phone'] = 'Please enter your phone number';
    	}
    	
    	return $validationArray;
    	
    }


}



