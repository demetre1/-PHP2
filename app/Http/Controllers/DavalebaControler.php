<?php
namespace App\Http\Controllers;

use App\Models\Davaleba;
use Illuminate\Http\Request;

class DavalebaControler extends Controller
{
    public function store(Request $request){
        $data =$request->validate([
            'tittle'=> 'დემეტრე კახაბრისშვილი',
            'priority' => 'nullable|integer|min:1|max:3',
            'done' =>'boolean'
        ]);
        $davaleba = Davaleba::create($data);
        return response()->json([
           'status'=> 'შესრულებულია წარმატებით',
            'message' => ' წამატებით განახლდა',
                'data' => $data
        ]);


    }
    public function index(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'true',
            'message' =>'დემეტრე კახაბრიშვილი',
        ]);
    }
    public function hoobi(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'true',
            'message' =>'გამინგ, კოდინგი, ფეხბურთი, ცურაობა ',
        ]);
    }
    public function age(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'true',
            'message' =>'20',
        ]);
    }
    public function food(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'true',
            'message' =>'ხინკალი,მწვადი,შაურმა, და ა.შ მომშივდბა ეხლა :D',
        ]);
    }
    public function FutureJob(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'true',
            'message' =>'full stack developer და Game developer, ჯერ პირველი და მეროეზე რამსე მოვახერხებ',
        ]);
    }
    public function hopes(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'Done',
            'message' =>'შეტყობინება წარმატებით წაიშალა no Hope only sad :( everything deleted',
        ]);
    }

    public function LETSGOOOOOOOO(Request $request){
        $Davaleba = Davaleba::all();
        return response()->json([
            'status' =>'LETSGOOOOOOOOOOOOOO',
            'message' =>'წარმატებიტ დაემატაLETSGOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO',
        ]);
    }
}
