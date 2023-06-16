import './Profile.css'
import Sidebar from '../../components/sidebar/Sidebar';
import Topbar from '../../components/topbar/Topbar';
import Feed from '../../components/feed/Feed';
import Rightbar from '../../components/rightbar/Rightbar';
import { useEffect, useState } from 'react';

import axios from 'axios';
import { addImageRouter } from '../../utils/APIRouter';


export default function Profile({ username }) {
    const [user, setUser] = useState({});
    const [values, setValues] = useState('')

    // useEffect(()=>{
    //     const fetchUser = async()=>{
    //         const res = await axios.get(`/users?username=thang`);
    //         setUser(res.data);
    //     };
    //     fetchUser();

    // },[]);

    const handleSubmit = async (e) => {
        e.preventDefault();
      
        const { data } = await axios.post(addImageRouter, {
        
            
        });
    
       
      
    }
    const handleChange = (e) => {
        setValues({ ...values, [e.target.name]: e.target.files[0] })
    }
    return (
        <>
            <Topbar />

            <div className='profile'>

                <div className='profileRight'>
                    <div className="profileRightTop">
                        <div className='profileCover'>
                            <img className='profileCoverImg' src={process.env.PUBLIC_URL + "/assets/img/1.jpeg"} alt="" />


                            <img className='profileUserImg' src={process.env.PUBLIC_URL + "/assets/img/1.jpeg"} alt="" />

                        </div>
                        <div className="profileInfo">
                            <h4 className='profileInfoName'>Lu Hanh</h4>
                            <span className='profileInfoDecs'>hello my finredd</span>
                            <form onSubmit={(e) => handleSubmit(e)} method='Post' encType='multipart/form-data'>
                                <input  type="file" name='file' onChange={(e) => setValues(e.target.files[0])} id="" />

                                <input type="submit" value="add new" />
                            </form>
                            <form action='http://localhost:5000/api/image/addimage' method='Post' encType='multipart/form-data'>
                                <input  type="file" name='file' />

                                <input type="submit" value="add new" />
                            </form>
                        </div>
                    </div>
                    <div className="profileRightBottom">
                        <Feed username="NgọcThang" />
                        <Rightbar />
                    </div>
                </div>
            </div>

        </>
    )
}
