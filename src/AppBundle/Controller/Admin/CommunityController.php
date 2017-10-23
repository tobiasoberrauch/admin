<?php

namespace AppBundle\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class CommunityController
 *
 * PHP Version 7
 *
 * @category  PHP
 * @package   AppBundle\Controller\Admin
 * @author    Simplicity Trade GmbH <development@simplicity.ag>
 * @copyright 2014-2017 Simplicity Trade GmbH
 * @license   Proprietary http://www.simplicity.ag
 */
class CommunityController extends AdminController
{
    protected function listCommunityAction()
    {
        return new JsonResponse(['foo' => 'bar']);
    }
}