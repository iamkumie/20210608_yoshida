<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'contact';
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
    );
    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->email . ')';
    }
}
