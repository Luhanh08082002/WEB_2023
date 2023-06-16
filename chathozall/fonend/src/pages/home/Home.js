import Sidebar from '../../components/sidebar/Sidebar';
import React, { useEffect, useState} from 'react'
import Feed from '../../components/feed/Feed';
import Rightbar from '../../components/rightbar/Rightbar';
import Topbar from '../../components/topbar/Topbar';
import './Home.css';
import { Route, Router } from 'react-router-dom';

export default function Home(socket) {
  // const [username, setUserName] = useState('');

  // localStorage.setItem('userName', username);
    //sends the username and socket ID to the Node.js server
    // socket.emit('newUser', { username, socketID: socket.id });
  return (
    <>
    <Topbar/>
    <div className='HomeContainers'>
      
      <Sidebar/>
      <Feed />
      <Rightbar/>
    </div>
    
    </>
        
  )
}


