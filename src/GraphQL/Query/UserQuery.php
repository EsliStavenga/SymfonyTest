<?php


namespace App\GraphQL\Query;

use App\Entity\User;
use App\GraphQL\Input\UserInput;
use App\GraphQL\Resolver\UserResolver;
use App\Repository\UserRepository;
use Overblog\GraphQLBundle\Annotation as GQL;
use Overblog\GraphQLBundle\Definition\Argument;

/**
 * Class UserQuery
 * @package App\RootQuery
 * @GQL\Provider
 */
class UserQuery
{

    private $userResolver;
    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserResolver $userResolver, UserRepository $userRepository) {
        $this->userResolver = $userResolver;
        $this->repository = $userRepository;
    }

    /**
     * @GQL\Query(name="loggedInUser", type="User")
     * @return User|null
     */
    public function getLoggedInUser() {
        return $this->userResolver->loggedInUser();
    }

    /**
     * @param UserInput $userInput
     * @param Argument $args
     * @return User|null
     * @GQL\Query(name="userByEmail", type="User")
     *
     */
    public function getUserByEmail(UserInput $userInput) {
//        var_dump($args);
        return $this->repository->findOneBy(["email" => $userInput->email]);
    }


    /**
     * @GQL\Query(name="userById", type="User!")
     */
    public function getUserById(UserInput $userInput) : User {
        $user = new User();
        $user->email = "asd";
        $user->firstname = "Test";

        return $user;
    }

}