import * as React from "react";

export interface HomeProps {}

export class Home extends React.Component<HomeProps, {}> {
    render() {
        return <div className="container-fluid">
            <div className="row">
                <div className="hidden-xs col-lg-6">
                    <img src="../../../icons/svg/idea.svg') }}" alt="logo" className="logo_introduction" />
                </div>
                <div className="col-xs-12 col-lg-6">
                    <p className="text_introduction pull-right">Que puis-je pour vous ?</p>
                    <p className="text_accroche pull-right">Parce que créer le monde de demain requiert <em>la</em> bonne idée.</p>
                    <button className="button_square_introduction pull-right">
                        <a href="#">En savoir plus</a>
                        <i className="fa fa-user" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    }
}
