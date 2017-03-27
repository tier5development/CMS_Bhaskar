@extends('AdminLayouts.master')

    @section('content')



<script>
    $(document).ready(function(){
    
    $('#input-chat').focus();
    $('#input-chat').val("");
       
        $('#btn-chat').click(function(){

            var text=$('#input-chat').val();
            var id="{{$id->id}}";
            if(text==" ")
           { text = text.replace(/\s/g, "");}
            if(text!='')
            {
                $('#input-chat').val("");
                $.ajax({
                
                url:"{{route('sendmessageadmin')}}",
                type:'post',
                data:{id:id,text:text, _token:"{{Session::token()}}"},

                success:function(response)
                {


                    if(response=='success')
                        {
                         setInterval(function(){$('#chat_div').load(window.location + ' #chat_div');},1000);  

                        }
                    else if(response=='error')
                    {
                           
                    }

                }
                });
            }
            else
            {
                var input = document.getElementById("input-chat");
                    input.setAttribute('placeholder','Write Something');
                    $('#input-chat').focus();
            }
        });

 // setInterval(function(){ timer() }, 1000);
    });
    </script>
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    
                </div>

            <div >
                <div class="panel-body">
                    <ul class="chat">
                    <div id="chat_div">
                     @if(isset($chats))
                        @foreach($chats as $chat)
                            @if($chat->client_id!=1)
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix" id="chat_body">
                                <div class="header">
                                    <strong class="primary-font">{{$chat->client->user_name}}</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>{{$chat->created_at->diffForHumans()}}</small>
                                </div>

                              
                                
                                  <p align="center">
                                     {{$chat->message}}                              
                                   </p>
                            </div>
                        </li>
                        <hr>
                        @else
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>{{$chat->created_at->diffForHumans()}}</small>
                                    <strong class="pull-right primary-font">{{$chat->client->user_name}}</strong>
                                </div>
                                <p align="center">
                                    {{$chat->message}} 
                                </p>
                            </div>
                        </li>
                        <hr>
                        @endif
                            @endforeach
                                @endif
                     </div>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group" id="input">
              
                        <input id="input-chat" type="text" class="form-control input-sm" placeholder="Type your message here..." name="input_chat" />
                          <center><span id="msg"></span></center>
                        <span class="input-group-btn" >
                            

                                <button class="btn btn-warning btn-sm" id="btn-chat">
                                Chat</button>
                              
                        </span>
                    </div>
                </div>
            </div>
            </div>
  
    @endsection