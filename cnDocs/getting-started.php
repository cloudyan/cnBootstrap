<?php $page = "getting" ?>
<?php $title="Getting Started"?>
<?php $description = "" ?>
<?php include("./templates/header.php"); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1>Getting started</h1>
    <p class="lead">Overview of the project, its contents, and how to get started with a simple template.</p>
  </div>
</header>


<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
  <div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav">
      <li><a href="#download-bootstrap"><i class="icon-chevron-right"></i> Download</a></li>
      <li><a href="#file-structure"><i class="icon-chevron-right"></i> File structure</a></li>
      <li><a href="#contents"><i class="icon-chevron-right"></i> What's included</a></li>
      <li><a href="#html-template"><i class="icon-chevron-right"></i> HTML template</a></li>
      <li><a href="#examples"><i class="icon-chevron-right"></i> Examples</a></li>
      <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
    </ul>
  </div>
  <div class="span9">



    <!-- Download
    ================================================== -->
    <section id="download-bootstrap">
      <div class="page-header">
        <h1>1. Download</h1>
      </div>
      <p class="lead">Before downloading, be sure to have a code editor (we recommend <a href="http://sublimetext.com/2">Sublime Text 2</a>) and some working knowledge of HTML and CSS. We won't walk through the source files here, but they are available for download. We'll focus on getting started with the compiled Bootstrap files.</p>

      <div class="row-fluid">
        <div class="span6">
          <h2>Download compiled</h2>
          <p><strong>Fastest way to get started:</strong> get the compiled and minified versions of our CSS, JS, and images. No docs or original source files.</p>
          <p><a class="btn btn-large btn-primary" href="assets/bootstrap.zip" >Download Bootstrap</a></p>
        </div>
        <div class="span6">
          <h2>Download source</h2>
          <p>Get the original files for all CSS and JavaScript, along with a local copy of the docs by downloading the latest version directly from GitHub.</p>
          <p><a class="btn btn-large" href="https://github.com/twitter/bootstrap/zipball/master" >Download Bootstrap source</a></p>
        </div>
      </div>
    </section>



    <!-- File structure
    ================================================== -->
    <section id="file-structure">
      <div class="page-header">
        <h1>2. File structure</h1>
      </div>
      <p class="lead">Within the download you'll find the following file structure and contents, logically grouping common assets and providing both compiled and minified variations.</p>
      <p>Once downloaded, unzip the compressed folder to see the structure of (the compiled) Bootstrap. You'll see something like this:</p>
<pre class="prettyprint">
bootstrap/
├── css/
│   ├── bootstrap.css
│   ├── bootstrap.min.css
├── js/
│   ├── bootstrap.js
│   ├── bootstrap.min.js
├── img/
│   ├── glyphicons-halflings.png
│   ├── glyphicons-halflings-white.png
└── README.md
</pre>
      <p>This is the most basic form of Bootstrap: compiled files for quick drop-in usage in nearly any web project. We provide compiled CSS and JS (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>). The image files are compressed using <a href="http://imageoptim.com/">ImageOptim</a>, a Mac app for compressing PNGs.</p>
      <p>Please note that all JavaScript plugins require jQuery to be included.</p>
	  <h3>写在前面的话：</h3>
      <p>以上是bootstrap的结构，但是也许你不想一下子全部引用进来，比如bootstrap.css，那怎么办呢，所以你要去细分，让这个NB的项目具有更强的组合性，Bootstrap Customize做了这件事，但是具体如何去用该如何避免一些冲突，这里Bootstrap缺少了详尽的注释，类似于开发文档一样的，就像我之前整理的一份css reset文档，详尽描述了各种reset元素的取舍（以及为什么），这样一来就不仅仅是使用这么一个NB项目，而是知道这个项目为什么这么做，从底层的一个小小的代码就知道为什么，那对前端开发者来说绝对是福音啊！并且也要让bootstrap兼容IE6才行啊，进行细分再研究其中的相关取舍原因，这第一件事就是结构划分，下面看看规划样本（这里面甚多都是最基础的文件命名，为了避免引用中的冲突，可在文件前添加自定义前缀（ori-）以示同一系列结构文件，同时区别于其他文件结构）</p>
      <p>这不是新作一个项目，而是研究Bootstrap为何如此设计，并引进新的技术到此中来！（也不你也想做整理一整套的网站架构所需的模块-html/css/js等一整套构造，便于管理和维护的，现在的bootstrap就是这么一套系统，现在我们做的就是去研究它使用它并完善它）</p>
      <p>下面即是基于个人多方总结后的构想方案:</p>
