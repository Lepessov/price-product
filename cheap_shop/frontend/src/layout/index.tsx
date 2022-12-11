import React from 'react';
import {Outlet} from "react-router-dom";
import {Pages} from "../pages";
import Header from "../components/header";

const Layout = () => {
    return (
        <div>
            <Header/>

            <Outlet />
        </div>
    );
};

export default Layout;
