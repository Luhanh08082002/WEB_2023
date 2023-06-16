import'./Call.css'
import UserCall from './UserCall'
import VideoCall from './VideoCall'

export default function Call() {
  return (
    <div className='chatrtc-container'>
        <div className="fromcontainer">
            <VideoCall />
            <UserCall />
        
         </div>
    </div>
  )
}