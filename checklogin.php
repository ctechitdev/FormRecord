<?php 
session_start();
        if(isset($_POST['username'])){
                  include("database.php"); 
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM login 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      $_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: nav.php");
                      }
                  if ($_SESSION["level"]=="1284"){ 

                        Header("Location:insertfin_1284.php");
                      }
                      if ($_SESSION["level"]=="1302"){ 

                        Header("Location: insertfin_1302.php");
                      }
                      if ($_SESSION["level"]=="157"){ 

                        Header("Location: insertfin_157.php");
                                              }
                          if ($_SESSION["level"]=="1275"){ 

                          Header("Location: insertfin_1275.php");
                                        }
                                        if ($_SESSION["level"]=="1297"){ 

                                          Header("Location: insertfin_1297.php");
                                                        }
                                         if ($_SESSION["level"]=="1305"){ 

                                         Header("Location: insertfin_1305.php");
                                                                        }
                                        if ($_SESSION["level"]=="1323"){ 

                                        Header("Location: insertfin_1323.php");
                                                                                                         }
                                           if ($_SESSION["level"]=="1233"){ 

                                           Header("Location: insertfin_1233.php");
                                                                                       }
                                                if ($_SESSION["level"]=="1121"){ 

                                                Header("Location: insertfin_1121.php");
                                                                                         }
                                                if ($_SESSION["level"]=="1273"){ 

                                                Header("Location: insertfin_1273.php");
                                                                                         }
                                                if ($_SESSION["level"]=="1330"){ 
                                                Header("Location: insertfin_1330.php");}



if ($_SESSION["level"]=="1273"){ 

                                                Header("Location: insertfin_1273.php");}


                             if ($_SESSION["level"]=="555"){ 

                          Header("Location: nav.php");
                                                                                                           }




                                                                                                          }

                  else{
                    echo "<script>";
                        echo "alert(\" user or  password is not correct\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>