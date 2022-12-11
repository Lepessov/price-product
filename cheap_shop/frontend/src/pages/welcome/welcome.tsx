import React from 'react';
import Button from "../../components/button";

const Welcome = () => {
    return (
        <div>
            <h1>Welcome!!!</h1>
            <Button text={'Welcome'} navigate={'ok/main'}/>
        </div>
    );
};

export default Welcome;
