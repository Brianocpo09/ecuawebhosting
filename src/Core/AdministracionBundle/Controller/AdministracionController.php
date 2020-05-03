<?php


namespace App\Core\AdministracionBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdministracionController extends  AbstractController
{
    /**
     * @Route("/{max}", name="number")
     */
    public function number($max=30)
    {
        try {
            $number = random_int(0, $max);
        } catch (\Exception $e) {
        }

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}