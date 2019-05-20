<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUserByCredentialsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserByCredentialsTask extends Task
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param bool $isClient
     * @param string $email
     * @param string $username
     * @param string $password
     * @param string|null $name
     * @param string|null $gender
     * @param string|null $birth
     *
     * @return  mixed
     */
    public function run(
        string $email,
        string $password,
        bool $isClient = true,
        string $username = null,
        string $name = null,
        string $gender = null,
        string $birth = null
    ): User {

        try {
            //username
            $data['username'] = (new User())->makeUsername($data['username'] ?? null);

            // create new user
            $user = $this->repository->create([
                'password'  => Hash::make($password),
                'email'     => $email,
                'username'  => $username,
                'name'      => $name,
                'gender'    => $gender,
                'birth'     => $birth,
                'is_client' => $isClient,
            ]);

        } catch (Exception $e) {
            throw (new CreateResourceFailedException())->debug($e);
        }

        return $user;
    }

}
