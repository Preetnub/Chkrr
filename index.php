<?php error_reporting(0);
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <title>PAYPAL CC CHECKER</title>
    <link rel="icon" href="path/images/favicon.ico" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="path/js/custom.js"></script>
    <script src="path/js/priv8explicitchk.js"></script>
    <link href="path/css/bootstrap.css" rel='stylesheet' type='text/css'>
    <link href="path/css/animate.css" rel='stylesheet' type='text/css'>
    <link href='path/css/explicitchk.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="path/css/font-awesome.min.css">
</head>

    <div class="animated bounceInDown" id="formulario">
        <table class="display" id="example">
            <center>
                <br>
                <br>
                <font size="2"><h2>BINVERSE PAYPAL CHECKER</br><small>(Updated 17/04/2022) <font size="1">@bin_verse on Telegram</font></small></h2></font>
                <br>
                <textarea name="ccs" id="ccs" placeholder="4984069124851970|08|2020|980" class="form-control" style="max-width: 800px; min-width: 800px; min-height: 200px; max-height: 200px; text-align: center;" placeholder=""></textarea>
                <br>
                <center>
                    <span>
                  Information: 
                  <i id="demo">
                     <div class="label label-warning label-dismissible">Not Started</div>
                  </i>
                   Uploaded: 
                  <div id="carregada" class="label label-warning label-dismissible">0</div>
                  </i>  Tested: 
                  <div id="testado" class="label label-warning label-dismissible">0</div>
                   Approved: 
                  <div id="CLIVE" class="label label-warning label-dismissible">0</div>
                   Disapproved: 
                  <div id="CDIE" class="label label-warning label-dismissible">0</div>
               </span>
                </center>
    </div>
    <br>
    <div class="form-inline">
        <button type="submit" name="testar" value="Iniciar " onclick="start()" class="fcbtn btn btn-warning btn-outline btn-1e btn-squared">Start</button>&nbsp;&nbsp;&nbsp;&nbsp; 
        <button type="submit" name="limpar" value="Limpar" onclick="limpar()" class="fcbtn btn btn-info btn-warning btn-1e btn-squared animated ">Clear</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seperator Used: 
        <input value="|" type="text" maxlength="1" style="height: 35px; width: 60px; text-align: center;" class="form-control" name="separador" id="separador" placeholder="|">
         </table>
    </div>
    </div>
    <br>
    <center>
        <div class="col-md-6 animated bounceInLeft">
            <div class="panel panel-filled">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel"><font color="#1ABE88"><i class="fa fa-check" aria-hidden="true"></i></font></a>
						
                    </div>
                    Approved
                </div>
                <div class="panel-body">
                    <p>The info of <code>cards</code> that are <code>working</code> will be displayed here</p>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th><font size="2">#</font>
                                    </th>
                                    <th><font size="2">Status</font>
                                    </th>
                                    <th><font size="2">Credit Cards</font>
                                    </th>
                                    <th><font size="2">Information</font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody name="aprovadas" id="aprovadas">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 animated bounceInRight">
            <div class="panel panel-filled">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><font color="#DA514A"><i class="fa fa-close"></i></font></a>
                    </div>
                    Rejected
                </div>
                <div class="panel-body">
                    <p>The info of <code>cards</code> that are <code>rejected</code> will be displayed here</p>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th><font size="2">#</font>
                                    </th>
                                    <th><font size="2">Status</font>
                                    </th>
                                    <th><font size="2">Credit Cards</font>
                                    </th>
                                    <th><font size="2">Information</font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody name="reprovadas" id="reprovadas">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </html>
