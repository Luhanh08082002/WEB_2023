import './Share.css';
import {MdPermMedia} from 'react-icons/md';
import {IoIosPricetags} from 'react-icons/io';
import {FaLocationArrow} from 'react-icons/fa';
import {BsFillEmojiLaughingFill} from 'react-icons/bs';


export default function Share() {
  return (
    <div className='share'>
        <div className='shareWrapper'>
            <div className='shareTop'>
                <img src="https://petmaster.vn/petroom/wp-content/uploads/2020/03/thanh-bieu-cam-cho-husky.jpg" alt="" className='shareprofileImg'/>
                <input type="text" className='shareInput'  placeholder='Tìm kiếm Tại Đây ..'/>
            </div>
            <hr className='sharehr'/>
            <div className='shareBottom'>
                <div className='shareOptions'>
                    <div className="shareOption">
                        <MdPermMedia color='tomato' className='shareIcon'/>
                        <span className='shareOptionText'> photo or video</span>
                    </div>
                    <div className="shareOption">
                        <IoIosPricetags color='blue' className='shareIcon'/>
                        <span className='shareOptionText'> Tag</span>
                    </div>
                    <div className="shareOption">
                        <FaLocationArrow color='green' className='shareIcon'/>
                        <span className='shareOptionText'> Locations</span>
                    </div>
                    <div className="shareOption">
                        <BsFillEmojiLaughingFill color='goldenrod' className='shareIcon'/>
                        <span className='shareOptionText'> Feelings</span>
                    </div>
                </div>
                <button className='shareButton'>Share</button>
            </div>
            
        </div>
    </div>
  )
}
