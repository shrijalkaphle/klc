<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class AjaxController extends Controller {
    
    public function contactsumbit(Request $request) {
        $input = $request->all();
        Contact::create($input);
        return response()->json(['status' => 'success']);
    }
}
