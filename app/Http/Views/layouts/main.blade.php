<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/6.1.19/browser.min.js"></script>
    <script src="../../build/react.js"></script>
    <script src="../../build/react-dom.js"></script>
  </head>
  <body>
    <div id="app"></div>
    <script>
var Greeter = React.createClass({
  render: function () {
    return (
      <div>
        <h1>Hello React!</h1>
        <p>This is form a component!</p>
      </div>
    );
  }
});

ReactDOM.render(
  <Greeter/>,
  document.getElementById('app')
);

    </script>
    @yield('script')
  </body>
</html>
