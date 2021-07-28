
<html lang="en">


<head>



    <title>Laravel Ajax jquery Tutorial</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>


<body>

 <div class="container panel panel-default ">


        <h2 class="panel-heading">Laravel Ajax jquery Validation</h2>

    <form class="form" id="contactForm" >


        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name">
            <span class="text-danger" id="name-error"></span>
        </div>


        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Enter Email" id="email">
            <span class="text-danger" id="email-error"></span>
        </div>


        <div class="form-group">
            <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" id="mobile_number">
            <span class="text-danger" id="mobile-number-error"></span>
        </div>


        <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" id="subject">
             <span class="text-danger" id="subject-error"></span>
        </div>


        <div class="form-group"> 
          <textarea class="form-control" name="message" cols="5" rows="10" placeholder="Message" id="message"></textarea>
           <span class="text-danger" id="message-error"></span>
        </div>


        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>


    </form>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


   <script type="text/javascript">


    $('#contactForm').on('submit',function(event){

    
        event.preventDefault();


        let name = $('#name').val();

        let email = $('#email').val();

        let mobile_number = $('#mobile_number').val();

        let subject = $('#subject').val();

        let message = $('#message').val();

        $.ajax({

          url: "{{route('contact.store')}}",
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

          },

         });

        });

    </script>




 </body>

</html>



<html>

<style type="text/css">

html

{

  font-family: Arial, sans-serif;
  max-width: 500px;
  margin: auto;
  color: #666;

}

form

{

  padding: 15px;
  border: 1px solid #666;
  background: #fff;
  display: none;

}


#formButton

{

  display: block;
  margin-right: auto;
  margin-left: auto;

}

</style>

<button type="button" id="formButton">Toggle Form!</button>


<form id="form1">

  <b>First Name:</b> <input type="text" name="firstName">
  <br><br>

  <b>Last Name: </b><input type="text" name="lastName">
  <br><br>

  <b> Age:</b>
  <br>

  <input type="radio" name="age" value="adolescent"> 0 - 19 years
  <br>

  <input type="radio" name="age" value="mid"> 20 - 59 years
  <br>

  <input type="radio" name="age" value="senior"> 60 + years
  <br> <br>

  <b>Preferred Color:</b>

  <select name="color">

    <option value="blue">Blue</option>

    <option value="green">Green</option>

    <option value="yellow">Yellow</option>

    <option value="red">Red</option>

    <option value="pink">Pink</option>

  </select>

  <br><br>

  <b>Comment:</b>
  <br>

  <textarea name="comment">
    Enter your comment here
  </textarea>

  <br><br>

<button type="button" id="submit">Submit</button>

</form>



<script>

$(document).ready(function() {

  $("#formButton").click(function() {

    $("#form1").toggle();

  });

});

</script>

</html>
















