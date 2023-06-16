// class cpn
// function cpn

import React, { useEffect, useState } from "react"

export class User extends React.Component {
    state = {
        name: 'thang',
        age: 21,
        isOpen: true
    }

    constructor() {
        super()
    }

    // com

    // componentDidUpdate() {

    // }

    // componentWillMount() {
    //     console.log('componentWillMount')
    // }

    // componentDidMount() {
    //     console.log('componentDidMount')
    // }


    updateName = () => {
        this.setState({ age: this.state.age + 1 })
    }

    render() {
        // console.log('render component')
        return <>
            {/* <div>{this.state.name} + {this.state.age}</div>
            <div><button onClick={this.updateName}>supdate name</button></div> */}

            <button onClick={() => this.setState({isOpen: false})}>destroy cpn</button>

            {
                this.state.isOpen && <User1 name={'cafe quan'} age={100} />
            }

            
        </>
    }
}



export function User1(props) {

    const [user, setUser] = useState({
        name: props.name,
        age: props.age,
        height: 55,
        address: ''
    })

    useEffect(() => {
        console.log('render component didmount')
        return () => {
            console.log('cleanup component')
        }
    }, [])

    useEffect(() => {
        console.log('User1.useffect update')
        console.log('componet da thay doi, t muon cap nhat')
        
    }, [user])

    // useEffect(() => {
    //     console.log('User1.useffect user')
    //     return () => {
    //         console.log('UseEffect cleanup')
    //     }
    // }, [user])

    const updateName = (key, value) => {
        setUser({ ...user, [key]: value })
    }

    console.log('render component')

    return (
        <>
            {
                props.children
            }
            <div>{user.name} + {user.age} + {user.height}</div>
            <div><button onClick={() => updateName('name', 'hung')}>supdate name</button></div>
            <div><button onClick={() => updateName('age', '77')}>supdate age</button></div>
            <div><button onClick={() => updateName('height', '33')}>supdate height</button></div>
        </>
    )
}

