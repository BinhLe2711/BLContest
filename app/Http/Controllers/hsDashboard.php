<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use Auth;
use App\classroom;
use App\joinclass;
use App\User;
use App\logcontest;
use App\contest;
use App\question;

class hsDashboard extends Controller
{
    public function index(){
        return view('hsView.binh');
    }

    public function findClass(){
        if(count(joinclass::all()->where('idJoiner',Auth::user()->id))==0)return view('hsView.findClass');
        
        $joinclass = DB::table('joinclass')
                                            ->orderBy('created_at', 'desc')
                                            ->where('idJoiner',Auth::user()->id)
                                            ->get();
    
        $class = array();
        foreach($joinclass as $data){
            $class[] = classroom::find($data->idClass);
        }
        $user = User::all();
        $joinclass = joinclass::all();
        return view('hsView.findClass',compact('class','user','joinclass'));
    }

    public function postFindClass(Request $req){
        $search = $req->search;
        $pattern = '%'.$search.'%';
        $class = DB::table('classroom')->where('name','Like',$pattern)->get();
        $user = User::all();
        $joinclass = joinclass::all();
        
        foreach($class as $key =>$data){
            if(count(joinclass::all()->where('idClass',$data->id)->where('idJoiner',Auth::user()->id))==0){
                unset($class[$key]);
            }
        }
        
        return view('hsView.findClass',compact('search','class','user','joinclass'));
    }
    public function joinclass(Request $req){
        $joinclass = new joinclass;
        $joinclass->idJoiner=Auth::user()->id;

        $code = $req->code;

        $classroom = classroom::all()->where('code',$code);
        if(count($classroom)==0) return redirect()->back()->with('status','Không tồn tại mã này. Vui lòng thử lại với mã khác.');
        foreach($classroom as $data){
            $joinclass->idClass = $data->id;
            if(count(joinclass::all()->where('idClass',$data->id)->where('idJoiner',Auth::user()->id))!=0){
                return redirect()->route('findClass');
            }
        }
        $joinclass->save();
        return redirect()->route('findClass');
    }

    public function checkClass($id){ //Hàm kiểm tra hs có thuộc lớp đó không
        if(count(joinclass::all()->where('idClass',$id)->where('idJoiner',Auth::user()->id))==0)return false;
        return true;
    }

    public function viewClass(Request $req,$id){
        if($this->checkClass($id)==false)abort(404);
        $classroom = classroom::find($id);
        $joinclass = joinclass :: all();
        $user = user::all();
        $logcontest = logcontest::all();
        $contest = DB::table('contest')->where('idclass',$id)->orderBy('id','desc')->paginate(5);
        $page = $req->get('page');
        return view('hsView.class',compact('classroom','joinclass','id','user','contest','logcontest','page'));
    }
    public function lambai($id,$idcontest){
        if($this->checkClass($id)==false)abort(404);
        if(count(contest::all()->where('id',$idcontest))==0)abort(404);
        if(count(logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))!=0)
        foreach((logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))as $data){
            if($data->lam==1)abort(404);
        }
        if(contest::find($idcontest)->idclass!=$id)abort(404);
        if(count(logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))==0){
            $logcontest = new logcontest;
            $logcontest->idClass = $id;
            $logcontest->idNguoiLam = Auth::user()->id;
            $logcontest->idContest = $idcontest;
            $logcontest->Diem = 0;
            $logcontest->Dung = 0;
            $logcontest->lam = 0;
            $logcontest->save();
        }
        $contest = contest::find($idcontest);
        $ques = explode(" ",$contest->question);//Tách câu hỏi;
        $allQuestion = array();  // Tạo mảng lấy câu hỏi trong contest

        foreach($ques as $data){ // Duyệt lấy thông tin câu hỏi
            $question = question::find($data);
            $question->custom = $data;
            $allQuestion[] = $question;
        }
        
        return view('hsView.lambai',compact('allQuestion','id','idcontest','contest'));
    }
    public function postlambai($id,$idcontest,Request $req){
        if($this->checkClass($id)==false)abort(404);
        if(count(contest::all()->where('id',$idcontest))==0)abort(404);
        if(count(logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))!=0)
        foreach((logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))as $data){
            if($data->lam==1)abort(404);
        }
        if(contest::find($idcontest)->idclass!=$id)abort(404);

        $idlogcontest =0;//Lấy id log contest
        foreach((logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))as $data){
            $idlogcontest = $data->id;
        }  
        if($idlogcontest==0)abort(404); //Check lại 1 lần nữa

        $logcontest = logcontest::find($idlogcontest);

        $json; // Json lưu thông tin contest
        $contest = contest::find($idcontest);
        $ques  = explode(" ",$contest->question);
        $dung = 0;
        foreach($ques as $data){
            if(is_null($req->input($data))) $json[]=["idques"=>$data,"answer"=>"E","correct"=>question::find($data)->ans];
            else{
                if($req->input($data) == question::find($data)->ans) $dung++;
                $json[]=["idques"=>$data,
                        "answer" => $req->input($data),
                        "correct" => question::find($data)->ans
                ];
            }
        }
        
        $logcontest -> diem = round((10/count($ques)* $dung),2);
        $logcontest -> Dung = $dung;
        $logcontest -> data = json_encode($json);
        $logcontest -> lam = 1;
        $logcontest -> save();
        return redirect()->route('result',['id'=>$id,'idcontest'=>$idcontest]);
    }
    public function result($id,$idcontest){
        if($this->checkClass($id)==false)abort(404);
        if(count(contest::all()->where('id',$idcontest))==0)abort(404);
        if(count(logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))!=0)
        if(contest::find($idcontest)->idclass!=$id)abort(404);
        
        $idlogcontest=0;
        foreach((logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('idNguoiLam',Auth::user()->id))as $data){
            if($data->lam==0)abort(404);
            $idlogcontest=$data->id;
        }
        if($idlogcontest==0)abort(404);
        $logcontest = logcontest::find($idlogcontest);
        $json = (json_decode($logcontest->data));
        $result = [];
        foreach($json as $data){
            $data->question = question::find($data->idques)->question;
            $data->A = question::find($data->idques)->A;
            $data->B = question::find($data->idques)->B;
            $data->C = question::find($data->idques)->C;
            $data->D = question::find($data->idques)->D;
            $data->custom = $data->idques;
            $result[]=$data;
        }
        // dd($result);
        return view('hsView.result',compact('result','id'));
    }
}
