<?php


namespace App\GraphQL\Query;

use App\Entity\User;
use App\GraphQL\Input\UserInput;
use App\GraphQL\Resolver\UserResolver;
use GraphQL\Type\Definition\ResolveInfo;
use Overblog\GraphQLBundle\Annotation as GQL;
use Overblog\GraphQLBundle\Definition\Argument;

/**
 * Class RootQuery
 * @package App\GraphQL\Query\RootQuery
 * @GQL\Type
 */
class RootQuery
{
    /**
     * @GQL\Field(name="test", type="Boolean")
     */
    public function test()
    {
        return rand(0, 1) > 0.5;
    }


    /* ================= USER QUERIES ======================= */

    public function getUserById(UserInput $userInput) {

    }

}