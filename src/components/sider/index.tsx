import React, {useState} from 'react';
import './index.scss'

export interface ISiderData{
    [region: string]: string[];
}
const Sider = () => {
    const [data,setData] = useState<ISiderData>({regions:[],price:[]})

    const list = [
        {
            id:1,
            title:'regions',
            items:['Sairan','Asylarman','Rayimbek','Kaskelen','sdf','sdfl;e','sdfsf']
        },

        {
            id:2,
            title:'price',
            items:[1000,2000,3000,4000,5000,6000,7000]
        }
    ]
    const setSider = (e:HTMLButtonElement|any) => {
        const title:string = e.target.value
        const str = e.target.children
        if(data[title].includes(str)){
            data[title]=data[title].splice(data[title].indexOf(str), 1)
            setData(data)
        }
        else{
            const l = data[title]
            l.push(str)
            data[title] = l
            setData(data)
        }
            e.target.classList.toggle('category__active')
    }
    return (
        <nav className={'sider'}>
            <aside>
                {list.map((item)=>(
                    <ul key={item.title}>
                        <li id={item.title} key={item.id}>
                            <a href={`#${item.title}`}>
                                <span>{item.title}</span>
                                <svg fill={"white"} style={{width:"10px",height:"10px"}} className="fa-angle-right" xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path id={'arrow-icon'} d="M7,24a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l8.17-8.17a3,3,0,0,0,0-4.24L6.29,1.71A1,1,0,0,1,7.71.29l8.17,8.17a5,5,0,0,1,0,7.08L7.71,23.71A1,1,0,0,1,7,24Z"/></svg>
                            </a>
                            <ul>
                                {item.items.map((ff,index)=>(
                                    <li key={`${ff}+index`}>
                                        <button onClick={setSider} value={item.title} title={`${ff}`} className={'category'}>
                                            {ff}
                                        </button>
                                    </li>
                                ))}

                            </ul>
                        </li>
                    </ul>))}
            </aside>
        </nav>
    );
};

export default Sider;
