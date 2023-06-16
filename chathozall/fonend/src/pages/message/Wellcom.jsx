import React from 'react'



export default function Wellcom({currentUser}) {
  return (
    <div className='wellcom_container'>
        <img className='img' src='/assets/img/robot.gif' alt="robot" />
      <h1>Xin Chào , <span>{currentUser.username}</span>
      </h1>
      <h3>vui lòng chọn một cuộc trò chuyện để bắt đầu nhắn tin</h3>
        
    </div>
  )
}
