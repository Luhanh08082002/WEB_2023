const express = require('express');

const cors = require('cors');
const dotenv = require('dotenv');
const mongoose = require('mongoose');
const cookieParser = require('cookie-parser');

const userRouter = require("./routers/userRouter")
const messagesRouter = require("./routers/messagesRouter")
const imagesRouter = require("./routers/ImagesRouter")

require("dotenv").config();
const app = express();
app.use(cors());
app.use(cookieParser());
app.use(express.json());
app.use('/api/auth', userRouter)
app.use('/api/messages', messagesRouter)


// khai baos thu vien body-parser and muter
app.set('view engine','ejs');
app.set('fonend/src/pages/profile' , './fonend/src/pages/profile');
const bodyparser = require("body-parser");
// const multer = require("multer");

// var storage = multer.diskStorage({
//     destination:function(req,file,cb){
//         if(file.mimetype === "image/jpg" ||
//         file.mimetype === "image/jpeg" ||
//         file.mimetype === "image/png" ){
//             cb(null, './public/uploads')
//         }else{
//             cb(new Error('not Image'),false);
//         }
        
//     },
//     filename:function(req,file,cb){
//         cb(null, Date.now()+'.jpg');
//     }
//     })
    
//     var upload = multer({storage:storage})

// app.post('/upload',upload.single("file"),function(req,res){
// console.log(req.file)
// res.send(" Upload thành cống");
// })




app.use(express.urlencoded({
    extended: true
}));



app.use('/api/image', imagesRouter );


app.use(express.static(__dirname + "./public"));



http = require('http')
const { Server } = require('socket.io');

// app.use("/api/messages", messageRouter);
const server = http.createServer(app);



mongoose.connect(process.env.MONGO_URL, {
    useNewUrlParser: true,
    useUnifiedTopology: true,
}).then(() => {
    console.log("Kết nối DB thành công");
}).catch(() => {
    console.log("Kết Nối Thất Bại");
});





const io = new Server(server, {
    cors: {
        origin: "http://localhost:3000",
        methods: ["GET", "POST"]

    }
});

global.onlineUsers = new Map();

let users = [];

const addUser = (userId, socketId) => {
    !users.some((user) => user.userId === userId) &&
        users.push({ userId, socketId });
}

const removeUser = (socketId) => {
    users = users.filter((user) => user.socketId !== socketId)
}

const getUser = (userId) => {
    return users.find(user => user.userId === userId)
}

io.on('connection', function (socket) {
    console.log(`người dùng kết nối : ${socket.id}`);
    // người dùng huỷ kết nối 
    socket.on("disconnect", () => {
        console.log(`người dùng huỷ kết nối : ${socket.id}`);

        // removeUser(socket.id);
        // io.emit('getUsers',users)

    })

    global.chatSocket = socket;
    socket.on("addUser", (userId) => {
        onlineUsers.set(userId, socket.id);
    });
    // socket.on("addUser", userId => {
    //     addUser(userId, socket.id);
    //     io.emit('getUsers', users)
    // })

    //server sẽ nhận room chat từ người dùng gủi lên
    // sau đó sẽ tiến hành tạo room chat 
    socket.on('room', data => {
        socket.join(data)
        console.log('số phòng của người dùng chat' + data)
    })

    // gửi tin nhắn socket
    socket.on('SendMessage', (data) => {
        console.log(data)
        const sendUserSocket = onlineUsers.get(data.to);
        if (sendUserSocket) {
            socket.to(sendUserSocket).emit("msg-recieve", data.message);
        }
    })

});
server.listen(5000, () => console.log("server is running on port 5000"))

