<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signature extends Model
{
    public function scopeIgnoreFlagged($query)
    {
        return $query->where('flagget_at', null);
    }

    public function flag()
    {
        return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
    }

    public function getAvatarAttribute()
    {
        return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->email));
    }
}
