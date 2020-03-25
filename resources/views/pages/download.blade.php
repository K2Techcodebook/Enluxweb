@extends('layouts.app')
@section('title') Downloads  @endsection
@section('content')

  <div class="container">


    <div class="row">

      <div class="col-12">
        {{-- <h3 class="titulo-tabla">Lacasera Guestlist </h3> --}}


                         <br>
                          <br> <br> <br> <br>
                          <div class="col-lg-8 col-lg-offset-2">
                               @if (session('status'))

                                   <div class="alert alert-success">
                                       {{ session('status') }}
                                   </div>
                               @endif
                               <div id="add-success-bag">
                               </div>

                               <div id="add-error-bag">
                               </div>


                               <!-- <div class="alert alert-danger" id="add-error-bag">
                                                      <ul id="add-task-errors">
                                                      </ul>
                                                  </div> -->
                                                 </div>
    <!-- Editable table -->
  <div class="card">
    <div class="card-body">
      <div class="col-md-4 float-right">
   <div class="active-pink-3 active-pink-4 mb-4">
   <input class="bg-gray-200 form-control" id="myInput" type="text" placeholder="Search..">
  </div>
  </div>


      <div id="table" class="table-editable">
              <table id="dtBasicExample" class="table table-responsive-md table-striped table-bordered table-sm" cellspacing="0" width="100%">
        {{-- <table class="table table-bordered table-responsive-md table-striped text-center"> --}}
          <thead>
            <tr>
              <th class="text-center">S/N</th>
              <th class="text-center">file Id</th>
              <th class="text-center">filename</th>
              <th class="text-center">Download file</th>
              <th class="text-center">Delete</th>
                <th class="text-center">Time</th>
            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            $count = 1;
          //  dd($posts);
            foreach($files as $user)
            {
             //  $phone=App\Models\User_tickets::phone($user->user_id);
             // $email=App\Models\User_tickets::email($user->user_id);
             // $name=App\Models\User_tickets::name($user->user_id);


            echo '

            <tr>
            <td>'.$count++.'</td>
            <td>'.$user->id.'</td>
            <td>'.$user->filename.'</td>';?>
             <td><a href="{{ route('documents.download', $user->id) }}">Download</a></td>
              <td><a href="{{ route('up',['id' => $user->id] ) }}" class="btn btn-info btn-xs">Delete</a>   </td>
             <td>{{date('d/m/Y h:i:a',strtotime($user->created_at))}}</td>
            {{-- <td><a href="{{ route('up',['id' => $user->id, 'qrcode' => $user->user_id] ) }}" class="btn btn-info btn-xs">Delete</a>   </td> --}}
         {{-- <td><button type="button" name="email_button" class="btn btn-info btn-xs email_button" id="{{$user->id}}" data-email="{{$email}}" data-uidid="{{$user->id}}" data-uid="{{$user->user_id}}" data-ref="{{$user->ivcode}}" data-name="{{$name}}"  data-action="single">Send Mail</button></td> --}}
  <?php   echo '
           </tr>
            ';
            }
            ?>

            {{-- @forelse ($books as $book)
                                       <tr>
                                           <td>{{ $book->title }}</td>
                                           <td><a href="{{ route('books.download', $book->uuid) }}">{{ $book->cover }}</a></td>
                                       </tr>
                                   @empty
                                       <tr>
                                           <td colspan="2">No books found.</td>
                                       </tr>
                                   @endforelse --}}

          </tbody>
        </table>
      </div>


    </div>
  </div>


      </div>
    </div>






  </div>

       @section('javascript')
  <script>
  $(document).ready(function(){

    $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

    // Basic example

    // $('#dtBasicExample').DataTable({
    // "searching": false // false to disable search (or any other option)
    // });
    // $('.dataTables_length').addClass('bs-select');




    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
   $('.email_button').click(function(){
    $(this).attr('disabled', 'disabled');
    var id = $(this).attr("id");
    var action = $(this).data("action");
    var email_data = [];


      var qrcode= $(this).data("uid");
     var name= $(this).data("name");
     var user_id= $(this).data("uidid");
     var ref= $(this).data("ref");
     var email =$(this).data("email");



    if(action =='single')
    {
     email_data.push({
       qrcode: $(this).data("uid"),
      name: $(this).data("name"),
      user_id: $(this).data("uidid"),
      ref: $(this).data("ref"),
      email :$(this).data("email")
     });
    }
    else
    {
     $('.single_select').each(function(){
      if($(this). prop("checked") == true)
      {
       email_data.push({
         qrcode: $(this).data("uid"),
        name: $(this).data("name"),
        user_id: $(this).data("uidid"),
        email :$(this).data("email"),
        ref: $(this).data("ref")
       });
      }
     });
    }

    $.ajax({
     url:"send_mail",
     method:"POST",
    //  data:{name:name, id:uid},
      data:{email_data:email_data},
     beforeSend:function(){
      $('#'+id).html('Sending...');
      $('#'+id).addClass('btn-danger');
     },
     success:function(data){
      if(data = 'ok')
      {
       $('#'+id).text('Success');
       $('#'+id).removeClass('btn-danger');
       $('#'+id).removeClass('btn-info');
       $('#'+id).addClass('btn-success');
      }
      else
      {
       $('#'+id).text(data);
      }
      $('#'+id).attr('disabled', false);
     }

    });
   });
  });
  </script>
  @endsection

  @endsection
