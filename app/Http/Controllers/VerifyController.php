<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    /**
    * @param string $vtoken
    * @return Response
    */

    public function verify($vtoken)
    {
      User::where('verification_token_email', $vtoken)->firstorFail()
        ->update(['verified'=>true]); //verify the user = Method2
        //->update(['verification_token_email'=>null]); //verify the user = Method1

      return redirect()
        ->route('home')
        ->with('Success!', 'Account verified.');
    }
}
