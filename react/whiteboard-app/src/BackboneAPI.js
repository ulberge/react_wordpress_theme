import Backbone from 'backbone';

let testData = new Backbone.Model({
  cards: [
    {title: 1, content: 'text1', id: 0},
    {title: 2, content: 'text2', id: 1}
  ]
});

class BackboneAPI {

  constructor() {
    this.backboneData = testData;
  }

  fetch(success) {
    success(this.backboneData.toJSON());
  }

}

export default BackboneAPI;