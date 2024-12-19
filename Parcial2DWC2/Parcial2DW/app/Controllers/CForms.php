<?php

namespace App\Controllers;

class CForms extends BaseController
{
    public function inicio(): string
    {
        $session = session();
        if (!$session->has('board')) {
            $session->set('board', array_fill(0, 9, ''));
            $session->set('turn', 'X');
            $session->set('message', '');
        }
        $message = $session->get('message');
        
        return view('\Carpeta2\Index2', [
            'board' => $session->get('board'),
            'turn' => $session->get('turn'),
            'message' => $message,
        ]);
    }
    
}