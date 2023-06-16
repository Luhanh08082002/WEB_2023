import './Message.css'
import { useEffect, useRef, useState } from 'react';
import { useNavigate } from 'react-router-dom';
import { BsThreeDots } from 'react-icons/bs'
import { BiSearchAlt2 } from 'react-icons/bi'

import Messages_meny from './Messages_meny';
import Wellcom from './Wellcom';
import Contacts from './Contacts';
import axios from 'axios';
import { allUsersRouter, host } from '../../utils/APIRouter';
import { io } from 'socket.io-client';
import Topbar from '../../components/topbar/Topbar';

export default function Message() {

    const socket = useRef();
    const navigate = useNavigate()

    const [contacts, setContacts] = useState([]);
    const [isloading, setIsLoading] = useState(undefined)
    const [currentUser, setCurrentUser] = useState(undefined);
    const [currentChat, setCurrentChat] = useState(undefined);


    useEffect(() => {
        async function fetchData() {
            if (!localStorage.getItem("chat-app-user")) {
                navigate("/login");
            } else {
                setCurrentUser(await JSON.parse(localStorage.getItem("chat-app-user")));

                setIsLoading(true);

            }
        }
        fetchData();

    }, []);

    //   

    useEffect(() => {
        if (currentUser) {
            socket.current = io(host);
            socket.current.emit("addUser", currentUser._id);
        }
    }, [currentUser])



    useEffect(() => {
        async function fetchdata() {
            if (currentUser) {
                const data = await axios.get(`${allUsersRouter}/${currentUser._id}`)
                setContacts(data.data)
            }
        }
        fetchdata();
    }, [currentUser]);


    const handleChatChange = (chat) => {
        setCurrentChat(chat);
    }



    return (
        < >
            <div className='tong'>
                 <Topbar />
                <div className='message_container'>
                    <div className='sibar_left_msg'>
                        <div className='top_msg_container'>
                            <div className='icon_msg'>
                                <div className='top_chat'>
                                    <h3>CHAT</h3>
                                    <div className='icons_item'>
                                        <div className='icon'>
                                            <BsThreeDots />
                                        </div>
                                        <div className='icon'>
                                            <BsThreeDots />
                                        </div>
                                        <div className='icon'>
                                            <BsThreeDots />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div className='search'>
                                <input type="text" placeholder='tìm kiếm người' name="" id="" />
                                <span className='icon_item_search'>
                                    <BiSearchAlt2 />
                                </span>

                            </div>
                        </div>
                        <Contacts contacts={contacts} currentUser={currentUser} changeChat={handleChatChange} />


                    </div>

                    <div className='messageRight'>
                        {
                            isloading && currentChat === undefined ? (
                                <Wellcom currentUser={currentUser} />

                            ) : (
                                <Messages_meny currentUser={currentUser} currentChat={currentChat} socket={socket} contacts={contacts} />

                            )
                        }

                    </div>


                </div>

            </div>


        </>
    )
}
