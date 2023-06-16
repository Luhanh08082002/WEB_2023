import'./layout.css'
function Pesion(props){
    return(
        <div className="pesion">
            <h1>name :{props.name}</h1>
            <p>age : {props.age}</p>
        </div>
    )
}

export default Pesion;
