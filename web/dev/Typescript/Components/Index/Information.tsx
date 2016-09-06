import * as React from "react";

export interface InformationProps {}

export class Information extends React.Component<InformationProps, {}> {

    constructor() {
        super();
    }

    /**
     * @returns {any}
     */
    render() {
        return <div className="container-fluid">
            <div className="row">
                <div className="col-xs-12 col-lg-7">
                    <img src="{{ asset('icons/svg/magic-wand.svg') }}" alt="logo_portfolio" className="logo-informations" />
                </div>
                <div className="col-xs-12 col-lg-5 pull-right">
                    <h1 className="pull-right">Montrer ses capacités</h1>
                    <p className="pull-right">
                        <em>
                            <strong>
                                "Créer reste le travail de tout développeur, montrer son travail est la preuve que l'on a
                                    réussi le but fixé, que l'on a su capter les demandes du client ..."
                            </strong>
                        </em>
                    </p>
                    <p className="pull-right">
                        Je n'aime pas partager lorsque le travail n'est pas terminé, pour faire simple et parce que je
                        n'aime pas m'étaler, j'ai donc décidé de vous ouvrir les portes de mon monde,
                        mes créations et mes recherches.
                    </p>
                    <button className="button_square_informations pull-right">
                        <a href="#">Voir le portfolio</a>
                        <i className="fa fa-picture-o" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    }
}