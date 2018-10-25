<?php
/**
 * Created by PhpStorm.
 * User: marguzych
 * Date: 25.10.18
 * Time: 2:20
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ButtonsController extends AbstractController
{
    /**
     *  сделать страницу с 3 кнопками, реализовать запись в лог,
     * какую кнопку нажал пользователь (без перезагрузки страницы, при помощи ajax)
     */

    /**
     * @Route("/three_buttons")
     * @return Response
     */
    public function index()
    {
        return $this->render(
            'buttons/three_buttons.html.twig');
    }


    /**
     * @Route("/click_button", name="click_button")
     * @param Request $request
     * @return Response
     */
    public function clickButton(Request $request, LoggerInterface $logger) {
        $selected = $request->get('button_id');
        $logger->info("button №$selected is clicked");
        return new Response("<p> $selected </p>");
    }
}