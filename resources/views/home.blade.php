@extends('layouts.base')
@section('content')
<style>
    .POSY-AI{
        display: none;
    }
   .manage-text{
       white-space: break-spaces;
       }
   .ab4{
       font-size:19px;
       }
   .ab4 a{
       color: #000;
       }
   .ab4 a:hover{
       color: #000;
       text-decoration: none;
       }
   .result{
       justify-content:center;
       color:#006400 ;
       font-size:16px;
       margin-left:30px;
       }
   .av{
       float:right;
       font-size:17px;
       }

   .loader {
       position: fixed;
       left: 0px;
       top: 0px;
       width: 100%;
       height: 100%;
       z-index: 9999;
       background-color: #ffffffcf;
       }

   .loader img{
       position: relative;
       left: 40%;
       top: 40%;
       }

   .hideloader{
    display:none;
   }
   .card-body{
       border-radius:10px;
   }
   @media screen and (min-device-width : 388px) and (max-device-width : 800px) {
     .ab3{
            font-size: 20px;
        }
   }
   @media screen and (min-device-width : 320px) and (max-device-width : 480px) {
        .chat-care .chat-img {
            display: none !important;
        }
        .ab3{
            font-size: 20px;
        }
        .ab4 {
            font-size: 15px;
        }
        .ab1{
            width: 60px;
        }
        .pr-4{
            display: none !important;
        }
        .primary-font{
            display: none !important;
        }
        .POSY-AI{
            display: block;
            display: contents;
        }
        .Chat-History{
            display: none;
        }
        .card-header{
            padding: 10px !important;
        }
        .ab3{
            padding-top: 10px;
        }
    }
</style>
<div class="container-fluid ab2">
   <img src="{{asset('images/_ii_lbws2ipy4_.jpeg')}}" alt="logo" class="ab1" width="110">
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <div class="ab3 ao">What question do you want to ask me?</div>
      </div>
      <div class="col-md-2"></div>
   </div>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
         <form id="myform">
            <div class="wrap">
               <div class="search">
                  <button type="submit" class="searchButton">
                  <i class="fa fa-search"></i>
                  </button>
                  <input  class="searchTerm" oninput="showsuggestion()" type="text" id="searchBox" name="title" style="color:#00008B; text-align:left!important">
                  <div class="hideloader"><img src="{{asset('public/images/typing-text.gif')}}" style="width: 80px;"></div>
               </div>
            </div>
         </form>
         <div class="col-md-2"></div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-4"></div>
         <div class="col-md-5">
            <div class="ab4 Suggestions">Suggestions:<br>
               -<a class="link" href="#"><span class="aq3"> How can I find a tutor?</span></a><br>
               -<a class="link" href="javascript:void(0)" onclick="clickMe()"> <span class="aq3">Who can I go to for mental health?</span></a><br>
               -<a class="link" href="#"> <span class="aq3">Where can I find info on financial aid?</span></a><br><span class="aq3">
               - Or just type,</span> <a class="link" href="javascript:void(0)"> <span class="aq3">“I’m feeling lonely”</span></a>
            </div>
         </div>
         <div class="col-md-4"></div>
      </div>
   </div>
</div>

<!-- Mohit Kumar -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style_chat.css')}}">
<style type="text/css">
.aq{width:51px!important;height:51px!important;}
   .float-end {
    float: right !important;
/*    width: 35%;*/
   }

   .chat-box-one2{
    width: auto !important;
    height: 580px !important;
   /*overflow: scroll !important;*/
    overflow-y:scroll !important;
   }

   .slimScrollDiv{
       position: relative !important;
       overflow: hidden !important;
       width: auto !important;
       height: 580px !important;
   }
   ::-webkit-scrollbar {
    width: 5px;
   }
   /* Track */
   ::-webkit-scrollbar-track {
    background: #f1f1f1;
   }

    .max-w-p80 {
         min-width: 35%;
         max-width: 80%;
    }

   /* Handle */
   ::-webkit-scrollbar-thumb {
    background: #888;
   }
   /* Handle on hover */
   ::-webkit-scrollbar-thumb:hover {
     background: #555;
   }
   .rightm{
    right: 10px;
   }
   #posyresult{
    background-color:#D3D3D3;
    border-radius:2px solid;
   }

   .text-semi-muted{
    font-size:16px;
   }
