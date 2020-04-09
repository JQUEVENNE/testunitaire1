<?php


namespace Test;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
 private $user;

    public function setUp(): void
    {
        $this->user = new User('quevenne','julien','julien@adress.fr',35);
 }
    public function testIsValid()
    {
        $this->user->setNom();
        $this->user->setPrenom();
        $this->user->setEmail();
        $this->user->getAge();
    }
}