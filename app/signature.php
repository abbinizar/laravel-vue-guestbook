<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signature extends Model
{
    public function scopeIgnoreFlagged($query){
        return $query->where('flagget_at', null);
    }
    public function flag(){
    return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
    }
}
