import './Rightbar.css'
import { FaBirthdayCake } from 'react-icons/fa'
import { Users } from '../../data'
import Online from '../online/Online'
export default function Rightbar({ profile}) {

  const HomeRightbar = () => {
    return (
      <>
        <div className="birthdayContainer">
          <FaBirthdayCake className='birthdayImg' color='green' />
          {/* <img src="" alt="" className='birthdayImg'/> */}
          <span className='birthday'>
            <p>hôm nay sinh nhật Lữ Hành và 3 người khác</p>
          </span>
        </div>
        <img className='rightbarAD' src="https://toigingiuvedep.vn/wp-content/uploads/2021/06/hinh-anh-banh-kem-chuc-mung-sinh-nhat-lang-man-dep-820x547.jpg" alt="" />
        <h4 className='rightbarTitle'> Online Friend</h4>
        <ul className='rightbarFriendList'>
          {Users.map(u => (
            <Online key={u.id} user={u} />
          ))}
        </ul>
      </>
    )
  }


  const ProfileRightbar = () => {
    return (
      <>
        <h4 className='rightbarTitle'>User information</h4>
        <div className="rightbarInfo">
          <div className="rightbarInfoItem">
            <span className='rightbarInfoKey'>City:</span>
            <span className='rightbarInfoValue'>New Yourk</span>
          </div>
          <div className="rightbarInfoItem">
            <span className='rightbarInfoKey'>from:</span>
            <span className='rightbarInfoValue'>Madrid</span>
          </div>
          <div className="rightbarInfoItem">
            <span className='rightbarInfoKey'>Relationship</span>
            <span className='rightbarInfoValue'>Single</span>
          </div>
        </div>
        <h4 className='rightbarTitle'>User Friends</h4>
        <div className='rightbarFollowings'>
          <div className="rightbarFollowing">
            <img className='rightbarFollowingImg' src={process.env.PUBLIC_URL +"/assets/img/2.jpeg"} alt="" />
            <span className='rightbarFollowingName'>Lu aHanh</span>
          </div>
          <div className="rightbarFollowing">
            <img className='rightbarFollowingImg' src={process.env.PUBLIC_URL +"/assets/img/8.jpeg"} alt="" />
            <span className='rightbarFollowingName'>Lu aHanh</span>
          </div>
          <div className="rightbarFollowing">
            <img className='rightbarFollowingImg' src={process.env.PUBLIC_URL + "/assets/img/5.jpeg"} alt="" />
            <span className='rightbarFollowingName'>Lu aHanh</span>
          </div>
          <div className="rightbarFollowing">
            <img className='rightbarFollowingImg' src={process.env.PUBLIC_URL + "/assets/img/5.jpeg"} alt="" />
            <span className='rightbarFollowingName'>Lu aHanh</span>
          </div>
          <div className="rightbarFollowing">
            <img className='rightbarFollowingImg' src={process.env.PUBLIC_URL +"/assets/img/5.jpeg"} alt="" />
            <span className='rightbarFollowingName'>Lu aHanh</span>
          </div>
        </div>
      </>
    )
  }

  return (
    <div className='rightbar'>
      <div className="rightbarWarpper">
        {profile ? <HomeRightbar/> :<ProfileRightbar/> }
      </div>
    </div>
  )
}
