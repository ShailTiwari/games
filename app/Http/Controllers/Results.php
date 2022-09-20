<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Result;

class Results extends Controller
{
     public function __construct() 
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
         $this->page_name="Result";
    }

    public function index(Request $request)
    {
        $data['header']='results';
       // $data = Result::orderBy('id','DESC')->paginate(10);

        $data = DB::table('results')
            ->join('projects', 'results.project_id', '=', 'projects.id')
            ->select('results.*',  'projects.title')->paginate(10);
        return view('result.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 10);

    }



    public function live()
     {
        $live_result = DB::select("SELECT ( SELECT CONCAT(l1, '-', l2, '-', l3, ' : ', result, ' : ', r1, '-', r2, '-', r3) AS  result from results where project_id=a.id and 
date_format(result_date,'%Y-%m-%d') BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-%d') and DATE_FORMAT(CURDATE(), '%Y-%m-%d') group by project_id limit 1 ) as result,DATE_FORMAT(CURDATE(), '%d-%m-%Y') as today_date,
 a.*  from projects as a  left join results as b 
ON a.id = b.project_id where a.isactive=1 group by a.id   order by a.id asc");


        $project_category = DB::select('select * from project_category');
        $assignee = DB::select('select * from users');
        return view('result.live',['page_name'=>$this->page_name,'live_result'=>$live_result,'project_category'=>$project_category,'assignee'=>$assignee]);
     }






       public function create()
     {
        
        $projects = DB::select('select * from projects  where isactive=1');
        return view('result.create', ['page_name'=>$this->page_name,'projects'=>$projects]);
     }



     public function create_result(Request $request)
    { 
         $data= new Result();
         $data->project_id=$request->project;
         $data->result_date= $request->start;
         $data->l1=$request->l1;
         $data->l2=$request->l2;
         $data->l3=$request->l3;
         $data->r1=$request->r1;
         $data->r2=$request->r2;
         $data->r3=$request->r3;
         $data->result=$request->result;
         $data->remarks=$request->remarks;
         $data->isactive='1';
         $data->isdelete='0';

       if(Result::where('result_date', '=',$request->start)->where('project_id',$request->project)->count() > 0)
       {
       //$data->save();     
       return back()->with('success', 'Result Already exist.  Please Modify!');
       }
       else
       {
       $data->save();  
        $userlogs = array(
                            'action_id' =>1,
                            'module_id' =>1,
                            'title' =>'Result Added',
                            'description' =>'Result Added by '.Auth::user()->name,
                            'isactive' =>1,
                            'created_by' =>Auth::user()->id,
                        );
            DB::table('userlogs')->insert($userlogs);   
       return back()->with('success', 'Result Added Successfully. Thank you!');
       }

    }


      public function edit($id)
    {
        //return $id;
        $projects = DB::select('SELECT * from projects');
        $result = Result::where('id', $id)
                         ->where('isactive', '=', 1)
                         ->where('isdelete', '=', 0)
                         ->first();
         return view('result.edit',['page_name'=>$this->page_name,'member'=>$result,
            'projects'=>$projects]);
    }



  public function update_result(Request $request)
    { 
         $data= new Result();
                  
         $data=Result::find($request->id); 
         $data->project_id=$request->project;
         $data->result_date=date('Y-m-d');
         $data->l1=$request->l1;
         $data->l2=$request->l2;
         $data->l3=$request->l3;
         $data->r1=$request->r1;
         $data->r2=$request->r2;
         $data->r3=$request->r3;
         $data->result=$request->result;
         $data->remarks=$request->remarks;
         $data->isactive='1';
         $data->isdelete='0';

       if(Result::where('result_date', '=',date('Y-m-d'))->where('project_id',$request->project)->count() > 1)
       {
       //$data->save();     
       return back()->with('success', 'Result Already exist.  Please Modify Date!');
       }
       else
       {
         $data->save();
         $userlogs = array(
                            'action_id' =>1,
                            'module_id' =>1,
                            'title' =>'Result Updated',
                            'description' =>'Result Updated by '.Auth::user()->name,
                            'isactive' =>1,
                            'created_by' =>Auth::user()->id,
                        );
            DB::table('userlogs')->insert($userlogs);

       return back()->with('success', 'Result Updated Successfully. Thank you!');
       }
 
    }






}
