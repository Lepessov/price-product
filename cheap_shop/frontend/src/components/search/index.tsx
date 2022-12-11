import React from 'react';
import './index.scss'
const Search = () => {
    return (
        <form action="" className="search">
            <input className={'search__input'} type="search" name="search" pattern=".*\S.*" required/>
                <button className="search-btn" type="submit">
                    <span>Search</span>
                </button>
        </form>
    );
};

export default Search;