<pre class="prettyprint">
Oricode/
├── css/
│   ├── reset.css     ├── core.css
│   ├── common.css    │
│   ├── pro-common.css│
│   ├── pro-custom.css
├── js/
│   ├── common.js
│   ├── pro-custom.js
├── img/
│   ├── combo.png
│   ├── pro-png24.png
└── README.md
</pre>
	  <p>事实上在使用bootstrap这个框架的时候，仍然遇到不少阻碍，有时和现有网站结构极为不同，导致难以应用。现在我正在个人项目中极力推广这宗架构的使用，是Oricode的方式，这没有bootstrap勾画的更全面，但是结构更明晰机动性也更强了，全以项目为单位来构建，辅以项目名称前缀！通过在项目中的使用，由点及面的推广和使用bootstrap！</p>
      <p>一个好的前端整理方案就是统一样式和自定义样式相分离的，经过和N多的系统相互杂糅，也不会出问题或者很小的问题干扰，这也是 <code>Oricode</code> 的初衷，有了经得起考验的基础代码，上层建筑才更牢固，开发人员也会说：“下面的代码写的那么精简，考虑那么全面，我怎么写也不能随便乱组合代码啊！”由于积极思想的作用，全局规划就起作用了！<code>Oricode</code> 就是为了做这事儿的！</p>
    </section>



    <!-- Contents
    ================================================== -->
    <section id="contents">
      <div class="page-header">
        <h1>3. What's included</h1>
      </div>
      <p class="lead">Bootstrap comes equipped with HTML, CSS, and JS for all sorts of things, but they can be summarized with a handful of categories visible at the top of the <a href="http://getbootstrap.com">Bootstrap documentation</a>.</p>

      <h2>Docs sections</h2>
      <h4><a href="./scaffolding.php">Scaffolding</a></h4>
      <p>Global styles for the body to reset type and background, link styles, grid system, and two simple layouts.</p>
      <h4><a href="./base-css.php">Base CSS</a></h4>
      <p>Styles for common HTML elements like typography, code, tables, forms, and buttons. Also includes <a href="http://glyphicons.com">Glyphicons</a>, a great little icon set.</p>
      <h4><a href="./components.php">Components</a></h4>
      <p>Basic styles for common interface components like tabs and pills, navbar, alerts, page headers, and more.</p>
      <h4><a href="./javascript.php">JavaScript plugins</a></h4>
      <p>Similar to Components, these JavaScript plugins are interactive components for things like tooltips, popovers, modals, and more.</p>

      <h2>List of components</h2>
      <p>Together, the <strong>Components</strong> and <strong>JavaScript plugins</strong> sections provide the following interface elements:</p>
      <ul>
        <li>Button groups</li>
        <li>Button dropdowns</li>
        <li>Navigational tabs, pills, and lists</li>
        <li>Navbar</li>
        <li>Labels</li>
        <li>Badges</li>
        <li>Page headers and hero unit</li>
        <li>Thumbnails</li>
        <li>Alerts</li>
        <li>Progress bars</li>
        <li>Modals</li>
        <li>Dropdowns</li>
        <li>Tooltips</li>
        <li>Popovers</li>
        <li>Accordion</li>
        <li>Carousel</li>
        <li>Typeahead</li>
      </ul>
      <p>In future guides, we may walk through these components individually in more detail. Until then, look for each of these in the documentation for information on how to utilize and customize them.</p>
    </section>



    <!-- HTML template
    ================================================== -->
    <section id="html-template">
      <div class="page-header">
        <h1>4. Basic HTML template</h1>
      </div>
      <p class="lead">With a brief intro into the contents out of the way, we can focus on putting Bootstrap to use. To do that, we'll utilize a basic HTML template that includes everything we mentioned in the <a href="#file-structure">File structure</a>.</p>
      <p>Now, here's a look at a <strong>typical HTML file</strong>:</p>
