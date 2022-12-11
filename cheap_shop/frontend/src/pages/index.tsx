import {
    Route, Routes,
} from 'react-router-dom';
import Auth from "./auth/auth";
import Welcome from "./welcome/welcome";
import Main from "./main/main";
import Item from "./item/item";
import Layout from "../layout";


export const Pages = (): JSX.Element => {

    return (
        <>
            <Routes>
                <Route path="/" element={<Welcome />} />
                <Route path="/ok" element={<Layout />}>
                    <Route path="main" element={<Main />} />
                    <Route path="auth" element={<Auth />} />
                    <Route
                        path="item"
                        element={(<Item />)}
                    />
                </Route>
            </Routes>
        </>
    );
};
