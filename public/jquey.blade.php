<!DOCTYPE html>

<html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<h1> JQuery </h1><br>

<h2> click on the line and disappear paragraphs </h2><br>

<script>

$(document).ready(function(){

  $("p").click(function(){

    $(this).hide();

  });

});

</script>

</head>

<body>

<p>If you click on me, I will disappear.</p><br>

<p>Click me away!</p><br>

<p>Click me too!</p><br>

</body>

<br><br>

</html>

<!DOCTYPE html>

<html>

<head>

  <h2> click on Button and disappear Headings </h2><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $("h4").hide();

  });

});

</script>

</head>

<body>

<h4>If you click on me.</h4><br>

<h4>Click me always!</h4><br>

<h4>Click me too!</h4><br>

<button> click me to hide headings </button>

</body>

<br><br>

</html>

<!DOCTYPE html>

<html>

<head>

  <h2> click on Button and disappear Id</h2><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $("#test").hide();

  });

});

</script>

</head>

<body>


<p> ohhhhhhh My God !!!!!!!!!!!.</p><br>

<p id="test"> Its Amazing Wow!!!!!!!!!.</p><br>

<button>Click me to hide id</button>

</body>

</html>

<br><br>

<script>

$(document).ready(function(){

  $("h3").dblclick(function(){

    $(this).hide();

  });

});

</script>

<body>

<h3>If you double-click on me, I will disappear.</h3><br>

<h3>Click me two times !</h3><br>

</body>

<script>

  $(document).ready(function(){

    $("#p1").mouseenter(function(){

    alert("You entered p1!");

  });

});

</script>

</head>

<body>

  <h1> Mouse Enter Function </h1>

<p id="p1">Enter this paragraph.</p><br>

</script>

</body>

</html>

<script>

$(document).ready(function(){

$("#p6").mouseleave(function(){

alert("Bye! You now leave p6!");

});

});

</script>

<body>

<h1> Mouse Leave Function </h1>

<p id="p6">This is a paragraph.</p>

</body>

<br>

<h1> Focus And Blur Function</h1>

<script>

$(document).ready(function(){

  $("input").focus(function(){

    $(this).css("background-color", "pink");

  });

  $("input").blur(function(){

    $(this).css("background-color", "green");

  });

});

</script>

<body>

Name: <input type="text" name="fullname"><br>


Email: <input type="text" name="email"><br><br>

</body>

<br><br>

<h1> Multiple event handler </h1>

<script>

$(document).ready(function(){

  $("p").on({

    mouseenter: function(){

      $(this).css("background-color", "Red");

    }, 

    mouseleave: function(){

      $(this).css("background-color", "Lightblue");

    },

  });

});

</script>

<body>

<p>Click or move the mouse pointer over this paragraph.</p>

</body>

<br>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $(".rest").hide();

  });

});

</script>

</head>

<body>

<b class="rest">This is bold heading</b><br><br>

<b class="rest">This is bold line.</b><br><br>

<b> This is bold para.</b><br><br><br>

<button>Click me</button>

</body>

<br> <br>

<h2> click on Button and disappear Hyperlink Tags and show tags again </h2><br>

<script>

$(document).ready(function(){


  $("#hide").click(function(){


    $("[href]").hide(1000);

  });


  $("#show").click(function(){


    $("[href]").show(1200);

  });

});

</script>

<body>


<div> Here we use Hyper link </div><br><br>

<div>  Hii Jquery </div><br><br>


<p>  Hello World @@@@@@@@. </p><br><br>

<p> <a href=""> HTML Tutorial </a> </p><br>

<p> <a href=""> CSS Tutorial </a> </p><br><br>


<button id="hide">Hide</button>

<button id="show">Show</button>

</body>

<br><br>


<h2> click on Button and see fade in() </h2><br><br><br>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $("#div1").fadeIn();

    $("#div2").fadeIn("slow");

    $("#div3").fadeIn(3000);

  });

});

</script>

</head>

<body>

<p>Demonstrate fadeIn() with different parameters.</p>


<button>Click to fade in boxes</button><br><br>


<div id="div1" style="width:120px;  height:150px;  display:none;  background-color:red;">
</div><br>


<div id="div2" style="width:120px; height:150px; display:none; background-color:green;"></div><br>


<div id="div3" style="width:120px; height:150px; display:none; background-color:blue;"></div><br>

</body>

<br><br>

<h2> click on Button and disappear Hyperlink Tags and show tags again </h2><br><br><br>

<script>

$(document).ready(function(){

  $("button").click(function(){

    $("p").toggle();

  });

});

</script>

</head>

<body>

<button>Toggle between hiding and showing the paragraphs</button><br><br>

<p>This is a paragraph with little content.</p><br>

<p>This is another small paragraph.</p>

</body>

<br><br>

<h1>end </h1>

<h2> !!!!!!!!!!!!!!! </h2>

<br><br>







