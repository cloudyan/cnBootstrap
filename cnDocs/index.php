<?php $page = "home" ?>
<?php $title="Design Pattern Library"?>
<?php $description = "本项目作为研究并学习bootstrap以及实践cnBootstrap之用，由于Bootstrap项目不太适用国内或者说我正在从事的项目，必须要做部分的调整，进一步研究调试cnBootstrap，本项目仍然在Github中开源，便于大家交流讨论及测试应用。" ?>
<?php include("./templates/header.php"); ?>

<div class="jumbotron masthead">
  <div class="container">
    <h1>cnBootstrap</h1>
    <p>时尚，直观，强大的前端框架cnBootstrap<br>使Web开发更快，更容易。</p>
    <p>
      <a href="https://github.com/xiaohan1219/cnBootstroap" class="btn btn-primary btn-large" title="Download Bootstrap">下载 cnBootstrap<small>(v1.0)</small></a>
    </p>
    <ul class="masthead-links">
      <li>
        <a href="https://github.com/xiaohan1219/cnBootstroap" title="Github Progect">访问 GitHub 项目</a>
      </li>
      <li>
        <a href="./getting-started.php#examples" title="Examples">例子</a>
      </li>
      <li>
        <a href="./extend.html" title="Extend">扩展</a>
      </li>
      <li>
        Version 1.0 base on TB v2.2.1
      </li>
	  <li>
	  	<a href="./bugs-and-fixed.php" title="Browser compatibility reproduce the bug and solution">Bugs and Fixed</a>
	  </li>
    </ul>
  </div>
</div>
<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twitter&repo=bootstrap&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
      </li>
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=twitter&repo=bootstrap&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="98px" height="20px"></iframe>
      </li>
      <li class="follow-btn">
        <a href="https://twitter.com/twbootstrap" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @twbootstrap</a>
      </li>
      <li class="tweet-btn">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.github.com/bootstrap/" data-count="horizontal" data-via="twbootstrap" data-related="mdo:Creator of Twitter Bootstrap">Tweet</a>
      </li>
    </ul>
  </div>
</div>
<div class="container">

  <div class="marketing">

    <h1>Introducing Bootstrap.</h1>
    <p class="marketing-byline">Need reasons to love Bootstrap? Look no further.</p>

    <div class="row-fluid">
      <div class="span4">
        <img src="assets/img/bs-docs-twitter-github.png">
        <h2>By nerds, for nerds.</h2>
        <p>Built at Twitter by <a href="http://twitter.com/mdo">@mdo</a> and <a href="http://twitter.com/fat">@fat</a>, Bootstrap utilizes <a href="http://lesscss.org">LESS CSS</a>, is compiled via <a href="http://nodejs.org">Node</a>, and is managed through <a href="http://github.com">GitHub</a> to help nerds do awesome stuff on the web.</p>
      </div>
      <div class="span4">
        <img src="assets/img/bs-docs-responsive-illustrations.png">
        <h2>Made for everyone.</h2>
        <p>Bootstrap was made to not only look and behave great in the latest desktop browsers (as well as IE7!), but in tablet and smartphone browsers via <a href="./scaffolding.php#responsive">responsive CSS</a> as well.</p>
      </div>
      <div class="span4">
        <img src="assets/img/bs-docs-bootstrap-features.png">
        <h2>Packed with features.</h2>
        <p>A 12-column responsive <a href="./scaffolding.php#grid">grid</a>, dozens of components, <a href="./javascript.php">JavaScript plugins</a>, typography, form controls, and even a <a href="./customize.php">web-based Customizer</a> to make Bootstrap your own.</p>
      </div>
    </div>

    <hr class="soften">

    <h1>Built with Bootstrap.</h1>
    <p class="marketing-byline">For even more sites built with Bootstrap, <a href="http://builtwithbootstrap.tumblr.com/" target="_blank">visit the unofficial Tumblr</a> or <a href="./getting-started.html#examples">browse the examples</a>.</p>
    <div class="row-fluid">
      <ul class="thumbnails example-sites">
        <li class="span3">
          <a class="thumbnail" href="http://soundready.fm/" target="_blank">
            <img src="assets/img/example-sites/soundready.png" alt="SoundReady.fm">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://kippt.com/" target="_blank">
            <img src="assets/img/example-sites/kippt.png" alt="Kippt">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.gathercontent.com/" target="_blank">
            <img src="assets/img/example-sites/gathercontent.png" alt="Gather Content">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
            <img src="assets/img/example-sites/jshint.png" alt="JS Hint">
          </a>
        </li>
      </ul>
     </div>

  </div>

</div>
<?php include("common/footer.html");?>