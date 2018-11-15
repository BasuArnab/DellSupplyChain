 <!DOCTYPE html>
  <html>
   <head>
    <script type="text/javascript" 
       src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   </head>
   <body>

    <?php
    $json=file_get_contents("http://localhost:8080/ATTR");
            $data =  json_decode($json);
        
    ?>
    <table>
      <tbody>
        <tr>
            <th>ATTRID</th>
            <th>IDENTIFIER</th>
            <th>ATTRTYPEID</th>
            <th>F1</th>
            <th>F2</th>
            <th>CREATED DATE</th>
            <th>UPDATED DATE</th>



        </tr> 



      </tbody>



    </table>


      </tr>
    <?php foreach ($data as $data) : ?>
        <tr>
            <td> <?php echo $data->attr_ID; ?> </td>
            <td> <?php echo $data->identifier; ?> </td>
            <td> <?php echo $data->attrtypeId; ?> </td>
            <td> <?php echo $data->field1; ?> </td>
            <td> <?php echo $data->field2; ?> </td>
            <td> <?php echo $data->created_Date; ?> </td>
            <td> <?php echo $data->updated_Date; ?> </td>
        </tr>
    <?php endforeach; ?>
  </body>
</html>