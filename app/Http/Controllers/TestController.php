<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Tiket;
class TestController extends Controller
{
    public function getdetails(){
        $person_deta = Person::all()->toArray();
        foreach($person_deta as $index=>$person){
            $movie = Person::find($person['id'])->tiket->toArray();
            print_r($movie);
            
        
    }
}

}

