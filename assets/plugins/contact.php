<?php

				$to     = "info@drcasociados.com";

				$name      = $_POST['name'];
				$phone  = $_POST['phone'];
				$subject  = $_POST['subject'];
                $email     = $_POST['email'];
				$message      = $_POST['message'];

                $msg = "De :". $name . "\r\n Correo :".  $email . "\r\n Telefono :". $phone . "\r\nMensaje : ". $message ."\r\n";
					
				$titulo = "NUEVO CORREO RECIBIDO WEB DRC";

                //mail($to,$titulo, $msg, $header);
                mail($to, $titulo, $msg);

                    
                $dirigasea="https://drcasociados.com";
				echo"<meta HTTP-EQUIV='refresh'content='1;url=$dirigasea'>";

				
?>