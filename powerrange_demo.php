Skip to content
Sign up Sign in
This repository  
Explore
Features
Enterprise
Blog
 Watch 22  Star 318  Fork 47 abpetkov/powerange
 branch: master  powerange/example/example.html
@abpetkovabpetkov on Apr 14, 2014 Check value button text
1 contributor
RawBlameHistory     464 lines (361 sloc)  21.326 kb
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />

  <title>Powerange - iOS 7 style range slider</title>
<link rel="stylesheet" type="text/css" href="powerange.min.css">
  <link href="http://fonts.googleapis.com/css?family=Maven+Pro:400" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" type="text/css" />
</head>
<body>

  <div class="container">

    <header class="header box clearfix">
      <h1>Powerange</h1>
      <div class="slogan">iOS 7 style range slider</div>
    </header>

    <section class="author clearfix">
      <span>Follow me:</span>
      <a class="twitter box" href="https://twitter.com/abpetkov" target="_blank">@abpetkov</a>
      <a class="github box" href="https://github.com/abpetkov" target="_blank">abpetkov</a>
      <a class="dribbble box" href="http://dribbble.com/apetkov" target="_blank">apetkov</a>
    </section>

    <section class="content">

      <div class="box">
        <h2>About Powerange</h2>

        <p>
          Powerange is a range slider control, inspired heavily by iOS 7 and the "Power Rangers" TV series. It is easily customizable, both by CSS and JavaScript. With it's many features, including changing color and overall style, switching between horizontal and vertical style, custom min, max and start values, custom step interval, displaying decimal values, displaying icons instead of min/max numbers, it is a really powerful UI tool to use on your website.
        </p>

        <p>A great cross-browser solution, supporting: Google Chrome 14+, Mozilla Firefox 6.0+, Opera 11.6+, Safari 5+, IE 9+</p>

        <p>Licensed under <a href="http://opensource.org/licenses/MIT" target="_blank">The MIT License</a>.</p>

        <p>If you like this module and you're a fan of iOS 7 style UI widgets, check out <a href="http://abpetkov.github.io/switchery/" target="_blank">Switchery</a>.</p>

        <a href="https://github.com/abpetkov/powerange" target="_blank" class="button star-button">
          <span class="star-icon"></span>
          Star the GitHub repo
        </a>
      </div>

      <div class="box">
        <h2>Installation</h2>

        <h3>Standalone</h3>

        <pre>
          <div class="tag">
            &lt;link <span class="attribute">rel=</span><span class="value">&quot;stylesheet&quot;</span> <span class="attribute">href=</span><span class="value">&quot;dist/powerange.css&quot;</span> /&gt;
          </div>
          <div class="tag">
            &lt;script <span class="attribute">src=</span><span class="value">&quot;dist/powerange.js&quot;</span>&gt;&lt;/script&gt;
          </div>
        </pre>

        <h3>Component</h3>

        <pre>
          <div class="script">
            $ component install abpetkov/powerange
          </div>
        </pre>

        <h3>Bower</h3>

        <pre>
          <div class="script">
            $ bower install powerange
          </div>
        </pre>
      </div>

      <div class="box">
        <h2>Usage</h2>

        <pre>
          <div class="script">
            <div><span class="specials">var</span> elem <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-range'</span>);</div>
            <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem);</div>
          </div>
        </pre>

        <p>Use the above for the standalone version.</p>

        <p class="note">NOTE: your element must be a text input</p>
      </div>

      <div class="box">
        <h2>Settings and Defaults</h2>

        <pre>
          <div class="script">
            <div>defaults <span class="sign">=</span> {</div>
              <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="name">callback</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="specials">function</span>() {}</div>
              <div>&nbsp;&nbsp;, decimal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">false</span></div>
              <div>&nbsp;&nbsp;, disable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">false</span></div>
              <div>&nbsp;&nbsp;, disableOpacity: <span class="boolean">0.5</span></div>
              <div>&nbsp;&nbsp;, hideRange &nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">false</span></div>
              <div>&nbsp;&nbsp;, klass &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="value">''</span></div>
              <div>&nbsp;&nbsp;, min &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">0</span></div>
              <div>&nbsp;&nbsp;, max &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">100</span></div>
              <div>&nbsp;&nbsp;, start &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">null</span></div>
              <div>&nbsp;&nbsp;, step &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">null</span></div>
              <div>&nbsp;&nbsp;, vertical &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <span class="boolean">false</span></div>
            <div>};</div>
          </div>
        </pre>

        <ul class="section-list">
          <li><div>callback</div> - <p>function invoked on initialization and on slider handle movement</p></li>
          <li><div>decimal</div> - <p>display decimal number</p></li>
          <li><div>disable</div> - <p>enable or disable slider</p></li>
          <li><div>disableOpacity</div> - <p>opacity of the disabled slider</p></li>
          <li><div>hideRange</div> - <p>show or hide min and max range values</p></li>
          <li><div>klass</div> - <p>additional class for the slider wrapper for extra customization</p></li>
          <li><div>min</div> - <p>minimum range value</p></li>
          <li><div>max</div> - <p>maximum range value</p></li>
          <li><div>start</div> - <p>starting value</p></li>
          <li><div>step</div> - <p>step of the handle</p></li>
          <li><div>vertical</div> - <p>toggle between horizontal or vertical slider</p></li>
        </ul>
      </div>

      <div class="box">
        <h2>Examples</h2>

        <div class="example">
          <h3>Basic style customization</h3>

          <p>You are free to customize the range slider as much as you wish, using only CSS.</p>

          <p>The width (for horizontal) or height (for vertical) of the slider, depends on the container in which it's placed and take 100%.</p>

          <p>Play around with the <strong>background-color</strong> of <strong>.range-bar</strong> and <strong>.range-quantity</strong>, add a <strong>background-image</strong> to <strong>.range-handle</strong>, add some nice <strong>background-image</strong> to <strong>.range-min</strong> and <strong>.range-max</strong>, get use of the <strong>hideRange</strong> option and you may end up with something as fun as this:</p>

          <div class="slider-wrapper">
            <input type="text" class="js-customized" />
          </div>

          <p>The sky is the limit.</p>

          <p class="note">Hint: Use the <strong>klass</strong> option to add an additional class to the slider and apply different style to it</p>
        </div>

        <div class="example">
          <h3>Minimum, maximum and start values</h3>

          <p>Changing your default <strong>min</strong>, <strong>max</strong> and <strong>start</strong> values is pretty easy. The start value has to be a number in your min-max interval, otherwise it takes the value of either <strong>min</strong> or <strong>max</strong>, depending on which is closer. Negative values are supported as well.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { min: <span class="boolean">16</span>, max: <span class="boolean">256</span>, start: <span class="boolean">128</span> });</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-min-max-start" />
          </div>
        </div>

        <div class="example">
          <h3>Decimal</h3>

          <p>Display decimal number with 2 characters after the decimal point.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { decimal: <span class="boolean">true</span> });</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-decimal" />
            <label class="display-box-label">Value:</label>
            <div id="js-display-decimal" class="display-box"></div>
          </div>
        </div>

        <div class="example">
          <h3>Slider step</h3>

          <p>You can change the step with which the handle moves, using the <strong>step</strong> option.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { step: <span class="boolean">10</span> });</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-step" />
          </div>
        </div>

        <div class="example">
          <h3>Hide range values</h3>

          <p>You can hide the min and max values, by using the <strong>hideRange</strong> option.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { hideRange: <span class="boolean">true</span> });</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-hiderange" />
          </div>
        </div>

        <div class="example">
          <h3>Disabled</h3>

          <p>Disable the range slider and change it's default <strong>disabledOpacity</strong> if needeed.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { disable: <span class="boolean">true</span>, disabledOpacity: <span class="boolean">0.75</span> });</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-disabled" />
          </div>
        </div>

        <div class="example">
          <h3>Horizontal and vertical slider</h3>

          <p>The default Powerange slider is horizontal. However, you can make it vertical, by setting <strong>vertical: true</strong>.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { vertical: <span class="boolean">true</span> });</div>
            </div>
          </pre>

          <div class="slider-wrapper vertical-wrapper">
            <input type="text" class="js-vertical" />
          </div>
        </div>

        <div class="example">
          <h3>Checking state</h3>

          <p>Check the current value of the range slider, by looking at the value of the text input element.</p>

          <p>On click:</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> clickInput <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-check-click'</span>)</div>
              <div>&nbsp;&nbsp;, clickButton <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-check-click-button'</span>)</div>
              <br />
              <div>clickButton.addEventListener(<span class="value">'click'</span>, <span class="specials">function</span>() {</div>
              <div>&nbsp;&nbsp;<span class="single">alert</span>(clickInput.<span class="boolean">value</span>);</div>
              <div>});</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-check-click" />
            <button class="js-check-click-button button small-button">Check value</button>
          </div>

          <p>On change:</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> changeInput <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-check-change'</span>);</div>
              <br />
              <div><span class="single">changeInput</span>.<span class="name">onchange</span> = <span class="specials">function</span>() {</div>
              <div>&nbsp;&nbsp;<span class="single">document</span>.<span class="specials">getElementById</span>(<span class="value">'js-display-change'</span>).innerHTML = changeInput.<span class="boolean">value</span>;</div>
              <div>};</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-check-change" />
            <label class="display-box-label">Value:</label>
            <div id="js-display-change" class="display-box"></div>
          </div>

        </div>

        <div class="example">
          <h3>Callback</h3>

          <p>The callback function is invoked on slider initialization and on slider handle movement. It's very appropriate for displaying the current value in another element.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> elem <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-range'</span>);</div>
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem);</div>
              <br />
              <div><span class="specials">function</span> <span class="name">displayValue</span>() {</div>
                <div>&nbsp;&nbsp;<span class="single">document</span>.<span class="specials">getElementById</span>(<span class="value">'display-box'</span>).innerHTML = elem.<span class="boolean">value</span>;</div>
              <div>}</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-callback" />
            <label class="display-box-label">Value:</label>
            <div id="js-display-callback" class="display-box"></div>
          </div>
        </div>

        <div class="example">
          <h3>Interacting with another elements</h3>

          <p>Just a simple example of how you can interact with an element, when changing the slider value. In this case, we change the opacity of an awesome power ranger mask.</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> elem <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-range'</span>);</div>
              <div><span class="specials">var</span> init <span class="sign">=</span> <span class="sign">new</span> <span class="name">Powerange</span>(elem, { callback: setOpacity, decimal: <span class="boolean">true</span>, min: <span class="boolean">0</span>, max: <span class="boolean">1</span>, start: <span class="boolean">1</span> });</div>
              <br />
              <div><span class="specials">function</span> <span class="name">setOpacity</span>() {</div>
                <div>&nbsp;&nbsp;<span class="single">document</span>.querySelector(<span class="value">'.js-change-opacity'</span>).<span class="boolean">style</span>.opacity = elem.<span class="boolean">value</span>;</div>
              <div>}</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-opacity" />
            <div class="powerranger js-change-opacity"></div>
          </div>
        </div>
      </div>

      <div class="box">
        <h2>Development</h2>

        <p>If you've decided to go in development mode and tweak this module, there are few things you should do.</p>

        <p>Make your own build files, by using <a href="http://gruntjs.com/" trget="_blank">Grunt</a> command:</p>

        <pre>
          <div class="script">
            $ grunt build
          </div>
        </pre>

        <p>Add the following code before the initialization:</p>

        <pre>
          <div class="script">
            <span class="specials">var</span> Powerange <span class="sign">=</span> require(<span class="value">'powerange'</span>);
          </div>
        </pre>

        <p>Make sure you're using the <strong>build/build.js</strong> and <strong>build/build.css</strong> files and you're ready.</p>

        <p>There are some useful commands you can use:</p>

        <ul class="section-list">
          <li><div>$ grunt watch</div> - <p>watches for changes in the CSS and JS files in <strong>lib/</strong> and updates the build files</p></li>
          <li><div>$ grunt componentbuild</div> - <p>updates the files in <strong>build/</strong></p></li>
          <li><div>$ grunt uglify</div> - <p>makes new JS standalone files</p></li>
          <li><div>$ grunt cssmin</div> - <p>makes new CSS standalone files</p></li>
          <li><div>$ grunt clean</div> - <p>empties the contents of <strong>build/</strong> and <strong>dist/</strong> folders</p></li>
        </ul>
      </div>

    </section>

    <footer class="footer box clearfix">
      <div class="left">
        <ul>
          <li><a href="https://github.com/abpetkov/powerange/issues" target="_blank">Submit an issue</a></li> /
          <li><a href="https://github.com/abpetkov/powerange" target="_blank">View on GitHub</a></li>
        </ul>
      </div>
      <div class="right">
        <span>Follow me:</span>
        <a class="twitter" href="https://twitter.com/abpetkov" target="_blank">@abpetkov</a>
        <a class="github" href="https://github.com/abpetkov" target="_blank">abpetkov</a>
        <a class="dribbble" href="http://dribbble.com/apetkov" target="_blank">apetkov</a>
        <div class="copyright">Copyright &copy; 2014 Alexander Petkov</div>
      </div>
    </footer>

  </div>

