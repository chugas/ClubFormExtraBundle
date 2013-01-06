<?php

namespace Club\FormExtraBundle\Twig;

class ApplicationExtension extends \Twig_Extension
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getGlobals()
    {
        return array(
            'club_title' => $this->container->getParameter('club_form_extra.title')
        );
    }

    public function getName()
    {
        return 'club_application';
    }
}
