<?php

namespace Application\Grossum\MenuBundle\Menu;

use Doctrine\ORM\EntityManager;

use Grossum\MenuBundle\Handler\AbstractMenuHandler;

class ContactMenuHandler extends AbstractMenuHandler
{
    const IDENTIFIER_CLASS = 'Application\Grossum\ContactBundle\Entity\Contact';

    //TODO: This class only for testing. When we finish we NEED to remove IT;

    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * {@inheritdoc}
     */
    public function generateListUrl()
    {
        return $this->router->generate('admin_grossum_contact_contact_list');
    }

    /**
     * {@inheritdoc}
     */
    public function generateEntityUrl($identifier)
    {
        return $this->router->generate('admin_grossum_contact_contact_edit', ['id' => $identifier]);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentifierClass()
    {
        return self::IDENTIFIER_CLASS;
    }

    public function getIdentifierList()
    {
        $contacts = $this
            ->entityManager
            ->getRepository('ApplicationGrossumContactBundle:Contact')
            ->findAll();

        return $contacts;
    }

    /**
     * @param EntityManager $entityManager
     */
    public function setEntityManager($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return 'Contact';
    }
}
