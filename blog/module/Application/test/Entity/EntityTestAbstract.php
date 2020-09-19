<?php
namespace ApplicationTest\Entity;

use Zend\Test\PHPUnit\Controller\AbstractControllerTestCase;

abstract class EntityTestAbstract extends AbstractControllerTestCase
{
    protected $entityClass;
    protected $reflection;

    public function testSeFoiImplementadoInterfaceDatas()
    {
        $reflector = $this->getReflection($this->entityClass);
        $interfaces = $reflector->getInterfaceNames();
        $this->assertContains('Application\Entity\DataCreatedAndUpdatedInterface', $interfaces);
    }

    public function testSeFoiAbstraidoEntityAbstract()
    {
        $reflector = $this->getReflection($this->entityClass);
        $name = $reflector->getParentClass()->getName();
        $this->assertEquals('Application\Entity\EntityAbstract', $name);
    }

    protected function getReflection($entityClass)
    {
        if ($this->reflection) {
            return $this->reflection;
        }
        return $this->reflection = new \ReflectionClass($entityClass);
    }
}