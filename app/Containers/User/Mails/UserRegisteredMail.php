<?php

namespace App\Containers\User\Mails;

use App\Containers\User\Models\User;
use App\Ship\Parents\Mails\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class UserRegisteredMail
 *
 * @author Sebastian Weckend <sebastian.weckend@posteo.de>
 */
class UserRegisteredMail extends Mail implements ShouldQueue
{
    use Queueable;

    /**
     * @var  \App\Containers\User\Models\User
     */
    protected $user;
    private $password;

    /**
     * UserRegisteredNotification constructor.
     *
     * @param \App\Containers\User\Models\User $user
     * @param $password
     */
    public function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('user::user-registered')
            ->to($this->user->email, $this->user->name)
            ->with([
                'name'      => $this->user->name,
                'password'  => $this->password,
                'username'  => $this->user->username,
                'email'  => $this->user->email,
            ]);
    }
}
