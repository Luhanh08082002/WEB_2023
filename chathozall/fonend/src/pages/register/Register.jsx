import './Register.css'
import { toast, ToastContainer } from 'react-toastify'
import { Link ,useNavigate } from 'react-router-dom'
import { useState ,useEffect} from 'react'
import axios from 'axios'
import "react-toastify/dist/ReactToastify.css"
import { registerRouter } from '../../utils/APIRouter'

export default function Register() {
    const navigate = useNavigate();

    const [values,setValues] = useState({
        username: '',
        email:"",
        password:'',
        confirmpassword:'',
    });

    const toastOptions = {
        position: "bottom-right",
        autoClose: 2000,
        pauseOnHover: true,
        draggable: true,
        theme: "dark",
      }




      const handleValidation =()=>{
          console.log("in validation",registerRouter)
          const {username,email,password,confirmpassword} = values;
          const re = /\S+@\S+\.\S+/;
          if (password !== confirmpassword) {
            toast.error("Mật khẩu và xác Nhận mật khẩu không giống nhau", toastOptions);
            return false;
          } else if (username.length < 4) {
            toast.error("Tên Người DÙng phải lớn hơn 4 kí tự", toastOptions);
            return false;
        } else if (!re.test(email)) {
            toast.error("Email không Hợp Lệ", toastOptions);
            return false;
      
          } else if (password.length < 8) {
            toast.error("Mật Khẩu phải lớn hơn 8 kí tự", toastOptions);
            return false;
      
          }
          return true;
      }

      const handleSubmit = async(e) =>{
          e.preventDefault();
          if(handleValidation()){

            const {password , username , email} = values;
              const {data} = await axios.post(registerRouter,{
                  username,
                  password,
                  email,
              })
            if(data.status === false){
                toast.error(data.msg, toastOptions);
            }
            if (data.status === true) {
                localStorage.setItem('chat-app-user', JSON.stringify(data.user));
                navigate("/");
              }

          }

         
      };
    //   

      const handleChange = (e) =>{
          setValues({...values, [e.target.name]:e.target.value})
      }


    return (
        <>
            <div className='login'>
                <div className="loginWrapper">
                    <div className="loginLeft">
                        <h3 className="loginlogo">HOZALL</h3>
                        <span className='loginDesc'>
                            Connect with friends and the word around you on Hozall.
                        </span>
                    </div>
                    <div className="loginRight">
                        <form  onSubmit={(e) => handleSubmit(e)}>
                        <div className="loginBox">
                            <input placeholder='Username' className='loginInput' name='username' onChange={(e) => handleChange(e)}/>
                            <input placeholder='Email' className='loginInput' name='email' onChange={(e) => handleChange(e)}/>
                            <input className='loginInput' placeholder='Password' name='password' onChange={(e) => handleChange(e)}/>
                            <input className='loginInput' placeholder='Password Again' name='confirmpassword' onChange={(e) => handleChange(e)}/>
                            <button className='loginButton' type='submit'>Sign Up</button>
                            <span className='loginRegisterButton'> 
                            Log Into Acccount ? <Link to="/login">Login</Link>
                            </span>
                        </div>
                            
                        </form>
                        
                    </div>
                </div>
                <ToastContainer />
            </div>
            
        </>
    )
}
