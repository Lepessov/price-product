import React from 'react';
import './index.scss'
import Logo from "../logo";
import Search from "../search";

const Header = () => {
    return (
        <header className={'header'}>
            <Logo/>
            <Search/>
        </header>
    );
};

export default Header;
