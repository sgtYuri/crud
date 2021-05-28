<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Events;

class IndexController extends Controller
{
      //declare variable
      protected $request;

      public function __construct(Request $request)
      {
          $this->request = $request;
      }
    public function index()
    {

        $data= Events::all();

        if($this->request->has('search')){
            $data=Events::where(
                $this->request->by,
                'LIKE',
                $this->request->search.'%'
            )->get();
        }
       
        if($this->request->has('date1')){
            // dates 
            // whereBetween('colum',[date1, date2])
            $data = Events::whereBetween('date',[
                $this->request->date1,
                $this->request->date2
            ])->get(); 
        }
         if($this->request->has('price')){
             $data =Events::where('entrance_fee','>=' , $this->request->price1)
                            ->where('entrance_fee','<=' , $this->request->price1)
                            ->get();
         }
    
        return view ('index')->with([
            'data'=>  $data
        ]);

    }
}