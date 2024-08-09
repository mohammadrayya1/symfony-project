<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Profile;
use App\Entity\User;
use App\Repository\BookRepository;
use App\Services\CustomLocatorService;
use App\Services\CustomService;
use App\Services\FirstActionService;
use App\Services\FirstClassService;
use App\Services\HeavyService;
use App\Services\Notification;
use App\Services\RundomNummmber;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Factory\InterfaceCustomServiceFactory;
use Symfony\Component\Serializer\SerializerInterface;

class HelloController extends AbstractController
{

    private $logger;
    public $service;
    public $locatorService;
    private Notification $notification;

    public function __construct(LoggerInterface $logger,HeavyService $service ,CustomLocatorService $locatorService,Notification $notification)
    {
        $this->service=$service;
        $this->logger=$logger;
        $this->locatorService=$locatorService;
        $this->notification = $notification;
    }

    public function index($id): Response
    {

        $result=5;
        return $this->render('hello/index.html.twig',['id'=>$id]);
    }

    public  function serv( )
    {


        dd( get_class($this->locatorService->doAction(FirstActionService::class)));
            $nummmber->getNumber();

        return  new Response("Done");
    }


    public  function getAllNotificationsAction( Notification $notification)
    {

        $notifications =$notification->getAllNoti();
        return  new Response($notification);
    }


    public function addPost(string $name,EntityManagerInterface $entityManager)
    {

    $repo= $entityManager->getRepository(Profile::class);
    $p1=$repo->find(9);



            $entityManager->remove($p1);
        $entityManager->flush();
        return new Response("removed");
    }



    public function search(Request $request, BookRepository $bookRepository,string $book,SerializerInterface $serializer): Response
    {



        $books = $bookRepository->searchByTitle($book);
        $data = $serializer->serialize($books, 'json');

        return new JsonResponse($data, 200, [], true);
    }
}
