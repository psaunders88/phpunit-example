<?php

namespace Test\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * Index Action
     *
     * @return response
     */
    public function indexAction($firstNumber, $secondNumber)
    {
        $response = $this->get('manager')->addAndWordify($firstNumber, $secondNumber);

        return $this->render(
            'TestTestBundle:Default:index.html.twig',
            array(
                'total' => $response
            )
        );
    }
}
