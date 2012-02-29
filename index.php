
<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Unpaste</title>
    <link rel="stylesheet" href="hashify-editor.css" />
    <link rel="stylesheet" href="hashify.css" />
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAANklEQVQ4y2P4//8/AyUYwQAygfgfCONUDJVnAGsbNQCvAUDcgAMTbcBfHJhOBoxG40AZQC4GAGFDLqEWPyCLAAAAAElFTkSuQmCC" />
    <link rel="apple-touch-icon" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon-72x72.png" sizes="72x72" />
    <link rel="apple-touch-icon" href="apple-touch-icon-114x114.png" sizes="114x114" />
    <link rel="author" href="/humans.txt" />
  </head>
  <body>
    <div id="sidebar">
      <div id="editor">
        <textarea id="markdown"></textarea>
        <div id="counter"></div>
      </div>
   <div id="wrapper" style="display:none">
        <a id="qrcode">QR code</a>
      </div>
      <a id="shorten" href="#shorten">Save. Shorten. Share.</a>
      <div id="credits">
        <h4>Credits</h4>
        <ul>
          <li><a href="http://github.com/siddhant3s/unhostedpaste">Siddhant Sanyam</a></li>
          <li><a href="http://hashify.me">Based on David Chamber's Hashify.me</a></li>
        </ul>

      </div>
      <div id="dragger"></div>
    </div>
    <pre id="markup">
      <noscript>
        <h1>Page doesn't work without Javascript</h1>
        <p>Enable JavaScript and reload this page to work.</p>
        <style>#mask{display:none}</style>
      </noscript>
    </pre>
    <div id="kbd-shortcuts">
      <div>
        <h1>Keyboard shortcuts</h1>
        <h2>General shortcuts</h2>
        <dl>
          <dt><kbd title="escape">⎋</kbd></dt>
          <dd>Dismiss this dialog</dd>
          <dt><kbd>?</kbd></dt>
          <dd>Invoke this dialog</dd>
          <dt><kbd title="left arrow">←</kbd></dt>
          <dd>Conceal editor</dd>
          <dt><kbd title="right arrow">→</kbd></dt>
          <dd>Reveal editor</dd>
        </dl>
        <h2>Editor shortcuts</h2>
        <dl>
          <dt><kbd>#</kbd></dt>
          <dd>Cycle heading level</dd>
          <dt><kbd>&gt;</kbd></dt>
          <dd>Toggle “blockquote”</dd>
          <dt><kbd>_</kbd></dt>
          <dd>Toggle “em”</dd>
          <dt><kbd>*</kbd></dt>
          <dd>Toggle “strong”</dd>
          <dt><kbd>`</kbd></dt>
          <dd>Toggle “code”</dd>
          <dt data-keys="2"><kbd title="alt">⌥</kbd><kbd title="tab">⇥</kbd></dt>
          <dd>Insert four spaces</dd>
        </dl>
      </div>
    </div>
    <div id="mask"></div>
    <script src="LAB.js"></script>
    <script>

        $LAB

          .script('prettify/prettify.js')
          .script('jquery.min.js')
          .script('md5-min.js')
          .script('unpaste.js')
          .script('hashify-editor.js').wait()
          .script('hashify.js');
    </script>
  </body>
</html>