</style>
<section class="content">
    <div class="row">
        <div class="col-xxxl-12 col-lg-12 col-12">
            <div class="box">
                <div class="card">
                    <div class="card-header text-left">
                        <span> <a class="avatar avatar-lg status-success mx-0" href="#">
                            <img src="{{asset('images/ChatbotIcon .png')}}" class="rounded-circle" alt="..." width="55">
                            </a>
                            <b class="Chat-History">Chat History</b>
                            <b class="POSY-AI">POSY AI</b>
                        </span>
                        </div>
                    <div class="card-body chat-care">
                        <ul class="chat">
                             <?php foreach ($data['chathistory'] as $key => $value){
                        ?>
                        <li class="admin clearfix">
                                <span class="chat-img right clearfix  mx-2">
                                    <img src="{{asset('images/man.png')}}" alt="Admin" class="img-circle" width="50"/>
                                </span>
                                <div class="chat-body clearfix" style="background:#76d6ff">
                                    <div class="header clearfix">
                                        <small class="right text-muted"><span class="glyphicon glyphicon-time aq1"><?php  echo date('Y-m-d H:i A',strtotime($value->created_at)); ?></span></small>
                                        <strong class="left primary-font pr-4" style="color:black;font-size:15px;">Your Question</strong>
                                    </div>
                                    <p><?php echo htmlspecialchars_decode(stripslashes($value->title)); ?></p>
                                </div>
                            </li>
                            <li class="agent clearfix">
                                <span class="chat-img left clearfix mx-2">
                                    <img src="{{asset('images/ChatbotIcon .png')}}" alt="Agent" class="img-circle" width="50"/>
                                </span>
                                <div class="chat-body clearfix" style="background:#C0C0C0">
                                    <div class="header clearfix">
                                        <strong class="primary-font" style="color:black;">POSY AI</strong> <small class="right text-muted">
                                            <span class="glyphicon glyphicon-time"></span><?php echo date('Y-m-d H:i A',strtotime($value->created_at)); ?></small>
                                    </div>
                                    <p>{{$value->result}}</p>
                                </div>
                            </li>
                         <?php
                        }
                        ?>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
   $(function(){
     function setText() {
           $("#searchBox").val($(this).text());
           return false;
     }
   $('a.link').click(setText);
   });
</script>
<script>
   function clickMe() {
   var text = document.getElementById("popup");
   text.classList.toggle("hide");
   text.classList.toggle("show");
   }
</script>
<script type="text/javascript">
   function showsuggestion(){
       var text = $(".searchTerm").val();
       text = text.trim();
       if(text == ""){
        $(".Suggestions").removeClass('d-none');   
       }
   }

   var i = 0;
   var txt = '';
   var speed = 10;
   $("form#myform").submit(function(e) {
      $(".result").text("");
       e.preventDefault(); 
       var send = true;
       var searchTerm = $(".searchTerm").val();
       searchTerm = searchTerm.trim();
       if(searchTerm == ""){
           send = false;
           alert("Please Enter Any Question!")
       }else{
           $.ajax({
               url:"{{ url('/open-chat') }}",
               method: 'post',
               data: {
                   "_token": "{{ csrf_token() }}",
                   "title" : searchTerm
                   },
                   beforeSend: function(){
                     $(".hideloader").css("display","block");
                   },
               success: function(result){
                $(".Suggestions").addClass('d-none');
                   var returnedData = JSON.parse(result);
                if(returnedData.status == true){
                    var time = '<?php echo date('Y-m-d H:i A');?>';
                    $(".result").text(returnedData.outputText)
                    $(".searchTerm").val("");
                    $(".hideloader").css("display","none"); 
                                var html = '<li class="admin clearfix">';
                                html += '<span class="chat-img right clearfix  mx-2">';
                                    html += '<img src="http://posyai.omkatech.com/images/man.png" alt="Admin" class="img-circle" width="50">';
                                html += '</span>';
                                html += '<div class="chat-body clearfix" style="background:#76d6ff">';
                                    html += '<div class="header clearfix">';
                                        html += '<small class="right text-muted"><span class="glyphicon glyphicon-time aq1">'+time+'</span></small>';
                                        html += '<strong class="left primary-font pr-4" style="color:black;font-size:15px;">Your Question</strong>';
                                    html += '</div>';
                                    html += '<p>'+returnedData.question+'</p>';
                                html += '</div>';
                            html += '</li>';

                            html += '<li class="agent clearfix">';
                                html += '<span class="chat-img left clearfix mx-2">';
                                    html += '<img src="http://posyai.omkatech.com/images/ChatbotIcon .png" alt="Agent" class="img-circle" width="50">';
                                html += '</span>';
                                html += '<div class="chat-body clearfix" style="background:#C0C0C0">';
                                    html += '<div class="header clearfix">';
                                        html += '<strong class="primary-font" style="color:black;">POSY AI</strong><small class="right text-muted">';
                                html += '<span class="glyphicon glyphicon-time"></span>'+time+'</small>';
                                html += '</div>';
                                    html += '<p>'+returnedData.outputText+'</p>';
                                html += '</div>';
                            html += '</li>';
                       $(".chat").prepend(html);
                       // $(".chat-box-one2").append(html);
                       // console.log("mohit").append(html);
                       //txt = returnedData.outputText;
                       //typeWriter();
                }
           // console.log(result)
               }
           })
       }
   })

   function typeWriter() {
         if (i < txt.length) {
             console.log(txt);
           document.getElementById("result").innerHTML += txt.charAt(i);
           i++;
           setTimeout(typeWriter, speed);
         }
       }
</script>
<script>
   // result.onload = function() {
   //     $('.loader').fadeOut();
   // }
     $(document).ready(function(){
        $('.loader').fadeOut();
       })
</script>
<!-- POSY AI -->
@endsection