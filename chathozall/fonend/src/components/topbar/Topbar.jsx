import './Topbar.css'
import { HiSearch } from 'react-icons/hi';
import { FaUserPlus } from 'react-icons/fa';
import { BsChatSquareTextFill } from 'react-icons/bs';
import { IoIosNotifications } from 'react-icons/io';
import { Link } from 'react-router-dom';
import { useNavigate } from 'react-router-dom';
import { useEffect, useRef, useState } from 'react';





export default function Topbar() {

    const navigate = useNavigate()
    const [onclicks, setOnclicks] = useState(false);
    const [openNotifi, setOnenNotifi] = useState(false);
    const [user, setUser] = useState(undefined);
    useEffect(() => {
        async function fetchData() {
            if (!localStorage.getItem("chat-app-user")) {
                navigate("/login");
            } else {
                setUser(await JSON.parse(localStorage.getItem("chat-app-user")));
            }
        }
        fetchData();

    }, []);





    const handleOpen = () => {
        setOnclicks(!onclicks);
    }
    const handleOpenNotifications = () => {
        setOnenNotifi(!openNotifi);
    }



    return (

        <div className='topbarContainer'>
            <div className='topbarLeft'>
                <Link to="/" style={{ textDecoration: "none" }}>
                    <span className='logo'>HOZALL</span>
                </Link>
            </div>
            <div className='topbarCenter'>
                <div className='searchbar'>
                    <input type="text" placeholder='Vui Lòng Nhập Tìm Kiếm ...' className='searchInput' />
                    <HiSearch className='searchIcon' />

                </div>

            </div>
            <div className='topbarRight'>
                <div className="topbarLinks">
                    <span className='topbarlink'>homemune</span>
                    <span className='topbarlink'>músbdabhom</span>
                </div>
                <div className="topbarIcons">
                    <div className="topbarIconItem">
                        <Link to="/">
                            <FaUserPlus className='iconItem' />
                            <span className='topbarIconBadge'>1</span>
                        </Link>

                    </div>
                    <div className="topbarIconItem">
                        <Link to="/message">
                            <BsChatSquareTextFill className='iconItem' />
                            <span className='topbarIconBadge'>3</span>
                        </Link>

                    </div>
                    <div className="topbarIconItem">
                        <IoIosNotifications className='iconItem' onClick={handleOpenNotifications} />
                        <span className='topbarIconBadge'>5</span>

                        {
                            openNotifi ?
                                <div className='notification'>
                                    <div className='linkker_notif'>
                                    </div>
                                    <div className='notification_top'>
                                        <h3>Thông Báo</h3>
                                        <FaUserPlus />
                                    </div>
                                    <div className='item_menu'>
                                        <div className='item_all'>
                                            <span>Tất Cả</span>
                                        </div>
                                        <div className='item_Unread'>
                                            <span>Chưa Đọc</span>
                                        </div>
                                    </div>
                                    <div className='notification_items'>
                                        <div className='compoments'>
                                            <span>Trước Đó</span>
                                            <a href="">Xem Tất Cả</a>
                                        </div>
                                        <div className='notification_user'>
                                            <img src="http://phunuvietnam.mediacdn.vn/media/news/33abffcedac43a654ac7f501856bf700/anh-profile-tiet-lo-g-ve-ban-1.jpg" alt="" />
                                            <div className='user_noti'>
                                                <span>Bạn Của bạn là " " đã đăng trong Nhóm</span>
                                                <div>
                                                     4h trước
                                                </div>
                                            </div>

                                        </div>

                                        <div className='notification_user'>
                                            <img src="http://phunuvietnam.mediacdn.vn/media/news/33abffcedac43a654ac7f501856bf700/anh-profile-tiet-lo-g-ve-ban-1.jpg" alt="" />
                                            <div className='user_noti'>
                                                <span>Bạn Của bạn là " " đã đăng trong Nhóm</span>
                                                <div>
                                                     4h trước
                                                </div>
                                            </div>

                                        </div>
                                        <div className='notification_user'>
                                            <img src="http://phunuvietnam.mediacdn.vn/media/news/33abffcedac43a654ac7f501856bf700/anh-profile-tiet-lo-g-ve-ban-1.jpg" alt="" />
                                            <div className='user_noti'>
                                                <span>Ngọc Thắng Và 3 Người khác có sinh nhật vào 08 tháng 08 </span>
                                                <div>
                                                     4h trước
                                                </div>
                                            </div>

                                        </div>
                                        <div className='notification_user'>
                                            <img src="http://phunuvietnam.mediacdn.vn/media/news/33abffcedac43a654ac7f501856bf700/anh-profile-tiet-lo-g-ve-ban-1.jpg" alt="" />
                                            <div className='user_noti'>
                                                <span>Lữ Hành đã nhắc đến bạn trong một bài viết của 20SE4</span>
                                                <div>
                                                     4h trước
                                                </div>
                                            </div>

                                        </div>
                                        <div className='notification_user'>
                                            <img src="http://phunuvietnam.mediacdn.vn/media/news/33abffcedac43a654ac7f501856bf700/anh-profile-tiet-lo-g-ve-ban-1.jpg" alt="" />
                                            <div className='user_noti'>
                                                <span>Bạn Có một bài viết mới để xem trong 20SE4</span>
                                                <div>
                                                     45 phút trước
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                : null}
                    </div>
                    <div className='topbariconImg'>
                        <img className='topbarImg' src="https://intomau.com/Content/upload/images/avatar-nam-bit-khau-trang.jpg" alt="" onClick={handleOpen} />


                        {
                            onclicks ?

                                <div className='navbarmenuItem'>
                                    <div className='linkker'>
                                    </div>
                                    <li className='topusername'>
                                        <img src="https://intomau.com/Content/upload/images/avatar-nam-bit-khau-trang.jpg" alt="" />
                                        <span>{user.username}</span>
                                    </li>
                                    <li>
                                        <a href="">link 1</a>
                                    </li>
                                    <li>
                                        <a href="">Cài đặt và quyền Riêng Tư</a>
                                    </li>
                                    <li>
                                        <a href="">Màn Hình Và Trợ Năng</a>
                                    </li>
                                    <li>
                                        <a href="">Đóng Góp Và Ý Kiến</a>
                                    </li>
                                </div>
                                :
                                null
                        }

                    </div>

                </div>

            </div>
        </div>
    )
}

