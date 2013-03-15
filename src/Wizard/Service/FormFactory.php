<?php
namespace Wizard\Service;

use Zend\Form\Form;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FormFactory implements FactoryInterface
{
    /**
     * @param  ServiceLocatorInterface $serviceLocator
     * @return Client
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $form = new Form();
        $form
            ->add($serviceLocator->get('Wizard\Form\Element\Button\Previous'))
            ->add($serviceLocator->get('Wizard\Form\Element\Button\Next'))
            ->add($serviceLocator->get('Wizard\Form\Element\Button\Valid'));

        return $form;
    }
}