<?php
namespace ApplicationTest\Entity;

use Application\Entity\Post;

class PostTest extends EntityTestAbstract
{
    protected $entityClass = Post::class;

    public function testSeCategoriaExiste()
    {
        $reflection = $this->getReflection($this->entityClass);
        $this->assertEquals('category', $reflection->getProperty('category')->getName());
    }
}