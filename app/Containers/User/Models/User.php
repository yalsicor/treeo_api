<?php

namespace App\Containers\User\Models;

use App\Containers\Authorization\Traits\AuthorizationTrait;
use App\Containers\Farmer\Models\Farmer;
use App\Containers\Payment\Contracts\ChargeableInterface;
use App\Containers\Payment\Models\PaymentAccount;
use App\Containers\Payment\Traits\ChargeableTrait;
use App\Ship\Parents\Models\UserModel;
use Illuminate\Notifications\Notifiable;

/**
 * Class User.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class User extends UserModel implements ChargeableInterface
{

    use ChargeableTrait;
    use AuthorizationTrait;
    use Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'device',
        'platform',
        'gender',
        'birth',
        'social_provider',
        'social_token',
        'social_refresh_token',
        'social_expires_in',
        'social_token_secret',
        'social_id',
        'social_avatar',
        'social_avatar_original',
        'social_nickname',
        'confirmed',
        'is_client',
    ];

    protected $casts = [
        'is_client' => 'boolean',
        'confirmed' => 'boolean',
    ];

    /**
     * The dates attributes.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function paymentAccounts()
    {
        return $this->hasMany(PaymentAccount::class);
    }

    /**
     * @param null $username
     * @param int $length
     * @param string $keyspace
     * @return null|string
     * @throws \Exception
     *
     * generates a username that does not collide with other usernames
     *
     */
    public function makeUsername($username = null, $length = 6, $keyspace = '0123456789ABCDEFGHIJKLMNOP')
    {
        $field = 'username';
        if ($username) {
            if ($this->collision($field, $username)) {
                $hash = $this->random_str($length, $keyspace);
                if ($this->collision($field, $username.'_'.$hash)) return $this->makeUsername($username);
                else return $username.'_'.$hash;
            }
            else return $username;
        }
        else {
            $hash = $this->random_str($length, $keyspace);
            if ($this->collision($field, $hash)) return $this->makeUsername();
            else return $hash;
        }
    }

    /**
     * @param $length
     * @param string $keyspace
     * @return string
     * @throws \Exception
     */
    protected function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces []= $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }

    /**
     * @param $field
     * @param $value
     * @return bool
     */
    protected function collision($field, $value)
    {
        $class = static::class;
        return (new $class)->where($field, $value)->count()?true:false;
    }

    /**
     * @param int $length
     * @param string $keyspace
     * @return string
     * @throws \Exception
     */
    public function createPassword($length = null, $keyspace = null)
    {
        $length = $length ?? env('USER_PASSWORD_LENGTH', 16);
        $keyspace = $keyspace ?? env('USER_PASSWORD_KEYSPACE', '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

        return $this->random_str($length, $keyspace);
    }

    /**
     * @return mixed
     */
    public function isAdmin()
    {
        return $this->hasAdminRole();
    }

    //relations

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function farmer()
    {
        return $this->hasOne(Farmer::class);
    }


}
