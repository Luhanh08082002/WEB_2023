
import axios from 'axios'
import { useState, useEffect } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import { toast, ToastContainer } from 'react-toastify'

import "react-toastify/dist/ReactToastify.css"

import './Login.css'

import { loginRouter } from '../../utils/APIRouter'
export default function Login() {

    const navigate = useNavigate();

    const toastOptions = {
        position: "bottom-right",
        autoClose: 2000,
        pauseOnHover: true,
        draggable: true,
        theme: "dark",
    }

    const [values, setvalues] = useState({
        username: '',
        password: '',
    })


    useEffect(() => {
        if (localStorage.getItem('chat-app-user')) {
            navigate('/')

        }
    }, []);


    const handleValidation = () => {
        const { username, password } = values;
        if (!username.length === "") {
            toast.error('Tên Người Dùng Không Hợp Lệ', toastOptions);
            return false;
        } else if (!password === "") {
            toast.error("Mật Khẩu Không Hợp Lệ", toastOptions);

        }
        return true

    }


    const handleSubmit = async (e) => {
        e.preventDefault();
        if (handleValidation()) {
            const { username, password } = values;
            const { data } = await axios.post(loginRouter, {
                username,
                password,
            });
            if (data.status === false) {
                toast.error(data.msg, toastOptions);
            }
            if (data.status === true) {
                localStorage.setItem('chat-app-user', JSON.stringify(data.user));
                navigate('/');
            }

        }
    }

    const handleChange = (e) => {
        setvalues({ ...values, [e.target.name]: e.target.value })

    }
    return (


        <div className='login'>
            {/* <p ref={errRef} className={errMsg ? "errmsg" : "offscreen"} aria-live="assertive">{errMsg}</p> */}
            <div className="loginWrapper">
                <div className="loginLeft">
                    <h3 className="loginlogo">HOZALL</h3>
                    <span className='loginDesc'>
                        Connect with friends and the word around you on Hozall.
                    </span>
                </div>
                <form onSubmit={(e) => handleSubmit(e)} className="loginRight">
                    <div className="loginBox">

                        <input
                            type='text'
                            placeholder='Email'
                            className='loginInput'

                            name='username'
                            min='3'

                            onChange={(e) => handleChange(e)}

                        />
                        <input type='password'

                            className='loginInput'
                            placeholder='Password'
                            id='password'
                            name='password'
                            onChange={(e) => handleChange(e)}


                        />
                        <button type='submit' className='loginButton'>Log In</button>
                        <span className='loginForgot'>Forgot Password ?</span>
                        <Link className='loginRegisterButton' to={'/register'} >Tạo Tài Khoản</Link>


                    </div>
                </form>
            </div>
            <ToastContainer />
        </div>

    )
}
