import * as React from "react";
import * as ReactDOM from "react-dom";

import {Home} from "./Components/Index/Home";
import {Presentation} from "./Components/Index/Presentation";
import {Information} from "./Components/Index/Information";
import {More} from "./Components/Index/More";
import {Social} from "./Components/Index/Social";

export interface IndexProps {}

export class Index extends React.Component<IndexProps, {}> {
    render() {
        return (
            <main>
                <section className="introduction" id="introduction">
                    <Home/>
                </section>
                <section className="presentation" id="presentation">
                    <Presentation/>
                </section>
                <section id="information" className="information">
                    <Information/>
                </section>
                <section id="more" className="more">
                    <More/>
                </section>
                <section id="social-link" className="socials_links text-center">
                    <Social/>
                </section>
            </main>
        )
    }
}

ReactDOM.render(
    <Index/>,
    document.getElementById('body')
);