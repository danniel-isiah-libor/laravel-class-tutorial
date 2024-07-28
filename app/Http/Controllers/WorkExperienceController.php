<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperienceRequest;
use App\Models\WorkExperiencesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkExperienceController extends Controller
{
    public function create() {
        return view('work-experience.create');
    }

    public function store(WorkExperienceRequest $request)
    {
        $formData = $request->validated();

       //WorkExperiencesModel::create($formData);


        //$experiences = DB::select('select * from work_experiences_models');
      //  $experiences =  WorkExperiencesModel::with('user')->where('id',1)->get();

/*
        $experiences = DB::table('work_experiences_models')
        ->select(['company','is_current'])
        ->where(function($query){
            $query->where('to','>=','2023-01-01');

        })
        ->toSql(); */

     //   ->where('is_current',0);
      //  ->chunk(2,function($works){
//
  //      });
        //->exists();
        //->get();
        //->find(1);
        //->where('id',1);
        //->toSql();

      //  dd($experiences->toArray());

        return back()->with('success','Work Experience added successfully');
    }

    /*
    public function edit($id)
    {
        $experiences= WorkExperiencesModel::find($id);
        //$experiences =  WorkExperiencesModel::where('id',$id)->get();
        //dd($experiences->toArray());
        //dd($experiences);
        return view('work-experience.edit',['id',$id]);
    }
*/
    public function edit(WorkExperiencesModel $model)
    {
 
        //dd($model);
        return view('work-experience.edit',['experience' =>$model]);
    }


    public function update(Request $request, WorkExperiencesModel $model)
    {
        $request->merge(['user_id' => $model->user_id]);

        $formData = $request->validate([
            'user_id' => ['required', 'integer'],
            'company' => ['required', 'string', 'max:50'],
            'from' => ['required', 'date'],
            'to' => ['nullable', 'date', 'after:from'],
            'position' => ['required', 'string', 'max:50'],
        ]);

        $model->update($formData);

        return back()->with('success', 'Work Experience updated successfully');
    }

}
