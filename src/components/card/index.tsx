import React from 'react';
import './index.scss'
import {useNavigate} from "react-router-dom";

const Card = () => {
    const navigate = useNavigate()
    const l = ()=>{
        navigate('/ok/item')
    }
    return (
        <div onClick={()=>navigate('/ok/item')} className={'card'}>
            <div className={'card__img'}>
                <img src="" alt=""/>IMAGINE
            </div>
            <div className={'card__info'}>
                <div className={'card__title'}>
                    <span>Title</span>
                </div>
                <div className={'card__description'}>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et nisl vitae nulla finibus convallis a non eros. Nunc dapibus ex vel </span>
                </div>
                <div className={'card__price'}>
                    <span>1$</span>
                </div>
            </div>
        </div>
    );
};

export default Card;
