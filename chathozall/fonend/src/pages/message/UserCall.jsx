import React from 'react'
import io from 'socket.io-client'
const socket = io("http://localhost:3000");

export default function VideoAudio({currenUser}) {
  
  const click = () =>{
    
    socket.emit("client-data-send" , "Hello")

  }
 

  return (
    <div className='UserCall'>
      <img src="" alt="" />
      <div className='UsercallText'>
        <h3>Đỗ Mỹ TÀi</h3>
        <span>Sẵn Sàng Gọi Điện</span>
      </div>
      <div className='submit_usercall'>
        <button id='mra' onClick={click}>Bắt Đầu Cuộc Gọi</button>
      </div>
    </div>
  )
}
