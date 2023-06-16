import React, { useState } from 'react'
import { Link } from 'react-router-dom'

export default function ({ user }) {
  
  return (
    <Link to={""} >
      <li
        className={`sidebarFriend `}

       
      >
        <img src={user.profilePicture} alt="" className='sidebarFriendImg' />
        <span className='sidebarFriendName'>{user.username}</span>
      </li>
    </Link>

  )
}
