<?php
class UserController extends Zend_Controller_Action
{
	public function signupAction()
	{
            //Layout for signup page
            $this->_helper->layout->setLayout('signup');

            //Page Heading
            $this->view->pageTitle = "Create your account";

            //Signup form
            $signupForm = new Sanjay_Forms_Signup();

            //Error Messages
            $signupForm->getElement('name')->addErrorMessage('Please enter your name');
            $signupForm->getElement('username')->addErrorMessage('Please enter username');
            $signupForm->getElement('password')->addErrorMessage('Please enter password');
            $signupForm->getElement('email')->addErrorMessage('Please enter your email');
            $signupForm->getElement('phone')->addErrorMessage('Please enter your phone number');

            if($this->getRequest()->isPost())
            {
                if(!$signupForm->isValid($_POST))
                {
                    //Rendering Signup form
                    $this->view->form = $signupForm;
                }
            }
            else
            {
                //Rendering Signup form
                $this->view->form = $signupForm;
            }
            

            
    	
    	/*//Post action
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
}