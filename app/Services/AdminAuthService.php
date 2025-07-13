<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class AdminAuthService
{
    protected $userRepo;

    /**
     * @param UserRepositoryInterface $userRepo
     */
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * @param $email
     * @param $password
     * @param $remember
     * @return void
     * @throws AuthenticationException
     */
    public function login($email, $password, $remember = false)
    {

        $user = $this->userRepo->findByEmail($email);

        if (! $user || ! Hash::check($password, $user->password)) {
            throw new AuthenticationException('Invalid credentials.');
        }

        if ($user->role !== 'admin') {
            throw new AuthenticationException('Unauthorized access.');
        }

        Auth::login($user, $remember);


    }

}
