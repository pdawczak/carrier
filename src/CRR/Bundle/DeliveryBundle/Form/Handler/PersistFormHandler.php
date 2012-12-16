<?php

namespace CRR\Bundle\DeliveryBundle\Form\Handler;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Doctrine\ORM\EntityManager;

class PersistFormHandler
{
    /**
     * @var \Symfony\Component\Form\Form
     */
    protected $form;

    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    public function __construct(Request $request, EntityManager $em)
    {
        $this->request  = $request;
        $this->em       = $em;
    }

    /**
     * @param \Symfony\Component\Form\Form $form
     * @return bool
     */
    public function process(Form $form)
    {
        $this->form = $form;

        if(in_array($this->request->getMethod(), array('POST', 'PUT')))
        {
            $this->form->bind($this->request);

            if ($this->form->isValid())
            {
                $this->onSuccess();
                return true;
            }
        }
        return false;
    }

    protected function onSuccess()
    {
        $data = $this->form->getData();
        $this->em->persist($data);
        $this->em->flush();
    }
}
