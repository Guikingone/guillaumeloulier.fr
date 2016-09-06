import * as React from "react";

export interface SocialProps {}

export class Social extends React.Component<SocialProps, {}> {
    render() {
        return (
            <div className="container-fluid">
                <div className="row">
                    <div className="col-md-3 col-sm-6">
                        <i className="fa fa-twitter"></i>
                    </div>
                    <div className="col-md-3 col-sm-6">
                        <i className="fa fa-facebook"></i>
                    </div>
                    <div className="col-md-3 col-sm-6">
                        <i className="fa fa-tumblr"></i>
                    </div>
                    <div className="col-md-3 col-sm-6">
                        <i className="fa fa-linkedin"></i>
                    </div>
                </div>
            </div>
        )
    }
}