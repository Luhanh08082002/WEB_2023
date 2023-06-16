import logo from './logo.svg';
import './App.css';
import React, {Component} from 'react';
import Header from './Components/Layout/header'
import Sidebar from './Components/Layout/sidebar'
import Pesion from './Components/Layout/test'
import { render } from '@testing-library/react';


const  one = ()=>{
  return(
  <div>
    <h1>Cach thu nhat</h1>
    <h1>Cach thu hai</h1>
  </div>
  )
  
}
class App extends Component{

  render(){
    return (
      <div>
        <Header/>
        {/* <Pesion name="thắng"age="20"/>
        <Pesion name="Lu Hanh"age="21"/>
        <Pesion name="Pong"age="2x2"/> */}
        <div className='container'>
          <div className="row" >
            <div>
              <Sidebar/>
              <one></one>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default App;
