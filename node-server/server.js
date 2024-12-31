const express = require('express');
const http = require('http');
const socketIo = require('socket.io');
const cors = require('cors');

// Initialize express and HTTP server
const app = express();
const server = http.createServer(app);
const io = socketIo(server, {
    cors: {
        origin: "*", // or specify the exact origin you want to allow
        methods: ["GET", "POST"]
    }
});

// Use cors middleware
app.use(cors());

io.on('connection', (socket) => {
    console.log('A user connected:', socket.id);

    // Listen for call initiation from admin/teacher
    socket.on('initiateCall', ({ userId, username }) => {
        console.log(`Calling user ${userId} (${username})`);
        io.emit('incomingCall', { callerId: socket.id, callerName: username, userId });
    });

    // Listen for call acceptance
    socket.on('acceptCall', ({ callerId }) => {
        console.log('Call accepted by user');
        io.to(callerId).emit('callAccepted');
    });

    // Listen for call rejection
    socket.on('rejectCall', ({ callerId }) => {
        console.log('Call rejected by user');
        io.to(callerId).emit('callRejected');
    });

    socket.on('disconnect', () => {
        console.log('User disconnected:', socket.id);
    });
});

server.listen(4000, () => {
    console.log('Server is running on http://localhost:4000');
});
