<?php

namespace App\Models;

use App\Exceptions\UnknownRoleException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 *
 * @property string name
 * @property string surname
 * @property string password
 * @property string email
 * @property string dateOfBirth
 * @property string userRole
 */
class User extends Authenticatable
{
    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';
    const ROLE_SUPER_ADMIN = 'superAdmin';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'dateOfBirth'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->userRole == $role;
    }

    /**
     * @return array
     */
    public static function getUserRoles()
    {
        return [
          'user' => self::ROLE_USER,
          'admin' => self::ROLE_ADMIN,
          'superAdmin' => self::ROLE_SUPER_ADMIN,
        ];
    }

    /**
     * @return RedirectResponse
     * @throws UnknownRoleException
     */
    public function redirectByUserRole()
    {
        $userRole = $this->userRole;
        $allUserRoles = $this->getUserRoles();

        if (in_array($userRole, $allUserRoles)) {

            return redirect()->route($userRole . 'Page');
        }

        throw new UnknownRoleException('Provided user role does not exist');
    }
}
