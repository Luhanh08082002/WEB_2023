import React from 'react'
import './Friends.css'
import Topbar from '../../components/topbar/Topbar'
import { AiFillSetting, AiOutlineRight } from "react-icons/ai"
import { FaUserFriends, FaBirthdayCake } from "react-icons/fa"
import { RiUserSharedFill } from "react-icons/ri"
import { HiUserAdd } from "react-icons/hi"
import { CgUserList } from "react-icons/cg"
import { Link } from 'react-router-dom'

export default function Friends() {
  return (
    <>
      <Topbar />
      <div className='container_fiends'>
        <div className='sidebarss_friends'>
          <div className='sidebar_top'>
            <h3>Bạn Bè</h3>
            <div className='icon_setting'>
              <span>
                <AiFillSetting className='i' />
              </span>
            </div>
          </div>
          <div className="sidebarWrappers">
            <ul>
              <li>
                <div className='sidebar_listitem'>
                  <FaUserFriends />
                  Trang Chủ
                </div>
              </li>
              <li>
                <div className='sidebar_listitem'>
                  <RiUserSharedFill />
                  Lời Mới Kết Bạn
                </div>
                <AiOutlineRight />
              </li>
              <li>
                <div className='sidebar_listitem'>
                  <HiUserAdd />
                  Gợi Ý
                </div>
                <AiOutlineRight />

              </li>
              <li>
                <div className='sidebar_listitem'>
                  <CgUserList />
                  Tất Cả Bạn Bè
                </div>
                <AiOutlineRight />
              </li>
              <li>
                <div className='sidebar_listitem'>
                  <FaBirthdayCake />
                  Sinh Nhật
                </div>

              </li>
              <li>
                <div className='sidebar_listitem'>
                  <CgUserList />
                  Danh Sách Tuỳ Chỉnh
                </div>
                <AiOutlineRight />


              </li>
            </ul>
          </div>
        </div>

        <div className='right_bar_list'>
          <div className='friend_request'>
            <div className='top_friends_req'>
              <h3>
                Lời Mời Kết Bạn
              </h3>
              <Link >
                <h5>Xem Tất Cả</h5>
              </Link>
            </div>
            <div className='-'>
              <img src="" alt="" />
              
              <h4>Lữ Hành</h4>
              <div>
                <img src="" alt="" />
                5 bạn chung
              </div>
              <button>Xác Nhận</button>
              <button>Xóa</button>


            </div>
            <div>
              <span>
                Những Người Bạn Có Thể Biết
              </span>

            </div>

          </div>


        </div>

      </div>


    </>

  )
}
