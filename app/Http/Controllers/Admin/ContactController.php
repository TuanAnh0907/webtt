<?php

namespace App\Http\Controllers\Admin;

use \App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    //
    public function index(){

        $contacts = Contact::paginate(2);
        return view('admin.contact.list', compact('contacts'));
    //  return response()->json($contacts);
    }

    public function delete($id){
        Contact::where('id', $id)->delete();
        return redirect()->route('admin.contact.index');
    }
}
