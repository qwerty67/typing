<?php

namespace App\Endpoints\User;


use App\Structures\Abstracts\EndpointAbstract;
use App\Structures\Interfaces\Repository\UserInterface;

class User extends EndpointAbstract
{

    /**
     * @param $income
     * @return \App\User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function readUserById($income)
    {
//        /** @var \App\Structures\Interfaces\Repository\UserInterface $repository */
        /** @var \App\Repository\User\UserRepository $repository */
        $repository = app(UserInterface::class);

        return $repository->findById($income);

    }

    /**
     * @param $income
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     */
    public function SignUp($income)
    {
        /** @var \App\Repository\User\UserRepository $signUpRepo */
        $signUpRepo = app(UserInterface::class);
        return $signUpRepo->SignUp($income);

    }

    /**
     * Return the access level of the class by directly address to access level enum.
     *
     * @return string
     */
    protected function accessLevel()
    {
        // TODO: Implement accessLevel() method.
    }

}