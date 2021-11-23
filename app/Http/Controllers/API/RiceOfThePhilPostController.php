<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\RiceInfoInPhil;

class RiceOfThePhilPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request)
    {
        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $lists = DB::table('rice_of_the_phil_info')
        ->leftJoin('users','rice_of_the_phil_info.id', '=','users.id')
        ->select('rice_of_the_phil_info.id','rice_of_the_phil_info.name_of_the_rice','rice_of_the_phil_info.variety','rice_of_the_phil_info.price','rice_of_the_phil_info.most_planted_region','users.name','rice_of_the_phil_info.created_at','rice_of_the_phil_info.updated_at')
        ->get();
        return response()->json($lists,$this->successStatus);

    }


    public function getPost(Request $request)
    {

        $id = $request['pid']; //old post id

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $lists = RiceInfoInPhil::where('id',$id)->first();
            if($user != null){
                return response()->json($lists,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    // this method searches the country
    public function searchPost(Request $request)
    {

        $params = $request['p']; //p = params

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $inventory = RiceInfoInPhil::where('name_of_the_rice','LIKE','%' .$params . '%')->GET();
            if($user != null){
                return response()->json($inventory,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }
}
