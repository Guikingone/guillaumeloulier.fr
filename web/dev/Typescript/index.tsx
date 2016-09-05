import * as React from "react";
import * as ReactDOM from "react-dom";

import {Home} from "./Components/Index/Home";

export interface IndexProps {}

export class Index extends React.Component<IndexProps, {}> {
    render() {
        return <Home/>
    }
}

ReactDOM.render(
    <Index/>,
    document.getElementById('introduction')
);