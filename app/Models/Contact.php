<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Contact extends Model
{
    use HasFactory;
    public static $contact;

    public static function createOrUpdate($request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->message = $request->description;
        $contact->user_id = $request->user_id;
        $contact->save();

    }
    public static function updateContact($request,$id)
    {
        $contacts = Contact::find($id);
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->number = $request->number;
        $contacts->message = $request->description;
        $contacts->save();

    }
    public  function user()
    {
        return $this->belongsTo(User::class);
    }
}

