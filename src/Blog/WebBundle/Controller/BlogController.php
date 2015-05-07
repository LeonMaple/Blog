<?php
/**
 * Created by PhpStorm.
 * User: kaota002
 * Date: 15/4/29
 * Time: 下午6:59
 */

namespace Blog\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }

    /**
     * @Route("/caselist")
     * @Template()
     */
    public function caselistAction()
    {
        return array();
    }

    /**
     * @Route("/knowledge")
     * @Template()
     */
    public function knowledgeAction()
    {
        return array();
    }

    /**
     * @Route("/moodlist")
     * @Template()
     */
    public function moodlistAction()
    {
        return array();
    }

    /**
     * @Route("/new")
     * @Template()
     */
    public function newAction()
    {
        return array();
    }

    /**
     * @Route("/newlist")
     * @Template()
     */
    public function newlistAction()
    {
        return array();
    }

    /**
     * @Route("/share")
     * @Template()
     */
    public function shareAction()
    {
        return array();
    }

    /**
     * @Route("/template")
     * @Template()
     */
    public function templateAction()
    {
        return array();
    }

}