<?php

/* Connection to database */
  $con =mysqli_connect("localhost","root","","meghostel");

  /* Check connection */
  if(mysqli_connect_error()) {
    echo "Connection failed";
    printf("Error : %s",mysqli_connect_error());
  }

?>