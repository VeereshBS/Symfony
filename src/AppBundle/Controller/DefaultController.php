<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $client = new \Github\Client();


        $repositories = $client->api('user')->repositories('symfony');
        foreach ($repositories as $repo) {

            $githubRepoid = $repo['id'];
            $name = $repo['name'];
            $fullname = $repo['full_name'];
            $htmlUrl = $repo['html_url'];
            $description = $repo['description'];
            $gitUrl = $repo['git_url'];

            $repo = new \AppBundle\Entity\repositories();
            $repo->setGithubRepoid($githubRepoid);
            $repo->setName($name);
            $repo->setFullname($fullname);
            $repo->setHtmlUrl($htmlUrl);
            $repo->setDescription($description);
            $repo->setGitUrl($gitUrl);
            $em = $this->getDoctrine()->getManager();
            $em->persist($repo);
            $em->flush();
        }
        $ouput = $this->getDoctrine()->getRepository('AppBundle:repositories')->findAll();

        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:repositories a";
        $query = $em->createQuery($dql);

        /*
         * @var $paginator Knp\Component\Pager\Paginator
         *          
         */

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, /* query NOT result */ $request->query->getInt('page', 1)/* page number */, 10/* limit per page */
        );



        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array('pagination' => $pagination));
    }

}
