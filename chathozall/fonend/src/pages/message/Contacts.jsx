

import { Link } from 'react-router-dom'
import React, { useEffect, useState } from 'react'



export default function Contacts({contacts,currentUser,changeChat,socket}) {

    const FP = process.env.REACT_APP_PUBLIC_FPLDER

    const [itemMessage, setItemMessage] = useState(undefined);

    const [currentUserName,setCurrentUserName] = useState(undefined)

    const [currentUserImage,setCurrentUserImage] =useState(undefined)
    const [currentSelected, setCurrentSelected] = useState(undefined);

   

    useEffect(() =>{
        async function fetchData(){
            if(currentUser){
                setCurrentUserName(currentUser.username)
            }
        }
        fetchData();
    },[currentUser]);


    const changeCurrentChat = (index,contact)=>{
        setCurrentSelected(index);
        changeChat(contact);
    }
   
    return (
        <>
        {currentUserName && (
        <div className='sidebar_message'>
            <div className="sidebars">
                <ul className='sidebarFriendLists'>
                    {
                        contacts.map((contact,index)=>{
                        
                            return (
                                <Link key={index}
                                    to={"/message/t/"+ contact._id} >
                                    <li
                                        className={`sidebarFriend  ${index === currentSelected ? "itemselected" : ""} `}
                                        
                                        onClick={() => changeCurrentChat(index,contact)}
                                    >
                                        <img src="https://intomau.com/Content/upload/images/avatar-nam-bit-khau-trang.jpg" alt="" className='sidebarFriendImg' />
                                        <span className='useronofline'></span>
                                        <span className='sidebarFriendName'>{contact.username}</span>
                                    </li>
                                </Link>
                            )

                        }
                        )}

                </ul>
            </div>
        </div>
        )}
        </>
    )
}

