<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1>PageManager is an opensource html & php framework that helps you to develop your web projects.</h1>
                        <a href="#features" class="btn btn-outline btn-xl page-scroll">See features</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="device-container">
                    <div class="device-mockup macbook_2016 portrait white">
                        <div class="device">
                            <div class="screen">
                                <i class="fa fa-code"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section id="features" class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Discover PageManager features</h2>
                    <p class="text-muted">Check out what you can do with PageManager framework!</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-rocket text-primary"></i>
                                <h3>Fast & Easy</h3>
                                <p class="text-muted">Add content directly in to your projet folder and it's ready!</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-docs text-primary"></i>
                                <h3>Split UI & Application Logic</h3>
                                <p class="text-muted">Separate UI form application logic in two files</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-settings text-primary"></i>
                                <h3>Page Parameters</h3>
                                <p class="text-muted">Easily set  page name & ressources</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-grid text-primary"></i>
                                <h3>Use Blocks</h3>
                                <p class="text-muted">Set up  blocks : navbar, header, footer...</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-wrench text-primary"></i>
                                <h3>Set Up Config</h3>
                                <p class="text-muted">Easily set  local & global configs : base url or Sql access</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="fa fa-terminal text-primary"></i>
                                <h3>Customised Logger</h3>
                                <p class="text-muted">Separate PHP logs form your logs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-present text-primary"></i>
                                <h3>Free to Use</h3>
                                <p class="text-muted">PageManager is free to download and use for any project!</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <i class="icon-lock-open text-primary"></i>
                                <h3>Open Source</h3>
                                <p class="text-muted">Since this framework is MIT licensed, you can use it for commercial purpose!</p>
                            </div>
                        </div>
                    </div>
                    <p class="centered"><a href="#download" class="btn btn-normal btn-xl page-scroll">Download</a></p>

                </div>
            </div>
        </div>
</section>

<section class="cta" id="download">
    <div class="cta-content">
        <div class="container">
            <h2>Let's Get Started!</h2>
            <a href="#github" class="btn btn-outline btn-xl page-scroll">Get the latest version</a>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<section id="getting" class="getting features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Getting Started</h2>
                    <p class="text-muted">Install & use PageManager easily</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <p>First, <a href="">download the latest version</a> of PageManager, unzip the compressed file and place the content in your project folder, you will get something like that:
                <figure class="highlight"><pre><code class="language-bash" data-lang="bash">PageManager/
  ├── assets/
  │   ├── css/
  │   ├── fonts/
  │   ├── img/
  │   ├── js/
  │   └── plugins/
  │       └──  jquery/
  │           ├── jquery.js
  │           └──  jquery.min.js
  ├── class/
  │   └──  Page.php
  ├── configs/
  │   ├── config.php
  │   └──  local.php
  ├── pages/
  │   ├── html/
  │   │   ├── home.php
  │   │   └──  404.php
  │   └──  php/
  │       ├── home.php
  │       └──  404.php
  ├── require/
  │   ├── communFunc.php
  │   ├── footer.php
  │   ├── header.php
  │   └── html.php
  ├── tmp/
  │   └──  trace.log
  ├── .htaccess
  └── index.php
              </code></pre></figure>
              <hr>
              <ul class="list-unstyled">
                <li><code>assets</code> folder contains all your css, fonts, images, js and plugins files</li>
                <li><code>class</code> folder contains all your php class files</li>
                <li>
                  <code>config</code> folder contains two files:
                  <ul class="ul-unstyled">
                    <li><code>config.php</code> file contains your server default value : SQL access, base url...</li>
                    <li><code>local.php</code> file contains your local value to modify default SQL access, base url, etc. This file may be added to .gitignore</li>
                  </ul>
                </li>
                <li>
                  <code>pages</code> folder contains two folders:
                  <ul class="ul-unstyled">
                    <li><i class="fa fa-warning"></i> All pages should have the same name in <code>html</code> and <code>php</code> folder</li>
                    <li><code>html</code> folder contains ui files</li>
                    <li><code>php</code> folder contains application logic files</li>
                  </ul>
                </li>
                <li>
                  <code>require</code> folder contains four files:
                  <ul class="ul-unstyled">
                    <li><code>communFunc.php</code> file contains common php functions : <code>logger()</CODE></li>
                    <li><code>footer.php</code> file contains footer</li>
                    <li><code>header.php</code> file contains header(navbar)</li>
                    <li><code>html.php</code> file contains html template used on all page</li>
                  </ul>
                </li>
                <li>
                  <code>tmp</code> folder contains one file:
                  <ul class="ul-unstyled">
                    <li><code>trace.log</code> file contains logs generated by logger() function</li>
                  </ul>
                </li>
                <li><code>.htaccess</code> file contains rewrite url rules and others</li>
                <li><code>index.php</code> file contains the brain of PageManager</li>
              </ul>

              <p class="centered"><a href="<?echo BaseUrl?>/docs" class="btn btn-normal btn-xl">Go to the documentation</a></p>

            </div>
        </div>
</section>

<section id="github" class="github bg-primary">
    <div class="container">
        <h2>Made with <i class="fa fa-heart"></i> on</h2>
        <ul class="list-inline list-social">
            <li class="social-twitter">
                <a href="https://github.com/zarque/PageManager" target="_blank"><i class="fa fa-github"></i></a>
            </li>
        </ul>
    </div>
</section>
