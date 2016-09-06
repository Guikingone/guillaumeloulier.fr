import * as React from "react";

export interface PresentationProps {}

export class Presentation extends React.Component<PresentationProps, {}> {

    /**
     * Presentation Constructor
     */
    constructor() {
        super();

    }

    /**
     * @returns {any}
     */
    render() {
        return <div className="container-fluid">
            <div className="row">
                <div className="row">
                    <div className="col-xs-12 col-lg-9">
                        <h1>Créer et partager sa vision</h1>
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page
                            avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les
                            années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser
                            un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est
                        </p>
                        <button className="button_square_presentation">
                            <a href="#">Lire le blog</a>
                            <i className="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div className="hidden-xs col-lg-3">
                        <p>Hello World !</p>
                    </div>
                </div>
            </div>
        </div>
    }
}