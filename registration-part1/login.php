<?php
    session_start();
    include('hlavicka.php');
    include('navigacia.php');
    vypisNavigaciu("nic");
    include('prihlasenie.php');
    include('connect.php');

    if(isset($_POST['login']) && isset($_POST['password'])){

        $select = $mysql->prepare('SELECT password, active FROM editusers WHERE username = ?');
        $heslo = $mysql->real_escape_string($_POST['password']);
    
        if(!$select){?>
            <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Synktakticka chyba
            </div><?php
        }
        else{
            $ok = $select->bind_param("s",$_POST['login']);

            if(!$ok){?>
                <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Neprijatelny login
                </div><?php
            }
            else{
                $ok2 = $select->execute();
                if(!$ok2){?>
                    <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        Problem pri vykonani dopytu v databaze!!!
                    </div><?php
                }
                else{
                    $vysledok = $select->get_result();
                    if($vysledok->num_rows!=1){?>
                        <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            Nenajdený používatel
                        </div><?php
                    }
                    else{
                        $riadok = $vysledok->fetch_assoc();
                        if($riadok['active']!=1){?>
                            <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                Pouzivatel je neaktivny
                            </div><?php
                        }
                        else{
                            
                            if(password_verify($heslo, $riadok['password'])){
                                //prihlasenie
                                $select->close();
                                $_SESSION['user'] = $_POST['login'];
                                header('Location: index.php');
                                exit();
                            }
                            else{?>
                                <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    Nespravne heslo
                                </div><?php
                            }
                        }
                    }
                }
            }
            $select->close();
        }
    }   //koniec if $_POST
?>

<div class="container" style="width: 400px; margin-top: 100px;">
<form class="form-signin" action="login.php" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Prihláste sa, prosím</h1>
    <label for="login" class="sr-only">Login</label>
    <input type="text" name="login" id="login" class="form-control" placeholder="Používateľské meno" style="margin-top:6px" >
    <label for="password" class="sr-only">Heslo</label> 
    <input type="password" name="password" id="password" class="form-control" placeholder="Heslo" style="margin-top:6px" >
    <input type="submit" class="btn btn-lg btn-primary btn-block" style="margin-top:6px" value="Prihlasiť sa">
    <p style="margin-top:10px">
  	    Nemáte ešte účet? <a href="registration.php">Registrujte sa</a>
  	</p>
    <br>
</form>
</div>

<?php
    include('pata.php');
?>