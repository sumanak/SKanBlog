<?php

//src/SKanBlog/BlogBundle/Controller/PageController.php

namespace SKanBlog\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function indexAction()
	{
		return $this->render('SKanBlogBundle:Page:index.html.twig');
	}
}