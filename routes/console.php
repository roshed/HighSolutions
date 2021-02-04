<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Customer;
use App\Models\Titles;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('apidownload', function () {
    $json = file_get_contents('https://www.anapioficeandfire.com/api/characters?page=1&pageSize=50');

    if(empty($json)){
        $this->error('Wystąpił błąd');
    }

    $json = json_decode($json,true);

    foreach($json as $key){
        $customer = new Customer;
        $customer->name = $key['name'];

        $customer->gender = $key['gender'];

        $customer->culture = $key['culture'];
        if($key['born'] == '')
        $key['born'] = null;
        $customer->born = $key['born'];//Miał być datetime ale zwraca czasami In 263 AC or 264 AC
        if($key['died'] == '')
        $key['died'] = null;
        $customer->died = $key['died'];//Miał być datetime ale zwraca czasami In 263 AC or 264 AC

        $customer->father = $key['father'];
        $customer->mother = $key['mother'];
        $customer->save();
        if(!empty($key['titles']))
        foreach($key['titles'] as $keyy){
            if(!empty($keyy)){
                $titles = new Titles;
                $titles->name = $keyy;
                $titles->id_customer = $customer->id;
                $titles->save();
            }
        }
    }
   $this->line('Zaczytywanie danych się powiodło');
});
