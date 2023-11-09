<?php

namespace Dangkhoa\Plugins\Media\src\Models;

use App\Models\User as BaseUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Media extends BaseUser
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'media_name',
        'media_path',
        'mediaable_id',
        'mediaable_type',
    ];

//    /**
//     * Summary of userInformation
//     *
//     * @return HasOne
//     */
//    public function userInformation(): HasOne
//    {
//        return $this->hasOne(UserInformation::class, 'user_id', 'id');
//    }
}
