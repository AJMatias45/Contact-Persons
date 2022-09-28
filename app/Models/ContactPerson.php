<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;
    public function getID()
    {
        return $this->id;
    }
    public function setCompleteName($value)
    {
        $this->CompleteName = $value;
        return $this->save();

    }
    public function setContactNumber($value)
    {
        $this->ContactNumber = $value;
        return $this->save();
    }
    public function setEmail($value)
    {
        $this->email=$value;
        return $this->save();
    }
}
