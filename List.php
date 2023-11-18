<?php  


    $connect = mysqli_connect("localhost", "root", "user", "platinumsongs");  
    $query ="SELECT * FROM tblsongs ORDER BY Title ASC";  
    $result = mysqli_query($connect, $query);  
    ?>  
    <!DOCTYPE html>  
    <html>  
    <head>  
         <title>Platinum Karaoke Song Finder</title>  
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
         <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
         <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
    </head>  
    <body>  
           
         <div class="container" >  
              <h2 align="center">Platinum Karaoke Song Finder</h2>  
              <div class="table-responsive"  width=50%>  
                   <table id="employee_data" class="table table-striped table-bordered">  
                        <thead>  
                             <tr>  
                                  <td>Code</td>  
                                  <td>Title</td>  
                                  <td>Artist</td>  
                                  <td>SearchCode</td>  
                                  
                             </tr>  
                        </thead>  
                        <?php  
                        while($row = mysqli_fetch_array($result))  
                        {  
                          $searchcode ="https://www.youtube.com/results?search_query=".$row['SearchCode'];
                          echo '<tr><td>'.$row["Code"].'</td><td>'.$row["Title"].'</td><td>'.$row["Artist"].'</td>';
                          ?>   


                          <td>Youtube Link: <a href="<?php echo $searchcode ?>" target="_blank">Click Here Link</a></td>
                          <!-- // <td><a href='https://www.youtube.com/results?search_query=$searchcode'>.$row["SearchCode"].'</td>   -->
                          </tr>  
                          <?php
                     }  
                
                ?> 

           </table>  
      </div>  
 </div>  
</body>  
</html>  
<script>  
    $(document).ready(function(){  
         $('#employee_data').DataTable();  
    });  
</script>  