<?php
session_start();

  if(isset($_POST['login'])) {
			include("database/db_connect.php");
    			$email = mysqli_real_escape_string($con,$_POST['email']);
					$pwd = mysqli_real_escape_string($con,$_POST['pass']);
					//error handlers
					//check if the inputs are empty
					if(empty($email)  || empty($pwd)){
						header("Location: view_reg.php?login=empty");
						exit();
					}else{
						$sql = "SELECT * FROM users WHERE email = '$email'";
						$result = mysqli_query($con, $sql);
						$rescheck =  mysqli_num_rows($result);
						if($rescheck<1){
							header("Location: view_reg.php?login=error");
							exit();
						}
					  else{
							if($row = mysqli_fetch_assoc($result)){
								//de hashing
                $hashPwdCheck=password_verify($pwd,$row['pass']);
								if(!$hashPwdCheck){
									header("Location:view_reg.php?login=error");
								}

								elseif($hashPwdCheck = true){
									// log in the users
									$_SESSION['u_id']=$row['id'];
                  $_SESSION['name']=$row['name'];
									header("Location:view_reg.php");
							}
						}
					}
				}
     }
					else{
						header("Location : home.php?login=error");
						exit(0);
					}
