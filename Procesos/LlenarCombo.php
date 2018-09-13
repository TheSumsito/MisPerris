<?php
    $IdRegion=$_POST["IdRegion"];
    $Cone= mysqli_connect("localhost", "user", "", "misperris");
    $reg= mysqli_query($Cone, "select * from ciudad where IdRegion='$IdRegion'");
    while ($row= mysqli_fetch_array($reg)){
        echo '<option value="'.$row[0].'">'.$row[1].'<option>';
    }