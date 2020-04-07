<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Lib xử lý đăng nhập lấy thông tin user 
use Illuminate\Http\Request; //Lib xử lí các Request
use App\classroom;  // Bảng chứa dữ liệu lớp học
use Illuminate\Support\Str;
use Route;
use App\joinclass; // Bảng chứa dữ liệu tham gia lớp học
use App\user;
use App\question; // Bảng chứa dữ liệu về các câu hỏi
use App\contest; // Bảng chứa dữ liệu về các kì thi
use App\logcontest; 

class gvDashboard extends Controller
{
    public function checkUserIsCreaterOfClass($id){
        return ((int)classroom::find($id)->id_create==(int)Auth::user()->id);
    }
    public function index(){
        $classroom = classroom::orderBy('id','DESC')->get()->where('id_create',Auth::user()->id);
        // dd($classroom);
        $joinclass = joinclass::all();
        $countQuestion = count(question::all()->where('idnguoitao', Auth::user()->id));

        $classCreated = classroom::all()->where('id_create',Auth::user()->id); //Get full class where user created
        $demHs = 0; //count number of student in all class user create
        $contest = contest::all();
        foreach($classCreated as $data){ //for each class user create get number of student join it;
            $demHs += count(joinclass::all()->where('idClass',$data->id)); 
        }
        $countKiThi = count(contest::all()->where('idnguoitao',Auth::user()->id));
        return view('dashboard.index',compact('classroom','joinclass','countQuestion','demHs','contest','countKiThi'));
    }
    public function createClass(){
        return view('dashboard.createClass');
    }
    public function suacauhoi($id){
        $question = question::find($id);
        if($question->idnguoitao!=Auth::user()->id)abort(404);
        
        $request =  question::find($id);
        $request->ckeditor = $request->question;
        return view('dashboard.suacauhoi',compact('request','id'));

    }

    public function postsuacauhoi(Request $req,$id){
        $question = question::find($id);
        if($question->idnguoitao!=Auth::user()->id)abort(404);
        trim( $req->ckeditor);
        $req->ans = strtoupper($req->ans);
        $ans = $req->ans;
        $allQuestion = question::all()->where('idnguoitao', Auth::user()->id);
        if($ans!='A' && $ans!='B' && $ans!='C' && $ans!='D'){
            return view('dashboard.suacauhoi',["error"=>"Đáp án phải là A, B, C hoặc D","request"=>$req,"allQuestion"=>$allQuestion,"id"=>$id]);
        }
        $question->question = $req->ckeditor;
        $question->A=$req->A;
        $question->B=$req->B;
        $question->C=$req->C;
        $question->D=$req->D;
        $question->ans=$req->ans;
        $question->mucdo=$req->mucdo;
        $logcontest = logcontest::all();
        if(is_array($json))
        foreach($logcontest as $data){
            $find = logcontest::find($data->id);
            $json = json_decode($find->data);
            foreach($json as $ques){
                if($ques->idques == $id){
                    $correctCu = $ques->correct;
                    $ques->correct = $question->ans;
                    if($ques->answer == $ques->correct) {$find->Dung++;$find->diem++;}
                    else if($ques->answer == $correctCu){$find->Dung--;$find->diem--;}
                }
            }
            $find->data = json_encode($json);
            $find->save();
        }
        $question->save();
        return redirect()->back();

    }

    public function creatingClass(Request $request){
        $classroom = new classroom;
        $code = Str::random(4)."".Str::random(4);
        $code = strtoupper($code);
        $classroom -> name = $request->nameclass;
        $classroom -> id_create = Auth::user()->id;
        $classroom -> code = $code;
        $classroom ->save();
        $success = "Tạo lớp ".$request->nameclass." thành công, Mã lớp học là: ".$code;
        return view('dashboard.createClass',compact('success'));
    }

    public function manageClassroom(){

        $classroom = classroom::orderBy('id','DESC')->get()->where('id_create',Auth::user()->id);
        // dd($classroom);
        $joinclass = joinclass::all();
        $contest = contest::all();
        return view('dashboard.manageClass',compact('classroom','joinclass','contest'));
    }
    public function manageQuestion(){
        
        $allQuestion = question::all()->where('idnguoitao', Auth::user()->id);
        return view('dashboard.manageQuestion',compact('allQuestion'));
    }
    public function createQuestion(Request $request){
        $html = $request->ckeditor;
        $html = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $html);///Xss prevent
        trim($html);
        if($html==""){
            $allQuestion = question::all()->where('idnguoitao', Auth::user()->id);
            return view('dashboard.manageQuestion',compact('allQuestion'));
        }
        $allQuestion = question::all()->where('idnguoitao', Auth::user()->id);
        $request->ans = strtoupper($request->ans);
        $ans = $request->ans;
        if($ans!='A' && $ans!='B' && $ans!='C' && $ans!='D'){
            return view('dashboard.manageQuestion',["error"=>"Đáp án phải là A, B, C hoặc D","request"=>$request,"allQuestion"=>$allQuestion]);
        }
        $question = new question;
        $question->question = $html;
        $question->A = $request -> A;
        $question->B = $request -> B;
        $question->C = $request -> C;
        $question->D = $request -> D;
        $question->mucdo= $request->mucdo;
        $question->ans = $request -> ans;
        $question->idnguoitao = Auth::user()->id;
        $question->save();

