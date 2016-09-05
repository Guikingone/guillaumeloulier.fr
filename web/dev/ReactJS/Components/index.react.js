var IndexBox = React.createClass({
    getInitialState: function() {
        return {
            data: []
        };
    },
    componentDidMount: function () {
      $.get(this.props.url, function (result) {
          this.setState({
            data: result.libelle
          })
      }.bind(this));
    }
});