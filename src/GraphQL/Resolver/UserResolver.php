<?php


namespace App\GraphQL\Resolver;


use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use GraphQL\Type\Definition\ResolveInfo;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

/**
 * Class UserResolver
 * @package App\GraphQL\Resolver
 */
class UserResolver implements ResolverInterface
{

    public function loggedInUser() {
        $user = new User();
        $user->email = "asd";
        $user->firstname = "Test";
        $user->lastname = "Test1q23123123";

        return $user;
    }

    public function fullname(User $user) {
        return "test";
    }

}