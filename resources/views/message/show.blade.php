<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <style>
            .chat-row {
                margin: 50px;
            }

            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            ul li {
                padding:8px;
                background: #928787;
                margin-bottom:20px;
               
            }

            ul li:nth-child(2n-2) {
                background: #c3c5c5;
                text-align: right;

            }

            .chat-input {
                border: 1px solid lightgray;
                padding: 15px 50px;
                
            }
        </style>
    </head>
    <body>

        <form action="{{ url('chat/{user->id}/store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            @foreach ($user as $user)
                <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
            @endforeach

            <input type="hidden" name="reciever_id" value="{{$user->id}}">
             
            <div class="container">
                <div class="row chat-row">
                    <div class="chat-content">
                        <ul>
                        </ul>
                    </div>

                    <div class="chat-section">
                        <div class="chat-box">
                            <h4>Write your message here</h4>
                            <br>
                            <input class="chat-input bg-white" name="message" contenteditable="">
                        </div>
                    </div>
                </div>
            </div>
        </form>
            
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.socket.io/4.1.2/socket.io.min.js" integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous"></script>
    
        <script src="/socket.io/socket.io.js"></script>

        <script>
            $(function(){
                let ip_address = '127.0.0.1';
                let socket_port = '3000';
                let socket = io(ip_address + ':' + socket_port);

                // const socket = io();
                socket.emit('sendChatToServer',{userId:`${user->id}`});
                    
                //let chatInput = $('#chatInput');

                // chatInput.keypress(function(e) {
                //     let message = $(this).html();
                //     console.log(message);
                //     if(e.which === 13 && !e.shiftkey){
                //         socket.emit('sendChatToServer', message);
                //         chatInput.html('');
                //         return false;
                //     }
                // });

                // socket.on('sendChatToClient', (message) => {
                //     $('.chat-content ul').append(`<li>${message}</li>`);
                // });
            });
        </script>
        
    </body>
</html>