<head>
  <title>Attributes</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>



<body>


    <nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dell Supply Chain</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Create A EBOM</a></li>
        <li><a href="#">Create A MBOM</a></li>
        <li><a href="#">Create a Atrributes</a></li>
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <p><form id="form" action="/index.php" method="post">
    ITEM ID:<input type="text" name="id"><br><br>
      IDENTIFIER:<input type="text" name="identifier"><br><br>
      DESCRIPTION<input type="text" name="description"><br><br>
      <!-- <input type="text" name="lname"><br> -->
      ITEMTYPE<input type="text" name="itemType"><br><br>
      FIELD1<input type="text" name="f1"><br><br>
      FIELD2<input type="text" name="f2"><br><br>
      CREATED_DATE<input type="text" name="cdate"><br><br>
      UPDATED_DATE<input type="text" name="udate"><br><br>
  <input type="submit" value="Submit">
</form></p>


    <?php
    $json=file_get_contents("http://localhost:8080/ATTR");
            $data =  json_decode($json);
        
    ?>
    <table style="margin-left:10px">
      <tbody>
        <tr>
            <th>ATTRID</th>
            <th>IDENTIFIER</th>
            <th>ATTRTYPEID</th>
          <!--   <th>F1</th>
            <th>F2</th>
            <th>CREATED DATE</th>
            <th>UPDATED DATE</th> -->



        </tr> 




    <?php foreach ($data as $data) : ?>
        <tr>
            &emsp;
            <td> <?php echo $data->attr_ID; ?> </td>&emsp;&emsp;
            <td> <?php echo $data->identifier; ?> </td>&emsp;&emsp;
            <td> <?php echo $data->attrtypeId; ?> </td>&emsp;&emsp;
            <!-- <td> <?php echo $data->field1; ?> </td> -->
            <!-- <td> <?php echo $data->field2; ?> </td> -->
            <!-- <td> <?php echo $data->created_Date; ?> </td> -->
            <!-- <td> <?php echo $data->updated_Date; ?> </td> -->
        </tr>
        <br>
    <?php endforeach; ?>

      </tbody>



    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        // click on button submit
        $("#submit").on('click', function(){
            // send ajax
            $.ajax({
                url: 'http://localhost:8080/ATTR', // url where to submit the request
                type : "POST", // type of action POST || GET
                dataType : 'json', // data type
                data : $("#form").serialize(), // post data || get data
                success : function(result) {
                    // you can see the result from the console
                    // tab of the developer tools
                    console.log(result);
                    // window.location.reload()

                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            })
        });
    });

</script>
  </body>
</html>