<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;

class InvoiceIncrementationController 
{
    private $manager;

    public function __construct(EntityManagerInterface $manager) 
    {
        $this->manager = $manager;
    }

    public function __invoke(Invocice $data)
    {   
        $data->setChrono($data->getChrono() + 1);
        $this->manager->persist($data);
        $this->manager->flush();
        return $data;
        
    }

}

