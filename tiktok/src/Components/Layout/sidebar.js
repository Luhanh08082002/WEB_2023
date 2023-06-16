import './layout.css';
import {RiHome4Line,RiLiveLine} from 'react-icons/ri';
import {HiUsers} from 'react-icons/hi';
import {FiHash,FiMusic} from 'react-icons/fi';

function Sidebar(){
    return(
        <div className='col-lg-4 sidebar'>
            <div id='sidebar-menu'>
                <div className='list-menu active'>
                    <a href=""><span><RiHome4Line/></span>Dành Cho Bạn</a>
                </div>
                <div className='list-menu'>
                    <a href=""><span><HiUsers/></span>Đang Folow</a>
                </div>
                <div className='list-menu'>
                    <a href=""><span><RiLiveLine/></span>LIVE</a>
                </div>
            </div>
            <div id='sidebar-login'>         
                <p>Đăng Nhập Để Folow các tác giả , thích video và xem bình luận</p>
                <button submit="btn-login" className='btn-login'>Đăng Nhập</button>  
            </div>
            <div id='hashtag'>
                <p>Khám Phá</p>
                <div className='hashtag'>
                    <a href=""><span><FiHash/></span>ấhds sdasnd </a>
                    <a href=""><span><FiHash/></span>luhanh.com </a>
                    <a href=""><span><FiHash/></span> ấhds sdasnd maic jdkn  </a>
                    <a href=""><span><FiMusic/></span> ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                    <a href=""><span><FiHash/></span> ấhds sdasnd maic jdkn  </a>
                    <a href=""><span><FiMusic/></span> ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                    <a href=""><span><FiMusic/></span> ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                    <a href=""><span><FiMusic/></span> ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                    <a href=""><span><FiMusic/></span> ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                    <a href=""><span><FiMusic/></span> ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                </div>

            </div>
            <div id='devplacehashtag'>
                <div className='divplaceContainer'>
                    <a href=""> ấhds sdasnd </a>
                    <a href="">luhanh.com </a>
                    <a href="">ấhds sdasnd maic jdkn  </a>
                    <a href="">ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                </div>
                <div className='divlinkContainer'>
                    <a href=""> ấhds sdasnd </a>
                    <a href="">luhanh.com </a>
                    <a href="">ấhds sdasnd maic jdkn  </a>
                    <a href="">ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                </div>
                <div className='divmoreContainer'>
                    <a href=""> ấhds sdasnd </a>
                    <a href="">luhanh.com </a>
                    <a href="">ấhds sdasnd maic jdkn  </a>
                    <a href="">ấhds sdasnd maic jdkn ,amsnc lsmc lakmslkcml   </a>
                </div>
                <div className='divfooterContainer'>
                    <span>Thêm</span>
                    <p>@ 2002 Tiktok</p>
                </div>

            </div>
        </div>
    )
}
export default Sidebar;