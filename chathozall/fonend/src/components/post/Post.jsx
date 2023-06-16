import './Post.css'
import { BsThreeDotsVertical } from 'react-icons/bs'
import { AiFillLike } from 'react-icons/ai'
import { FcLike } from 'react-icons/fc'
import { useState } from 'react'
import { Link } from 'react-router-dom'

export default function Post({ post }) {
  const [like, setLike] = useState(post.like)
  const [isLiked, setIsLiked] = useState(false)

  
  const likeHandler = () => {
    setLike(isLiked ? like - 1 : like + 1)
    setIsLiked(!isLiked)
  }




  const [items] = useState([
    {
      id: 1,
      profilePicture: "/assets/img/1.jpeg",
      username: 'Nguyễn Ngọc Thắng',
    },
    {
      id: 2,
      profilePicture: "/assets/img/2.jpeg",
      username: 'Nguyễn Quốc Anh',
    },
    {
      id: 3,
      profilePicture: "/assets/img/4.jpeg",
      username: 'Trần Hồng Quân',
    },
    {
      id: 4,
      profilePicture: "/assets/img/5.jpeg",
      username: 'Hướng Hoà',
    },
    {
      id: 5,
      profilePicture: "/assets/img/6.jpeg",
      username: 'Đỗ Mỹ Tài',
    },
    {
      id: 6,
      profilePicture: "/assets/img/20IT347.jpeg",
      username: 'Phan Văn CẸC',
    },
    {
      id: 7,
      profilePicture: "/assets/img/6.jpeg",
      username: 'Đỗ Mỹ Tài',
    },
    {
      id: 8,
      profilePicture: "/assets/img/20IT347.jpeg",
      username: 'Phan Văn CẸC',
    }
  ]);
  return (

    <div className='post'>
      <div className="postWarpper">
        <div className="postTop">
          <div className="postTopLeft">
            <Link 
              to={'/profile/'} >
              <img src={items && items.filter((item) => item.id === post?.userId).map((item) => item.profilePicture)} alt="" className='postProfileImg' />
              {/* {JSON.stringify(this.state.Users.filter((user)=>{ return (user.id === post?.userId)}))} */}

              <span className='postUsername' >
                {items.filter((item) => item.id === post?.userId)[0].username}
              </span>

            </Link>
            <span className='postDate'>{post?.date}</span>
          </div>
          <div className="postTopRight">
            <BsThreeDotsVertical />
          </div>
        </div>
        <div className="postCenter">
          <span className='postText'>{post?.desc}</span>
          <img src={post.photo} alt="" className='postImg' />
        </div>
        <div className="postBottom">
          <div className="postBottomLeft">
            <AiFillLike className='likeicon' color='blue' onClick={likeHandler} />
            <FcLike className='likeicon' onClick={likeHandler} />
            {/* <img src="" alt=""  className='likeicon'/>
            <img src="" alt="" className='likeicon'/> */}
            <span className='postLikeCounter'>Lữ Hành và {like} Người Khác</span>
          </div>
          <div className="postCounterText">{post.comment} Binh Luan</div>
          <div className="postCounterText">{post.share} CHia SẺ</div>
        </div>
      </div>
    </div>
  )
}
