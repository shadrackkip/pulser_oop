<?php
include_once "Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body style="background-color: #fefefe;">
   
    <div class="container">
        <div class="mt-5">
               <div class="row">
                   <div class="col-lg-6">
                    <form id="user_form" action="/pulser/insert.php" method="POST">
                      <div class="form-group">
                          <label for="">First name</label>
                          <input type="text"
                           required
                            class="form-control" name="f_name" id="" aria-describedby="helpId" placeholder="">
                          
                        </div>
                        <div class="form-group">
                          <label for="">Last name</label>
                          <input type="text"
                          required
                            class="form-control" name="l_name" id="" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">This field is reuired</small>
                        </div>
                        <div class="form-group">
                          <label for="">Email address</label>
                          <input type="email" class="form-control" required name="email" id="" aria-describedby="emailHelpId" placeholder="">
                          <small id="emailHelpId" class="form-text text-muted">This field is reuired</small>
                        </div>
                        <br/>
                        <div class="form-group">
                          <button style="width: 100%;" type="submit" class="btn btn-block btn-primary">Submit</button>
                        </div>
                     </form>
                   </div>
                   <div class="col-lg-6">
                      <ul class="list-group">
                      <?php
                        $data = new Connection();
                        $results = $data->getUsers('users');
                        while($row = $results->fetch_assoc()) {
                          ?>
                      
                                       <li style="border: none !important;" class="list-group-item mt-3 shadow-lg">
                      
                                       <?php
                                       echo '<b>First name :</b>'.$row['f_name'].'<br/>';
                                       ?>
                                        <?php
                                       echo  '<b>Last name :</b>'.$row['l_name'].'<br/>';
                                       ?>
                                        <?php
                                       echo  '<b>Email :</b>'.$row['email'].'<br/>';
                                       ?>
                                       </li>
                      
                          </ul>
                          <?php
                           
                           }
                           ?>
                    
                   </div>
            
               </div>
        </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>