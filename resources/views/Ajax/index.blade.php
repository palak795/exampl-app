<!DOCTYPE html>

<html>

<head>


    <title>Ajax jquery Tutorial</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>

   <body>

    <div class="container">

        <h1>Ajax Full Text Search Tutorial</h1>

            <div class="row">

                <div class="col-md-6">

                    <input type="text" name="search" class="form-control" 

                    placeholder="Search" value="">

                </div>

                <div class="col-md-6">

                    <button class="btn btn-primary" id="search">Search</button>

                    <button class="btn btn-secondary" id="reset">Reset</button>

                </div>

            </div>

   <br/>

      <table class="table table-bordered" id="data">

            <thead>

                <tr>

            
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile_Number</th>
                    <th>Subject</th>
                    <th>Message</th>

                </tr>

            </thead>
            
            <tbody>
                
            </tbody>
               

        </table>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
            
        </script>


  <script type="text/javascript">


get_data();

function get_data(search_keyword='') {
    $('tbody').html('');
    $.ajax({
        url: '{{route('get.data')}}',
        method: 'post',
        data:{
            _token: "{{ csrf_token() }}",
            search_keyword:search_keyword
        },
        success: function(res){

            html = "";
            for (var i = 0; i < res.length; i++) {
                html += "<tr>";
                html += "<td>"+res[i].name+"</td>";
                html += "<td>"+res[i].email+"</td>";
                html += "<td>"+res[i].mobile_number+"</td>";
                html += "<td>"+res[i].subject+"</td>";
                html += "<td>"+res[i].message+"</td>";

                // console.log(res[i]);
                html += "</tr>";
            }

            console.log(html);

            $('tbody').append(html);

        }
    });

}


$('#search').click(function(){

    var search_keyword = $('input[name=search]').val();

    if (search_keyword != '') {

          get_data(search_keyword);

    }
})


$('#reset').click(function(){

    var search_keyword = '';

        get_data();

})

</script>

    </div>

</body>

</html>