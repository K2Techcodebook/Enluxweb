@extends('layouts.app')
@section('title') Upload  @endsection
@section('content')
  <!-- CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('dropzone/dist/min/dropzone.min.css')}}">

     <!-- JS -->
     <script src="{{asset('dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Ekko Lightbox
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <div class='content'>
          <!-- Dropzone -->
          <form action="{{route('users.fileupload')}}"  class='dropzone' >
          </form>
        </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
 @section('javascript')
    <!-- Script -->
    <script>
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone",{
        maxFilesize: 90000000000000,  // 3 mb
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
          // return file.name;
        },
        acceptedFiles: ".jpg,.sql,.xml,.jpeg,.gif,.png,.zip,.rar,.xlsx,.cad,.pdf,.doc,.docx,.ppt,.pptx,.pps,.ppsx,.odt,.xls,.xlsx,.mp3,.m4a,.ogg,.wav,.mp4,.m4v,.mov,.wmv",
        addRemoveLinks: true,
        timeout: 50000,
           removedfile: function(file)
           {
               var name = file.upload.filename;
               $.ajax({
                   headers: {
                               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           },
                   type: 'POST',
                   url: '{{ url("image/delete") }}',
                   data: {filename: name},
                   success: function (data){
                       console.log("File has been successfully removed!!");
                   },
                   error: function(e) {
                       console.log(e);
                   }});
                   var fileRef;
                   return (fileRef = file.previewElement) != null ?
                   fileRef.parentNode.removeChild(file.previewElement) : void 0;
           },
        success: function(file, response)
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
        });
    myDropzone.on("sending", function(file, xhr, formData) {
       formData.append("_token", CSRF_TOKEN);
    });
//
//     Dropzone.options.dropzone =
//     {
//        maxFilesize: 12,
//        renameFile: function(file) {
//            var dt = new Date();
//            var time = dt.getTime();
//           return time+file.name;
//        },
//        acceptedFiles: ".jpeg,.jpg,.png,.gif",
//        addRemoveLinks: true,
//        timeout: 5000,
//        success: function(file, response)
//        {
//            console.log(response);
//        },
//        error: function(file, response)
//        {
//           return false;
//        }
// };
    </script>
  @endsection
    @endsection
