import * as React from "react";

export interface MoreProps {}

export class More extends React.Component<MoreProps, {}> {

    /**
     * The url linked to the button.
     */
     public url: string;

    /**
     * Social Constructor.
     *
     * @param url
     */
    constructor(url: string) {
        super();
        this.url = url;
    }

    /**
     * @returns {any}
     */
    render() {
        return (
            <div className="container-fluid">
            <div className="row">
                <div className="col-xs-12">
                    <p className="text-center text-more">Partager ses connaissances</p>
                    <button type="button" className="button_square_introduction center-block">
                        <a href={this.url}>Lire le blog</a>
                        <i className="fa fa-pencil" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        )
    }
}