<script src="powerange.min.js"></script>
  <script type="text/javascript">
    // Basic customization.
    var cust = document.querySelector('.js-customized');
    var initCust = new Powerange(cust, { hideRange: true, klass: 'power-ranger', start: 60 });
    // Min, max, start.
    var vals = document.querySelector('.js-min-max-start');
    var initVals = new Powerange(vals, { min: 16, max: 256, start: 128 });
    // Decimal.
    var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, max: 50, start: 19.12 });
    function displayDecimalValue() {
      document.getElementById('js-display-decimal').innerHTML = dec.value;
    }
    // Step.
    var stp = document.querySelector('.js-step');
    var initStp = new Powerange(stp, { start: 50, step: 10 });
    // Hide range.
    var hide = document.querySelector('.js-hiderange');
    var initHideRange = new Powerange(hide, { hideRange: true, start: 70 });
    // Disabled.
    var disabled = document.querySelector('.js-disabled');
    var initDisabled = new Powerange(disabled, { disable: true, disabledOpacity: 0.75, start: 30 });
    // Vertical.
    var vert = document.querySelector('.js-vertical');
    var initVert = new Powerange(vert, { start: 80, vertical: true });
    // Checking state.
    // On click.
    var clickInput = document.querySelector('.js-check-click')
      , clickButton = document.querySelector('.js-check-click-button')
      , initClickInput = new Powerange(clickInput, { start: 20 });
    clickButton.addEventListener('click', function() {
      alert(clickInput.value);
    });
    // On change.
    var changeInput = document.querySelector('.js-check-change')
      , initChangeInput = new Powerange(changeInput, { start: 70 });
    changeInput.onchange = function() {
      document.getElementById('js-display-change').innerHTML = changeInput.value;
    };
    // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue, start: 88 });
    function displayValue() {
      document.getElementById('js-display-callback').innerHTML = clbk.value;
    }
    // Interacting with elements.
    var opct = document.querySelector('.js-opacity');
    var initOpct = new Powerange(opct, { callback: setOpacity, decimal: true, min: 0, max: 1, start: 1 });
    function setOpacity() {
      document.querySelector('.js-change-opacity').style.opacity = opct.value;
    }
  </script>
</body>
</html>
Status API Training Shop Blog About
© 2015 GitHub, Inc. Terms Privacy Security Contact
