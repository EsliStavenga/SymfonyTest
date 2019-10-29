<?php


namespace App\GraphQL\Input;

use Overblog\GraphQLBundle\Annotation as GQL;

/**
 * Class UserInput
 * @package App\Input
 * @GQL\Input
 */
class UserInput
{

    /**
     * @GQL\Field(type="String!")
     *
     * @var String
     */
    public $email;

}