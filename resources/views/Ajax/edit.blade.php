
<html lang="en">

<head>


    <title>Laravel Ajax jquery Tutorial</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>

 <div class="container panel panel-default ">

        <h2 class="panel-heading">Laravel Ajax jquery</h2>
        <div id="success_message"></div>

    <form class="form" id="contactForm" action="{{route('edit.data , $crud->id')}}" >


        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" value="{{$crud->name}}">
            <span class="text-danger" id="name-error"></span>
        </div>


        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Enter Email" id="email" value="{{$crud->email}}">
            <span class="text-danger" id="email-error"></span>
        </div>


        <div class="form-group">
            <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" id="mobile_number" value="{{$crud->mobile_number}}">
            <span class="text-danger" id="mobile-number-error"></span>
        </div>


        <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" id="subject" value="{{$crud->subject}}">
             <span class="text-danger" id="subject-error"></span>
        </div>


        <div class="form-group"> 
          <textarea class="form-control" name="message" cols="5" rows="10" placeholder="Message" id="message">{{$crud->message}}</textarea>
           <span class="text-danger" id="message-error"></span>
        </div>


        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>

    </form>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


   <script type="text/javascript">

    function (data) {

    $('#contactForm').on('submit',function(e){
 
        event.preventDefault();

        var id = $(this).data('id');

        $.ajax({

          url: "{{route('edit.data')}}"+'/' + id +'/edit',
          type:"POST",
          data:{

            "_token": "{{ csrf_token() }}",
            name:name,
            email:email,
            mobile_number:mobile_number,
            subject:subject,
            message:message,

        },

          success:function(response){
            console.log(response);
            $('#name').val('data.name')
            $('#email').val('data.email')
            $('#mobile_number').val('data.mobile_number')
            $('#subject').val('data.subject')
            $('#message').val('data.message')
          },

         });

        });

      </script>
    
 </body>

</html>