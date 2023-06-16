
import React, { useEffect, useState, useRef, createRef } from 'react'
import { IoIosCall, IoIosVideocam, IoMdSend } from 'react-icons/io'

import { MdError } from 'react-icons/md'
import './Message.css'
import ChatInput from './ChatInput';
import { getAllMessagesRouter, sendMessageRouter } from '../../utils/APIRouter';
import axios from 'axios';
import { v4 as uuidv4 } from 'uuid';
import { Link } from 'react-router-dom';



export default function Messages_meny({ currentUser, currentChat, socket, contacts }) {

    const [messages, setMessages] = useState([])
    const [arrivalMessage, setArrivalMessage] = useState([null]);
    const elRef = useRef(null);


   
    useEffect(() => {
        async function messagesss() {
            if (currentChat) {
                const response = await axios.post(getAllMessagesRouter, {
                    from: currentUser._id,
                    to: currentChat._id,
                });
                setMessages(response.data)
            }
        }
        messagesss();
    }, [currentChat, currentUser])



    const handleSendMsg = async (msg) => {
        await axios.post(sendMessageRouter, {
            from: currentUser._id,
            to: currentChat._id,
            message: msg,

        })



        // socket.emit('addUser', user._id);
        // socket.on('getUsers', users => {
        //     console.log(users);
        // })
        socket.current.emit("SendMessage", {
            from: currentUser._id,
            to: currentChat._id,
            message: msg,

        });




        const msgs = [...messages];
        msgs.push({ fromSelf: true, message: msg });
        setMessages(msgs);
    }




    useEffect(() => {
        // var user = [JSON.parse(localStorage.getItem("chat-app-user"))];
        // user.map((user) => {
        //     socket.emit('addUser', user._id);
        //     socket.on('getUsers', users => {
        //         console.log(users);
        //     })
        // }, [user]);
        if (socket.current) {
            socket.current.on("msg-recieve", (msg) => {
                setArrivalMessage({
                    fromSelf: false,
                    message: msg,
                    createAt: new Date(Date.now()).getHours() + " : " + new Date(Date.now()).getMinutes(),
                    users: currentUser.username,
                });
            })
        }

    }, [])


    useEffect(() => {
        

        arrivalMessage && setMessages((prev) => [...prev, arrivalMessage]);
    }, [arrivalMessage])



    useEffect(() => {

        elRef.current?.scrollIntoView({ behaviour: "smooth" ,block: 'start'});
    }, [messages])





    return (

        <>
            {
                currentChat && (
                    <div className="Topitem_messager">
                        <div className='left_usermessage'>
                            <div className='profiles_items'>

                                <img src="data:image/jpeg;base64,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" alt="" />
                                <span className='useronofline'></span>
                            </div>

                            <div className='user_items_msg'>
                                <span className='textusers_msg'>{currentChat.username}</span><br />
                                <span>đang hoạt động</span>

                            </div>

                        </div>
                        <div className="right_iconmessage">
                            <Link to={"/Call"}>
                            <IoIosCall />
                                
                             </Link>
                            
                            <IoIosVideocam />
                            <MdError />
                        </div>

                    </div>
                )}
            <div className="show_message">
                {currentChat && messages.map((message) => {
                    return (
                        <div ref={elRef} key={uuidv4()}>
                            <div className={`messages ${message.fromSelf ? "sended" : "recieved"}`}>

                                <div className="content ">
                                    {message.message}

                                </div>
                                
                               

                                <div>
                                    <p className='hdtg'>{message.createAt}</p>
                                    <p>{message.users}</p>
                                </div>

                            </div>
                        </div>
                    )
                })
                }

            </div>
            <ChatInput handleSendMsg={handleSendMsg} currentChat={currentChat} currentUser={currentUser} />
        </>

    )
}
