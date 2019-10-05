<?php
namespace D8devs\D8Karar\Controller;

use D8devs\D8Karar\Controller\Controller;
use \D8devs\D8Karar\Model\Decision;

class IndexController extends Controller {

    public function index()
    {
        $nextDecisions = $this->entityManager->getRepository('D8devs\D8Karar\Model\Decision');
        $nextDecisions = $nextDecisions->findBy(['isNext' => true, 'isAfter' => false]);

        $afterDecisions = $this->entityManager->getRepository('D8devs\D8Karar\Model\Decision');
        $afterDecisions = $afterDecisions->findBy(['isNext' => false, 'isAfter' => true]);

        echo $this->twig->render('index.html',[
            'nextDecisions' => $nextDecisions,
            'afterDecisions' => $afterDecisions,
        ]);
    }
}
