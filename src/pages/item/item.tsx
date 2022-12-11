import React from 'react';
import './item.scss'
import Comment from "../../components/comment";
import CommentForm from "../../components/comment-form";

const Item = () => {
    const list = [
        {
            name:'Bake',
            id:1,
            message:'sad',
            img:''
        },
        {
            name:'Sake',
            id:2,
            message:'sad',
            img:''
        },
        {
            name:'Dake',
            id:3,
            message:'sad',
            img:''
        }
    ]

    return (
        <div>
            <h1>Item</h1>
            <div className={'item'}>
                <div className={'item__info'}>
                    <div className={'item__about'}>
                        <h1>Title</h1>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et nisl vitae nulla finibus convallis a non eros. Nunc dapibus ex vel </span>
                        <div className={'item__price'}>
                            <span>price 1000$</span>
                        </div>
                    </div>
                    <div className={'item__img'}></div>
                </div>
                <div className={'item__comments'}>
                    Comments
                    <>
                    {list.map((comment)=>(
                        <div key={comment.id}>
                            <Comment/>
                        </div>
                    ))}
                    </>
                </div>
                <CommentForm/>
            </div>
        </div>
    );
};

export default Item;
