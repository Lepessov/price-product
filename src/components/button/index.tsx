import React, { FunctionComponent } from 'react';
import {useNavigate} from "react-router-dom";

export interface IButton{
    text? : string,
    color? : string,
    navigate? : string,
}

const Button: FunctionComponent<IButton> = ({text, navigate}) => {
    const navigateTo = useNavigate()
    const navigateF = () => {
        if(navigate){
            navigateTo(`/${navigate}`);
        }
    };
    return (
    <button onClick={navigateF}>
        {text}
    </button>
)};

Button.defaultProps = {
    text: '',
};

export default Button;
