import { render } from "@testing-library/react";
import './layout.css'
function Header() {
    return (
        <div className="container-full">
        
            <div className="row">
                <div className="col-lg-4 logo"> 
                    <a href="" id="logo"><span className="fa-brands fa-tiktok"> </span>  TiKToK </a>
                </div>
                <div className="col-lg-4">
                    <form action="" id="search">
                        <input type="text" className="ip_search" placeholder="Tìm Kiếm Tài khoản và video" />
                        <div className="fa fa-close"></div>
                        <span className="li"></span>
                        <button type="submit" className="fa fa-search"></button>
                    </form>
                </div>
                <div className="col-lg-4 " >
                   <div className="tiktok_upload">
                       <span>+ Tải Lên</span>
                       
                   </div>
                   <button id="btn_dn_tiktok"> đăng nhập </button>
                   <span class="fa fa-ellipsis-v"></span>
                </div>
            </div>
 
        </div>
        



    )
}
export default Header;