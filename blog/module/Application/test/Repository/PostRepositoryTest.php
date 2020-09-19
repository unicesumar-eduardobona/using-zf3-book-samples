<?php
namespace ApplicationTest\Repository;

use Zend\Stdlib\ArrayUtils;
use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;

class PostRepositoryTest extends AbstractControllerTestCase
{
    public function setUp()
    {
        $configOverrides = [];
        $this->setApplicationConfig(ArrayUtils::merge(
            include __DIR__ . '/../../../../config/application.config.php',
            $configOverrides
        ));
        parent::setUp();
    }

    public function testFindPostsByTagSemParam()
    {
//        dump($this->getApplication()->getEventManager());
    }

    public function testFindPostsByTagComTag()
    {
        // esperando Objeto X
    }

    public function testFindPostsByTagVerificandoStatusPublicado()
    {
        // esperando exception
    }
}