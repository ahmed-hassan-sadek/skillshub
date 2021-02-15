<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function show($id)
    {
        $data['skill'] = Skill::findOrFail($id);
        $data['allskill'] = Skill::select('id' , 'name')->get();
        $data['categories'] = $data['skill']->category()->paginate(6);
        return view('web.skills.show')->with($data);
    }
}
