<!DOCTYPE html>

<html>

<head>

  <title> jquery plugin </title>

	<meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <button class="'btn btn-danger" id="deleteproduct" data-id="" >Delete Record
    </button> --}}


<style>

form label {
  display: inline-block;
  width: 100px;
}


form div {
  margin-bottom: 10px;
}


.error {
  color: red;
  margin-left: 5px;
}


label.error {
  display: inline;
}


</style>


</head>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> 


</script>

<!-- First Form -->

<h1> Form Submit Using Ajax And Put Validations on it And Store in Database </h1>


<h2>Example 1:</h2>


<form  class = "form" id="first_form" >


  <div>

    <label for="first_name">First Name:</label>


    <input type="text" id="first_name" name="first_name"></input>

  </div>

  <br>


  <div>

    <label for="last_name">Last Name:</label>


    <input type="text" id="last_name" name="last_name"></input>

  </div>


  <br>


  <div>

    <label for="email">Email:</label>


    <input type="email" id="email" name="email"></input>

  </div>


  <br>


  <div>

    <label for="password">Password:</label>


    <input type="password" id="password" name="password"></input>

  </div>


  <br>


  <div>

    <input type="submit" id="submit"  value="Submit" />

  </div>

  <br>


</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


   <script type="text/javascript">


$(document).ready(function() {


  $('#first_form').on('submit',function(e) {
    e.preventDefault();


    var first_name = $('#first_name').val();


    var last_name = $('#last_name').val();


    var email = $('#email').val();


    var password = $('#password').val();


    $(".error").remove();


    if (first_name.length < 1) {


      $('#first_name').after('<span class="error">This field is required</span>');


    }


    if (last_name.length < 1) {

      
      $('#last_name').after('<span class="error">This field is required</span>');

    
    }

    
    if (email.length < 1) {

     
      $('#email').after('<span class="error">This field is required</span>');

    
    }


     else {

     
      // var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;

      var regEx = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
      
      var validEmail = regEx.test(email);

     
      if (!validEmail) {


        $('#email').after('<span class="error">Enter a valid email</span>');

      }


    }


    if (password.length < 8) {


      $('#password').after('<span class="error">Password must be at least 8 characters long</span>');


    }


$.ajax({

          url: "{{route('photo.store')}}",
          type:"POST",
          data:{

            "_token": "{{ csrf_token() }}",
            first_name:first_name,
            last_name:last_name,
            email:email,
            password:password,

        },

          success:function(response){
            console.log(response);

          },

  });


});


   });

</script>

</body>

</html>

