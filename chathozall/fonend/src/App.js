
import Home from "./pages/home/Home";
import Login from "./pages/login/Login";
import Register from "./pages/register/Register";
import Profile from "./pages/profile/Profile"

import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Message from "./pages/message/Message";
import Friends from "./pages/friends/Friends";
import Call from "./pages/message/Call";


function App() {
  return (

    <BrowserRouter>


      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/friends" element={<Friends />} />
        <Route path="/profile/:id" element={<Profile />} />
        <Route path='/message/t/:id' element={<Message />} />
        <Route path='/message' element={<Message />} />
        <Route path='/message' element={<Message />} />

        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Register />} />
        <Route path="/Call" element={<Call />} />
      </Routes>
    </BrowserRouter>

  );
}
export default App;


