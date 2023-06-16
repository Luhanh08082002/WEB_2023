import React from 'react'
import ReactDOM from 'react-dom/client';
import { useState } from "react";
import { BsCameraVideoFill, BsCameraVideoOffFill, BsFillMicMuteFill } from 'react-icons/bs'
import { AiFillAudio, AiFillSetting } from 'react-icons/ai'
import { GiSpeaker, GiSpeakerOff } from 'react-icons/gi'

export default function () {
  function openStream(){
    const config = {audio :false,video:true};
    return navigator.mediaDevices.getUserMedia(config)
  }
  function playStream(idVideoTag , stream){
    const video =document.getElementById(idVideoTag);
    video.srcObject = stream;
    video.play();
  }
  openStream().then(stream => playStream('localStream',stream));


  const [cameraVideocall, setCameraVideoCall] = useState(false);
  const [audioVideocall, setAudioVideoCall] = useState(false);
  const [speakerVideocall, setSpeakerVideoCall] = useState(false);




  const handleClickcamera = () => {
    setCameraVideoCall(!cameraVideocall)

  }

  const handleClickaudio = () => {
    setAudioVideoCall(!audioVideocall)
  };

  const handleClickspeaker = () => {
    setSpeakerVideoCall(!speakerVideocall)

  }

        return (
          <div className='videocall'>
            <div className='user-video'>
              <video  id="localStream"controls width="300" background="gray"></video>
            </div>
            <div className="icon-videocall">
              <div
                className={`icon_item  ${cameraVideocall ? "itemselected" : ""} `}
                onClick={() => handleClickcamera()}>

                {cameraVideocall ? (
                  <BsCameraVideoOffFill color="black" fontSize="24px" background="black" />
                ) : (
                  < BsCameraVideoFill color="white" fontSize="24px" />
                )
                }
              </div>
              <div
                className={`icon_item  ${audioVideocall ? "itemselected" : ""} `}
                onClick={handleClickaudio}>
                {audioVideocall ? (
                  <BsFillMicMuteFill color="black" fontSize="24px" background-color="#9AC0CD" />
                ) : (
                  <AiFillAudio color="white" fontSize="24px" />

                )
                }
              </div>
              <div
                className={`icon_item  ${speakerVideocall ? "itemselected" : ""} `}
                onClick={handleClickspeaker}>
                {speakerVideocall ? (
                  <GiSpeakerOff color="black" fontSize="24px" background-color="#9AC0CD" />
                ) : (
                  <GiSpeaker color="white" fontSize="24px" />
                )
                }
              </div>
              <div className='icon_item'>
                <AiFillSetting color="white" fontSize="24px" />
              </div>

            </div>

          </div>
        )
      }
