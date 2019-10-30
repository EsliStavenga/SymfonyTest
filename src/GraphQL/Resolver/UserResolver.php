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

    /**
     * @param User $user
     * @return string
     */
    public function fullname($args) {
        var_dump($args);
        return "test";
    }

}