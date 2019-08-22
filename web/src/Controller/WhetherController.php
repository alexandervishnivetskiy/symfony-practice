<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Routing\Annotation\Route;


class WhetherController
{
    private const TOKEN = '56b30cb255.3443075';
    /**
     * @Route("/")
     */
    public function action()
    {
        $key = 'f1337ef42bc42b09b719c3dd83e62480';
        $keyName = 'test_key';
    }

}