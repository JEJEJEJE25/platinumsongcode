
<?php
    
    require_once "config.php";
    global $conn;

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Nav Bar -->
<nav>

    <label class="logo">PlatinumKaraoke</label>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
     
    </ul>
</nav>
<!-- section -->
<section>
    <div>
        <div>
        
        
        <!-- form textbox 
            <div class="form">
                <form name="Form1" method="POST" action="index.php">

                        <p>Search By: </p>
                        <input type="radio" id="code" name="Column" value="Code" ><label for="code">Code</label>
                        <input type="radio" id="title" name="Column" value="Title" checked="checked"><label for="title">Title</label>
                        <input type="radio" id="artist" name="Column" value="Artist" ><label for="artist">Artist</label><br>
                    <br>
                    <input type="text" name="title"></input>
                    <input type="submit" value="Search"></input>
                </form>
                <br>
                <br>
                <label>Click <a href="https://platinumkaraoke.ph/wp-content/uploads/2016/08/1.-P-series-Volume-59-FULL-LIST.pdf">Here</a> to Download the Platinum Song Book Volume 59P Series</label>
            </div>
        </div>
      
        <div class="child2"  width=50%>
            
            <h1>Search Result/s</h1> -->
            <!-- result code -->
            <?php

            // if(isset($_POST['title'])){
                
            //     $find = $_POST["title"];
            //     $table = $_POST["Column"];
            //     $search = mysqli_real_escape_string($conn,trim($find));
            //     $query = "SELECT * FROM tblsongs WHERE $table LIKE '%$search%' LIMIT 0,6";
            //     $result = mysqli_query($conn,$query);

            //     if(mysqli_num_rows($result)>0){
            //         while($row = mysqli_fetch_assoc($result)){
            //             $code=$row['Code'];
            //             echo "<label style='color: teal;font-weight: 500;background-color:white;font-size:20px;'>Karaoke Code: $code</label><br>";
            //             $title= $row['Title'];
            //             echo "<label>Song Title: $title</label><br>";
            //             $artist= $row['Artist'];
            //             echo "<label>Song Artist: $artist</label><br>";
            //             $searchcode = $row['SearchCode'];
            //             echo "<label>Youtube Link: <a href='https://www.youtube.com/results?search_query=$searchcode'>Click Here Link</a></label><br>";
            //         }

            //     }else{
            //         echo "No record found";
            //     }           
            //     // paging 
            //     $res1 = mysqli_query($conn,"SELECT * FROM tblsongs");
            //     $count = mysqli_num_rows($res1);
                
            //     $a = $count/6;

            //     $a = ceil($a);
            //     // page number
            //     for($b = 1; $b<=$a;$b++){
            //         echo "<a href='index.php?page=".$b."'>$b</a>";
            //     }
            // }
            include('List.php');
            ?> 
        </div>
    </div>
</section>


</body>
</html>