const app = require('express')();
const http = require('http').Server(app);
const io = require('socket.io');

http.listen(8001,function(){
    console.log("listen to port 8001");
});
