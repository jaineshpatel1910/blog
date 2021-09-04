const express = require('express');
const app = express();
const server = require('http').createServer(app);
const mysql = require('mysql');

const pool = mysql.createPool({
    host : 'localhost',
    user : 'root',
    password : '',
    database : 'blog',
});

const io = require('socket.io')(server, {
    cors: { origin: "*" }
});

var user = {};
io.on('connection', (socket) => {
    console.log('Connected: ' + socket.id);

    //var socketId = Echo.socketId();

    socket.on('sendChatToServer', (message) => {
        //console.log(message);
        //io.sockets.emit('sendChatToServer', message)

        console.log('a user ' + message.userId + ' connected');
        user['admin'] = 'Q1_LnQghuTbDjaP9AAAH';
            //saving userId to object with socket ID
        message.userId = user['Q1_LnQghuTbDjaP9AAAH'];
        io.to(message.userId).emit(message);
        io.to('{{$user->id}}').emit(message);
        //io.to['MyRlHRvmJzzkT8cKAAAB'].emit(message);
        

        // socket.on('sendChatToServer', function(message){
            
        // });
       
        //user[jainesh] = F3xdP2KoiZtb8XbCAAAQ;
        // socket.id = 'yIQmP2B6shEBUpqeAAAB';
        // user['admin'] = 'yIQmP2B6shEBUpqeAAAB';
        // io.to('yIQmP2B6shEBUpqeAAAB').emit(message);
        //user[milan] = QibR07kLvD8gpQESAAAH;
        // io.sockets.connected[user['admin']]
        //     .emit('private', {
        //         msg:'private message for user with name '+ admin
        //     });
        //     io.to(O53kzvfm9wl5FH0yAAAB).emit('sendChatToClient', message);

        //io.to(socket.id).emit('sendChatToClient', message);
        
        //io.sockets.to(`${user.id}`).emit('sendChatToClient', message);

        // var users = {
        //     'jainesh@gmail.com' : [],
        //     'admin@gmail.com' : [],
        //     'milan@gmail.com' : []
        // };
        // users[message.to].emit('sendChatToClient', message)

        //sockets.broadcast.to(socket.id).emit('sendChatToClient', message);
        //io.sockets[id].emit(message);
        
    });

    socket.on('disconnect', (socket) => {
        console.log('Disconnect');
    });
});

server.listen(3000,()=>{
    console.log('Server is running');
});