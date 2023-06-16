import './Sidebar.css'
import {BsFillChatSquareTextFill,BsBookmarkStarFill,BsQuestionSquareFill} from 'react-icons/bs';
import {MdRssFeed,MdVideoSettings,MdGroups,MdWorkOutline,MdSchool,MdOutlineEvent} from 'react-icons/md';
import { Users } from '../../data';
import CloseFiends from '../closefiend/CloseFiends';


export default function Sidebar() {
  return (
    <div className='sidebar'>
        <div className="sidebarWrapper">
            <ul className="sidebarList">
                <li className="sidebarListItem">
                    <MdRssFeed />
                    <span className='sidebarListItemText'>Feed</span>
                </li>
                <li className="sidebarListItem">
                    <BsFillChatSquareTextFill />
                    <span className='sidebarListItemText'>Chats</span>
                </li>
                <li className="sidebarListItem">
                    <MdVideoSettings />
                    <span className='sidebarListItemText'>VIdeos</span>
                </li>
                <li className="sidebarListItem">
                    <MdGroups />
                    <span className='sidebarListItemText'>Groups</span>
                 </li>
                <li className="sidebarListItem">
                     <BsBookmarkStarFill />   
                    <span className='sidebarListItemText'>Bookmarks</span>
                </li>
                <li className="sidebarListItem">
                     <BsQuestionSquareFill />
                    <span className='sidebarListItemText'>questions</span>
                </li>
                <li className="sidebarListItem">
                     <MdWorkOutline />
                    <span className='sidebarListItemText'>Jobs</span>
                </li>
                <li className="sidebarListItem">
                    <MdOutlineEvent />
                    <span className='sidebarListItemText'>Events</span>
                </li>
                <li className="sidebarListItem">
                    <MdSchool />
                    <span className='sidebarListItemText'>Courses</span>
                </li>
            </ul>
            <button className='sidebarButton'>show vieww</button>
                <hr className='sidebarhr'/>
                <ul className='sidebarFriendList'>
                    {Users.map(u=>(
                    <CloseFiends key={u.id} user={u} />
                    ))}
                
                    
                </ul>
        </div>
    </div>
  )
}
