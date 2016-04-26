<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Contact extends Model {

	protected $fillable = [
        'name',
        'email',
        'phone_number',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function scopeOwner($query){
        $query->where('user_id', '=', Auth::user()->id);
    }

    

}
