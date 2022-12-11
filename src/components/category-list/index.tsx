import React, {useRef, useState} from 'react';
import './index.scss'

const CategoryList = () => {
    const [data,setData] = useState<string[]>([])
    const [tablo,setTablo] = useState(false)
    const list = ['meat','milk','et','adam','dd']

    window.addEventListener('scroll', ()=>{
        if(window.scrollY>130){
            setTablo(true)
        }
        else{
            setTablo(false)
        }
    })

    const setCategories = (e:HTMLButtonElement|any) => {
        const str = e.target.value
        if(data.includes(str)){
            const l = data.splice(data.indexOf(str),1)
            setData(l)
        }
        else{
            const l = data
            l.push(str)
            setData(l)
        }
        console.log(e.target)
        e.target.classList.toggle('categories__btn-active')
    }
    return (
        <div className={`categories ${tablo?'fixy':'staticky'}`}>
            <div className={'categories__container'}>
                {list.map((category)=>(
                    <button
                        key={category}
                        className={`categories__btn`}
                        value={category}
                        onClick={setCategories}>{category}
                    </button>
                ))}
            </div>
        </div>
    );
};

export default CategoryList;
