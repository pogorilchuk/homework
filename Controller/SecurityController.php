<?php

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $form = new loginForm($request);
        $msg = null;

        if ($request->isPost()){
            if ($form->isValid()){
                //todo: auth
            } else {
                $msg = 'Invalid';
            }
        }
        
        $args = compact('form', 'msg');

        return $this->render('login', $args);
    }

    public function logoutAction()
    {
        
    }

    public function registerAction()
    {
        
    }
}