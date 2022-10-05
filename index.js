var image = document.querySelector('.image');

var highlighter = new ImageMapHighlighter(image,{
  fill: true,
  fillColor: '000000',
  fillOpacity: 0.2,
  stroke: true,
  strokeColor: 'ff0000',
  strokeOpacity: 1,
  strokeWidth: 1,
  alwaysOn: false
});
highlighter.init();