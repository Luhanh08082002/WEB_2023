
import { FaRegLaughBeam } from 'react-icons/fa'
import { BsFillImageFill } from 'react-icons/bs'

import Picker from "emoji-picker-react";
import React, { useEffect, useState, useRef } from 'react'
import { IoIosCall, IoIosVideocam, IoMdSend } from 'react-icons/io'


import InputEmoji from 'react-input-emoji'

export default function ChatInput({ socket, currentChat, currenUser, handleSendMsg }) {

    const [emojiPickerShow, setEmojipickerShow] = useState(false);
    const [msg, setMsg] = useState("");

    // const handleSendMessage = (e) => {
    //     e.preventDefault();
    //     if (msg && localStorage.getItem('username')) {
    //         socket.emit('message', {
    //             text: msg,
    //             name: localStorage.getItem('username'),
    //             id: `${socket.id}${Math.random()}`,
    //             socketID: socket.id,
    //         });
    //     }
    //     setMsg('');
    // }



    const handleEmojiPickershow = () => {
        setEmojipickerShow(!emojiPickerShow);
    }

    const handleEmojiClick = (e, emoji) => {

        let message = msg;
        message += emoji.emoji;
        setMsg(message);
    }

    const sendChat = (event) => {
        event.preventDefault();
        if (msg.length > 0) {
            handleSendMsg(msg);
            setMsg('')
        }
    }

    return (
        <>

            <div className="chatInput_message">

                <div className='omoji_icon'>

                    <FaRegLaughBeam onClick={handleEmojiPickershow} />
                    <div className='emojipickerreact'>
                        {emojiPickerShow &&
                            <Picker onEmojiClick={handleEmojiClick} />
                        }
                    </div>
                    <input type='file' />
                </div>

                <form className='chatmessage_input' onSubmit={(e) => sendChat(e)}>

                    <input
                        type="text"
                        placeholder='nhập @ ,gửi tin nhắn đến bạn...'
                        value={msg}
                        onChange={(e) => setMsg(e.target.value)} />

                    <div className='icon_input_msg'>
                        
                        <button className='submit'>
                            <IoMdSend />
                        </button>

                    </div>


                </form>



            </div>
        </>
    )
}
