<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $repository;

    public function __construct(Group $group)
    {
        $this->repository = $group;
    }

    public function index(){
        $teste= 'commit';
        $groups = $this->repository->latest()->paginate(1);

        return view('admin.pages.groups.index',[
            'groups' => $groups,
        ]);
    }
    public function create(){
        
        return view( 'admin.pages.groups.create');
    }
    public function store(Request $request){
        $data = $request->all();
        $this->repository->create($data);
       
       return redirect()->route('groups.index');

    }
    public function show($id){
        $group = $this->repository->where('id', $id)->first();
        if(!$group){
            return redirect()->back();
        }
        return view('admin.pages.groups.show', [
            'group' => $group
        ]);
    }
    public function delete($id){
        $group = $this->repository->where('id', $id)->first();

        if(!$group){
            return redirect()->back();
        }

        $group->delete();

        return redirect()->route('groups.index');

    }
    public function edit($id){
        $group = $this->repository->where('id', $id)->first();
        
        if (!$group){
            return redirect()->back();
        }
        return view('admin.pages.groups.edit', [
            'group' => $group
        ]);
    }
    public function update(Request $request, $id){
        $group =  $this->repository->where('id', $id)->first();
        if (!$group){
            return redirect()->back();
        }

        $group->update($request->all());

        return redirect()->route('groups.index');
    }
}
