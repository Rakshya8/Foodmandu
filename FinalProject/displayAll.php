<?php
$sql="select * from restaurant";
$result= mysqli_query($connection, $sql);
echo'<div class="container-fluid">
      <div class="row">';

    while($row=mysqli_fetch_assoc($result)) {
        $name=$row['name'];
        $image=$row['image'];
        echo '<div class="col-md-5 col-lg-4 h-25" style="margin-bottom: 2%">';
        echo "<a href='individual_page.php?id=".$row['id']."'>".'<img src="Images/'.$row['image'].'" style="width:100%; height:200px"></a>';
        echo"<br>";
        echo'<p class="small-title inline" style="font-weight: 300;
    color: #4A4A4A;
    font-size: 1.25rem; margin-bottom: 0;margin-top: 2%">'.$row['name']."</p>";
        echo '<br>';
        echo '<i class="bi bi-geo-alt-fill" style="font-weight: 300;
    color: #4A4A4A;
    fill: #4A4A4A;
    font-size: 0.8rem;">'.$row['location'];
        echo"</i>";
        echo"<div style='position: absolute;
    width: 2rem;
    height: 2rem;
    top: 185px;
    right: 2rem;
    background: #FFFFFF;
    border-radius: 50%;
    padding-top: 5px;
    text-align: center;'>
     <i class='bi bi-suit-heart' onclick='wishlist(\"$name\",\"$image\",\"$id\")' style='font-size: 1.2rem;
    color: #9B9B9B;
    vertical-align: middle;'></i></div>";
        echo"</div>";
    }
    echo'</div></div>';

