<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function getPayment(){

        $easy = DB::select('SELECT * FROM payment AS p 
        INNER JOIN customer AS c ON c.id = p.customer_id;
                        ');

return response()->json(['success' => true, 'easy'=> $easy],200);

}

    public function getPaymentData(){  

        $moderate= DB::table('payment AS p')
        ->select('p.*')
        ->join('customer AS c','c.id','p.customer_id')
        ->get();

return response()->json(['success' => true, 'moderate'=> $moderate],200);
}

public function getPaymentChallenging(){

    $challenging = Profile::with('customer')->get();

    return response()->json(['success' => true, 'challenging' => $challenging],200);


}

public function getPaymentDifficult(){

    $difficult=Profile::with(['customer' => function($q){
        $q->select('*');
    }])->get();

    return response()->json(['success' => true,'difficult'=> $difficult],200);
}


}

