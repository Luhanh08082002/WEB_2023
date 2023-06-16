const createPeerServerListeners = (peerServer) => {
    peerServer.on('connection', (client) => {
      console.log('kết nối thành công với máy chủ peerjs');
      console.log(client.id);
    });
  };
  
  module.exports = {
    createPeerServerListeners
  };