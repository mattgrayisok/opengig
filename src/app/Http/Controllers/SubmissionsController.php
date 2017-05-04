<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionsController extends Controller{

  public function store(Request $request){

    $this->validate($request, [
        'type' => 'required|in:create,edit',
        'payload' => 'required|json',
    ]);

  }

  private function validateCreatePayload($payload){

  }

  private function validateEditPayload($payload){

  }

}
