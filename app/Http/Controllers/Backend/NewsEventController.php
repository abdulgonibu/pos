<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\NewsEvent;

class NewsEventController extends Controller
{
    public function view(){
    		$data['alldata'] = NewsEvent::all();
    		return view('backend.news_event.news_event-view', $data);
	}

  public function add(){
  	return view('backend.news_event.add-news_event');
  }

  public function store(Request $request){
  	$data = new NewsEvent();
  	$data->created_by = Auth::user()->id;
  	$data->date = date('Y-m-d', strtotime($request->date));
  	$data->short_title = $request->short_title;
  	$data->long_title = $request->long_title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/news_images'), $filename);
  		$data['image'] = $filename;
  	    $data->save();
  	return redirect()->route('news_events.view')->with('success', 'Data add success');
  }
}


  public function edit($id){
    $editData = NewsEvent::find($id);
    return view ('backend.news_event.edit-news_event', compact('editData'));
  }

  public function update(Request $request, $id){
  	$data = NewsEvent::find($id);
  	$data->updated_by = Auth::user()->id;
    $data->date = date('Y-m-d', strtotime($request->date));
    $data->short_title = $request->short_title;
    $data->long_title = $request->long_title;
  	if ($request->file('image')) {
  		$file = $request->file('image');
  		@unlink(public_path('upload/news_images/'.$data->image));
  		$filename =date('YmdHi').$file->getClientORiginalName();
  		$file->move(public_path('upload/news_images'), $filename);
  		$data['image'] = $filename;
  	    $data->save();
  	return redirect()->route('news_events.view')->with('success', 'Data update success');
  }
}

  public function delete($id){
       	$news = NewsEvent::find($id);
       	if (file_exists('public/upload/news_images/' .$news->image) AND ! empty($news->image)) {
    			unlink('public/upload/news_images/' . $news->image);
    		}
       	$news->delete();
       	return redirect()->route('news_events.view')->with('success', 'Data deleted success');
  }

}