<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, world!&lt;/h1&gt;
&lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
      <p>To make this <strong>a Bootstrapped template</strong>, just include the appropriate CSS and JS files:</p>
<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Bootstrap 101 Template&lt;/title&gt;
&lt;!-- Bootstrap --&gt;
&lt;link href="css/bootstrap.min.css" rel="stylesheet" media="screen"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, world!&lt;/h1&gt;
&lt;script src="http://code.jquery.com/jquery-latest.js"&gt;&lt;/script&gt;
&lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
      <p><strong>And you're set!</strong> With those two files added, you can begin to develop any site or application with Bootstrap.</p>
    </section>



    <!-- Examples
    ================================================== -->
    <section id="examples">
      <div class="page-header">
        <h1>5. Examples</h1>
      </div>
      <p class="lead">Move beyond the base template with a few example layouts. We encourage folks to iterate on these examples and not simply use them as an end result.</p>
      <ul class="thumbnails bootstrap-examples">
        <li class="span3">
          <a class="thumbnail" href="examples/starter-template.html">
            <img src="assets/img/examples/bootstrap-example-starter.jpg" alt="">
          </a>
          <h4>Starter template</h4>
          <p>A barebones HTML document with all the Bootstrap CSS and JavaScript included.</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/hero.html">
            <img src="assets/img/examples/bootstrap-example-hero.jpg" alt="">
          </a>
          <h4>Basic marketing site</h4>
          <p>Featuring a hero unit for a primary message and three supporting elements.</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/fluid.html">
            <img src="assets/img/examples/bootstrap-example-fluid.jpg" alt="">
          </a>
          <h4>Fluid layout</h4>
          <p>Uses our new responsive, fluid grid system to create a seamless liquid layout.</p>
        </li>

        <li class="span3">
          <a class="thumbnail" href="examples/marketing-narrow.html">
            <img src="assets/img/examples/bootstrap-example-marketing-narrow.png" alt="">
          </a>
          <h4>Narrow marketing</h4>
          <p>Slim, lightweight marketing template for small projects or teams.</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/signin.html">
            <img src="assets/img/examples/bootstrap-example-signin.png" alt="">
          </a>
          <h4>Sign in</h4>
          <p>Barebones sign in form with custom, larger form controls and a flexible layout.</p>
        </li>
        <li class="span3">
          <a class="thumbnail" href="examples/sticky-footer.html">
            <img src="assets/img/examples/bootstrap-example-sticky-footer.png" alt="">
          </a>
          <h4>Sticky footer</h4>
          <p>Pin a fixed-height footer to the bottom of the user's viewport.</p>
        </li>

        <li class="span3">
          <a class="thumbnail" href="examples/carousel.html">
            <img src="assets/img/examples/bootstrap-example-carousel.png" alt="">
          </a>
          <h4>Carousel jumbotron</h4>
          <p>A more interactive riff on the basic marketing site featuring a prominent carousel.</p>
        </li>
      </ul>
    </section>




    <!-- Next
    ================================================== -->
    <section id="what-next">
      <div class="page-header">
        <h1>What next?</h1>
      </div>
      <p class="lead">Head to the docs for information, examples, and code snippets, or take the next leap and customize Bootstrap for any upcoming project.</p>
      <a class="btn btn-large btn-primary" href="./scaffolding.php" >Visit the Bootstrap docs</a>
      <a class="btn btn-large" href="./customize.php" style="margin-left: 5px;" >Customize Bootstrap</a>
    </section>




  </div>
</div>

</div>



<?php include("common/footer.html");?>