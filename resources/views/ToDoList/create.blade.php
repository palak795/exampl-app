<!DOCTYPE html>

<html lang="en">
  
<head>
    <meta charset="utf-8" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required CDN's -->

    <link rel="stylesheet"
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>

    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
  </script>

    <script src="https://code.jquery.com/jquery-3.4.1.js" 
            integrity=
            "sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" 
            crossorigin="anonymous">
    </script>
  
    <style>
        .container {
            width: 90%;
            height: auto;
        }

          
        .foot {
            position: fixed;
            left: 10%;
            bottom: 40;
            top: 50%;
            width: 80%;
            text-align: center;
        }

    </style>
  
</head>
  
<body>

    <center>
       
        <div class="foot">

            <div class="row">

                <div class="col-sm-1">   </div>

                <div class="col-sm-10">

                    <!-- Input for tasks -->
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Add Task" 
                               id="text">

                        <div class="input-group-btn">

                           <button class="btn btn-success" value="submit">

                              <i class="glyphicon glyphicon-plus">

                              </i></button>

                        </div>

                    </div>

                    <br>
                    <br>

                </div>

            </div>

        </div>
  
        <!-- Rest of the screen used for Adding Tasks -->

        <br>
        <h2 class="text text-success">My Tasks:</h2>
        <br>


    @php

         $tasks = \App\Models\Task::all();


    @endphp


        <div class="container">

            <!-- For adding tasks to the list -->

            @foreach($tasks as $task)

            <div class="alert alert-success alert-dismissible fade in">
                
                    <a href="#"  data-id={{$task->id}} class="close" data-dismiss="alert" aria-label="close">×</a>
                    

                {{$task->task}}  

            </div>

            @endforeach

        </div>
  
    </center>



     <script>

        $(document).ready(function() {

            $('.btn-success').click(function() {

               // If something is written

                if ($('#text').val().length != 0) {

                    //Store previous data

                    var x = $('.container').html();

                    // Add typed text in alert container

                    var text = $('#text').val();

                    var y = 
                    `<div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                  ` + $('#text').val() + `</div>`;


                    //Update

                    $('.container').html(y + x);

                    //Clear after addition

                    $('#text').val("");
                    
                    $.ajax({
                        url: "{{route('test.store')}}",
                        method: 'post',
                        headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            text: text
                        },
                        success: function(res){
                            console.log(res);
                        }
                    })

                }

                 else alert("Enter some Text!");

            });

            var id = $(this).data("id");

            $.ajax({
                        url: '/test/'+id,
                        method: 'delete',
                        headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            "id": id 
                        },
                        success: function(res){
                            console.log(res);
                        }
                    })
  

            // When Task is clicked
            $(document).on('click', '.alert', function() {
                if ($(this).css('text-decoration-line') == "none")
                    $(this).css('text-decoration-line', 'line-through');
                else
                    $(this).css('text-decoration-line', 'none');
            });

        });

    </script>


</body>
  
</html>