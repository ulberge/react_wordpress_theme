import React, { Component } from 'react';
import Card from './Card';
import BackboneAPI from './BackboneAPI.js';

let api = new BackboneAPI();

class WhiteboardApp extends Component {
  constructor(props) {
    super(props);
    this.state = {
      cards: [],
    };

    let success = (data) => {
      this.state = data;
    };

    api.fetch(success);
  }

  render() {
    return (
      <div>
        <ul>
          {this.state.cards.map(function(cardData){
            return <li><Card data={cardData} /></li>;
          })}
        </ul>
      </div>
    );
  }
}

export default WhiteboardApp;
