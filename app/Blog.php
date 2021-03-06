<?php

namespace Maricurie;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class Blog extends Model implements AuthenticatableContract,
                                        AuthorizableContract,
                                        CanResetPasswordContract{

    use Authenticatable,Authorizable, CanResetPassword;                                         

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "blogs";
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','path', 'texto','tags'];


    public function setPathAttribute($path)
    {
        $this->attributes['path'] = Carbon::now()->second.$path->getClientOriginalName();
        $name = Carbon::now()->second.$path->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($path));
    }
}