        $allQuestion = question::all()->where('idnguoitao', Auth::user()->id);
        return view('dashboard.manageQuestion',compact('allQuestion'));
    }
    public function detailClassroom($id){
        if(!$this->checkUserIsCreaterOfClass($id)){
            abort(404);
        }
        $classroom = classroom::find($id);
        $student = joinclass::all()->where('idClass',$id);
        $contest = contest::all()->where('idclass',$id);
        $user = user::all();
        $logcontest = logcontest::all();
        return view('dashboard.detailClassroom',compact('classroom','student','id','contest','user','logcontest'));
    }
    public function createContest($id){
        if(!$this->checkUserIsCreaterOfClass($id)){
            abort(404);
        }
        $classroom = classroom::find($id);
        $class = $classroom->name;
        $allQuestion = question::all()->where('idnguoitao', Auth::user()->id);

        return view('dashboard.createContest',compact('class','allQuestion','id'));
    }
    public function creatingContest($id,Request $request){
        if(!$this->checkUserIsCreaterOfClass($id)){
            abort(404);
        }
        if($request->question==null){
            return "Bạn chưa chọn câu hỏi nào click vào <a href='".route('createContest',$id)."'>đây để trở lại</a>";
        }
        dd($request->question);
        $contest = new contest;
        $contest->idclass = $id;
        $contest->question =  implode(" ",$request->question);
        $contest->idnguoitao = Auth::user()->id;
        $contest->time = $request->time;
        $contest->name = $request->tencontest;
        $de = 0;
        $tb = 0;
        $kho = 0;
        foreach ($request->question as $data) {
            if(question::find($data)->mucdo=="de")$de++;
            if(question::find($data)->mucdo=="tb")$tb++;
            if(question::find($data)->mucdo=="kho")$kho++;
            if(question::find($data)->idnguoitao != Auth::user()->id)abort(404);
        }
        $contest->de=$de;
        $contest->tb=$tb;
        $contest->kho=$kho;
        $contest->save();
        return redirect()->route('detailClassroom',$id);
    }
    public function deleteContest($idclass,$idcontest){
        if(!$this->checkUserIsCreaterOfClass($idclass)){
            abort(404);
        }
        $contest = contest::find($idcontest);
        $contest->delete();
        return redirect()->back();
    }

    public function delStudent($id,$idHs){
        if(!$this->checkUserIsCreaterOfClass($id)){
            abort(404);
        }
        if(count(joinclass::all()->where('idClass',$id)->where('idJoiner',$idHs))==0)abort(404);
        $data = joinclass::all()->where('idClass',$id)->where('idJoiner',$idHs)->get(1)->id;
        $delete = joinclass::find($data);
        $delete -> delete();
        return redirect()->back();  
    }
    
    public function profile(){
        return view('dashboard.profile');
    }
    public function validateEMAIL($EMAIL) {
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        if (preg_match($pattern, $EMAIL) === 1) {
            return true;
        }
        return false;
    }
    public function changeProfile(Request $request){
        $user=User::find(Auth::user()->id);
        $user->name = $request->ten;
        if(!$this->validateEMAIL($request->email)){
            return redirect()->back();
        }
        $user->email =$request->email;
        if($request->sex=="on")$user->sex ="nu";
        else $user->sex ="nam";
        $user->save();
        return redirect()->back();
    }

    public function detailContest($id,$idcontest){
        if(!$this->checkUserIsCreaterOfClass($id))abort(404);
        if(count(contest::all()->where('id',$idcontest)->where('idclass',$id))==0)abort(404);
        $classroom = classroom::find($id);
        $contest = contest::find($idcontest);
        $logcontest = logcontest::all()->where('idClass',$id)->where('idContest',$idcontest)->where('lam',1);
        $user = user::all();
        return view('dashboard.detailContest',compact('classroom','contest','logcontest','user','id','idcontest'));
    }   
    public function detailBailam($id,$idcontest,$idbai){
        if(!$this->checkUserIsCreaterOfClass($id))abort(404);
        if(count(contest::all()->where('id',$idcontest)->where('idclass',$id))==0)abort(404);
        if(count(logcontest::all()->where('idContest',$idcontest)->where('idClass',$id)->where('id',$idbai)->where('lam',1))==0)abort(404);

        $logcontest = logcontest::find($idbai);
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

        return view('dashboard.detailBaiLam',compact('result','id'));
    }
}
