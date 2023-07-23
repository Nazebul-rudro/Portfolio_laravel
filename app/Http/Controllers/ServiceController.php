<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('backend.service.index',compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }
    public function store(Request $request, Service $service)
    {
        $exe = $request->file('project_image')->getClientOriginalExtension();
        $filename = time().uniqid().'.'. $exe;
        if($request->hasFile('project_image')){
            $request->file('project_image')->storeAs('/public/service'. $filename);
        }
        $service->create([
        'project_name'=> $request->project_name,
        'git_link' => $request->git_link,
        'project_image' => $filename,
        'isActive' => $request->isActive == true ? '1' : '0',
        ]);
        return redirect()->route('service.index')->with('massage', 'Service Added');
        
    }

    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $exe = $request->file('project_image')->getClientOriginalExtension();
        $filename = time().uniqid().'.'. $exe;
        if($request->hasFile('project_image')){
            $request->file('project_image')->storeAs('/public/service'. $filename);
        }
        $service->update([
        'project_name'=> $request->project_name,
        'git_link' => $request->git_link,
        'project_image' => $filename,
        'isActive' => $request->isActive == true ? '1' : '0',
        ]);
        return redirect()->route('service.index')->with('massage', 'Service update');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index')->with('massage', 'Service delete');
    }



    public function active(string $id)
    {
        $service = Service::findOrFail($id);
        if($service->isActive == 1){
            $service->where('id', $id)->update(['isActive' => '0']);
        }
        return redirect()->route('service.index')->with('massage', 'Service Deactive');

    }
    public function deactive(string $id)
    {
        $service = Service::findOrFail($id);
        if($service->isActive == 0){
            $service->where('id', $id)->update(['isActive' => '1']);
        }
        return redirect()->route('service.index')->with('massage', 'Service Active');
    }

}
