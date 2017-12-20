<?php

namespace Autourdujeu\GameBundle\Controller;

use Autourdujeu\GameBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Validator\Constraints\Image;

/**
 * gestion des Jeux
 *
 * Class DefaultController
 * @package Autourdujeu\GameBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Default
     *
     * @Route("/", name="test")
     */
    public function indexAction(Request $request)
    {
        //return $this->render('AutourdujeuGameBundle:Default:index.html.twig');
        return $this->addPictures($request, 'test');
    }

    /**
     * Ajout d'image
     */
    public function addPictures(Request $request, $name)
    {
        $data = [
            'img' => [
                new Type\TextType()
            ]
        ];

        $form = $this
            ->get('form.factory')
            ->createNamedBuilder($name, Type\FormType::class, $data)
            ->add('img', Type\CollectionType::class, [
                'label'        => 'List and order your fruits by preference.',
                'allow_add'    => true,
                'allow_delete' => true,
                'prototype'    => true,
                'required'     => false,
                'attr'         => [
                    'class' => "{$name}-collection",
                ],
            ])
            ->add('submit', Type\SubmitType::class)
            ->getForm()
        ;

        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
        }

        return [
            $name         => $form->createView(),
            "{$name}Data" => $data,
        ];
    }
}
