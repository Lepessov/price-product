import React from 'react';
import CategoryList from "../../components/category-list";
import Sider from "../../components/sider";
import Card from "../../components/card";

const Main = () => {
    const list = [
        {
            id:1,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:2,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:3,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:4,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:5,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:6,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:7,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:8,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:9,
            title:'Title',
            img:'',
            price:'100$'
        },
        {
            id:10,
            title:'Title',
            img:'',
            price:'100$'
        }
    ]
    return (
        <div>
            <h1>Main</h1>
            <CategoryList/>
            <div style={{display:"flex"}}>
                <Sider/>
                <div style={{justifyContent:"center",width:"100%"}}>
                    <div style={{display:"inline-flex",flexWrap:"wrap",justifyContent:"center"}}>
                        {list.map((card)=>(
                            <Card key={card.id}/>
                        ))}
                    </div>
                </div>


            </div>
        </div>
    );
};

export default Main;
