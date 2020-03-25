<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\ImageUpload;
 use App\ImageUpload;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function upload()
    {
        return view('pages.home');
    }
    public function fileupload(Request $request){

       if($request->hasFile('file')) {

         // Upload path
         $destinationPath = 'files/';

         // Create directory if not exists
         if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
         }
                $image = $request->file('file');
               $imageName = $image->getClientOriginalName();
         // Get file extension
         $extension = $request->file('file')->getClientOriginalExtension();

         // Valid extensions
         $validextensions = array('jpg','xml','sql','jpeg','rar', 'gif', 'png', 'zip', 'xlsx', 'cad', 'pdf', 'doc', 'docx', 'ppt', 'pptx', 'pps', 'ppsx', 'odt', 'xls', 'xlsx', '.mp3', 'm4a', 'ogg', 'wav', 'mp4', 'm4v', 'mov', 'wmv');

         // Check extension
         if(in_array(strtolower($extension), $validextensions)){

           // Rename file
        //   $fileName = str_slug(Carbon::now()->toDayDateTimeString()).rand(11111, 99999) .'.' . $extension;
       $fileName=$imageName;
           // Uploading file to given path
           $request->file('file')->move($destinationPath, $fileName);

           // $image = $request->file('file');
           //       $imageName = $image->getClientOriginalName();
           //       $image->move(public_path('images'),$imageName);
           //
                 $imageUpload = new ImageUpload();
                 $imageUpload->filename = $imageName;
                 $imageUpload->save();
                 return response()->json(['success'=>$fileName]);

         }

       }
    }

    public function fileDestroy(Request $request)
   {
       $filename =  $request->get('filename');
       ImageUpload::where('filename',$filename)->delete();
       $path=public_path().'/files/'.$filename;
       if (file_exists($path)) {
           unlink($path);
       }
       return $filename;
   }

   public function show()
    {
        $files = ImageUpload::all();
        return view('pages.download', compact('files'));
    }

    public function up($id)
 {
  //dd($request);
    $posts3=ImageUpload::where('id', $id)->first();
   $use=ImageUpload::where('id', $id)->delete();
   $path=public_path().'/files/'.$posts3->filename;
   if (file_exists($path)) {
       unlink($path);
   }
  // return $posts3->filename;
   return redirect()->back()->with('status','Success! item deleted');
}

public function download($uuid)
{
    $book = ImageUpload::where('id', $uuid)->firstOrFail();
    $pathToFile = public_path().'/files/'.$book->filename;
    return response()->download($pathToFile);
}


}
