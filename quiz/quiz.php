<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login/login.php");
    exit;
}

?>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    
    <title>Question 1</title>

    <link rel="stylesheet" href="style.css">

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript'
     scr='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src="script.js"></script>


</head>
<body oncontextmenu='return false' class='snippet-body'>
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            <div class="border">
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        <h4>MCQ Quiz</h4><span id = "timer" style = "font-size: 30px;">30:00</span><span>(1 of 30)</span>
                    </div>
                </div>
                <div class="question bg-white p-3 border-bottom">
                    <div class="d-flex flex-row align-items-center question-title">
                        <h3 class="text-danger">Q1.</h3>
                        <h5 id = "question" class="mt-1 ml-2">Question 1</h5>
                    </div>
                    <form action = "#">
                        <div id = "sa" class="ans ml-2 opt">
                            <label for = "sta" class="radio"> <input id = "sta" type="radio" name="options" value="strongly-agree"  onclick="enableButton()"  required> <span id = "sa" style = "width: 170px;">Strongly Agree</span>
                            </label>
                        </div>
                        <div class="ans ml-2 opt">
                            <label for = "a" class="radio"> <input id = "a" type="radio" name="options" value="agree" onclick="enableButton()" required> <span>Agree</span>
                            </label>
                        </div>
                        <div class="ans ml-2 opt">
                            <label for = "n" class="radio"> <input id = "n" type="radio" name="options" value="neutral" onclick="enableButton()" required> <span>Neutral</span>
                            </label>
                        </div>
                        <div class="ans ml-2 opt">
                            <label for = "d" class="radio"> <input id = "d" type="radio" name="options" value="disagree" onclick="enableButton()" required> <span>Disagree</span>
                            </label>
                        </div>
                        <div class="ans ml-2 opt">
                            <label for = "sd" class="radio"> <input id = "sd" type="radio" name="options" value="strongly-disagree" onclick="enableButton()" required> <span style = "width: 190px;">Strongly Disagree</span>
                            </label>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center p-3 bg-white">
                            <!--<button class="btn btn-primary d-flex align-items-center btn-danger" type="button"><i
                                    class="fa fa-angle-left mt-1 mr-1"></i>&nbsp;previous
                            </button>
                            <a id = "next-button" href="question2.html">-->
                            <button id = "btn" onclick = "openQuestion2()" class="btn btn-primary border-success align-items-center btn-success" type="button" disabled = true>Next<i
                                    class="fa fa-angle-right ml-2"></i></button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>