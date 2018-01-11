import React, { Component } from 'react';

class Card extends Component {

  render() {
    return (
    <div className="square" key={this.props.data.id}>
      <span>title: {this.props.data.title}</span>
      <span>content: {this.props.data.content}</span>
    </div>
    );
  }
}

export default Card;
