<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Web Accessibility Presentation | Making Websites Accessible</title>

  <meta name="description" content="A jQuery library for modern HTML presentations">
  <meta name="author" content="Michael Mottola">
  <meta name="viewport" content="width=1024, user-scalable=no">

  <!-- Core and extension CSS files -->
  <link rel="stylesheet" media="screen" href="core/deck.core.css">
  <link rel="stylesheet" media="screen" href="extensions/goto/deck.goto.css">
  <link rel="stylesheet" media="screen" href="extensions/menu/deck.menu.css">
  <link rel="stylesheet" media="screen" href="extensions/navigation/deck.navigation.css">
  <link rel="stylesheet" media="screen" href="extensions/status/deck.status.css">
  <link rel="stylesheet" media="screen" href="extensions/scale/deck.scale.css">
  <link rel="stylesheet" media="screen" href="extensions/notes/deck.notes.css">

  <!-- Style theme. More available in /themes/style/ or create your own. -->
  <link rel="stylesheet" media="screen" href="themes/style/swiss.css">
  <link rel="stylesheet" media="screen" href="custom_styles.css">

  <!-- Transition theme. More available in /themes/transition/ or create your own. -->
  <link rel="stylesheet" media="screen" href="themes/transition/horizontal-slide.css">

  <!-- Basic black and white print styles -->
  <link rel="stylesheet" media="print" href="core/print.css">

  <script src="modernizr.custom.js"></script>
</head>

<body>
    <div class="deck-container">

        <!-- Begin slides -->
        <section class="slide" id="title-slide">
            <h1>Online Accessibility</h1>
            <img src="images/w3c.jpg" alt="" />
            <ul>
                <li>What it means and why it matters.</li>
                <li>Making websites complaint with guidelines and laws.</li>
                <li>Techniques & tools for developers.</li>
            </ul>
        </section>

        <!--
        #
        #
        # Accessibility Overview
        #
        #
        -->
        <section class="slide">
            <h2>Web Accessibility</h2>
            <img src="images/accessibility.gif" alt="" />
            <blockquote class="slide">
                <p class="slides-within">
                    <span class="slide">Is about making apps and websites that are inclusive to all users</span>
                    <span class="slide">regardless of web browsing experience</span>
                    <span class="slide">or their physical or mental capabilities</span>
                </p>
            </blockquote>
        </section>

        <section class="slide">
            <h2>Challenges Affecting Computer Use</h2>

            <div class="slide">
                <ul style="display: inline-block; margin-left: 150px;">
                    <li>Reading Difficulties</li>
                    <li>Difficulty Hearing</li>
                    <li>Difficulty Seeing / Colour Blindness</li>
                    <li>Issues with Dexterity</li>
                    <li>Reduced Motor Skills</li>
                    <li>Declined Cognitive Abilities</li>
                </ul>

                <img src="images/accessibility.png" alt="" style="display: inline-block; margin-left: 100px; height: 300px;" />
            </div>
        </section>

        <section class="slide">
            <h2>Computer Use</h2>

            <ul>
                <li>Screen readers</li>
                <li>Braille displays</li>
                <li>Screen magnifiers</li>
                <li>Browsing with stylesheets disabled</li>
                <li>Adjusting contrast levels</li>
            </ul>
        </section>

        <section class="slide">
            <h2>Why Accessibility Matters</h2>
            <div class="slide">
                <ul>
                    <li>So many of us with disabilities</li>
                    <li>Social Inclusion, no gets left behind</li>
                    <li>Equal access to information and equal opportunity</li>
                    <li>Depending on location and company size, it's the Law!</li>
                </ul>

                <ul class="slide">
                    <li>Entire world is moving to an accessible web</li>
                    <li>Sites become more usable for everyone</li>
                </ul>
            </div>
        </section>

        <section class="slide">
            <h2>Canadian Accessibility Standards</h2>

            <ul>
                <li>Approved Common Look and Feel (CLF) 1.0 standards in 2000</li>
                <li>CLF 1.0 mirrored Web Content Accessibility Guidelines (WCAG) 1.0</li>
                <li>2011, CLF 2.0 was replaced with the Standard on Web Accessibility, based on WCAG 2.0.</li>
            </ul>
        </section>

        <section class="slide">
            <h2>Ontario Accessibility Laws</h2>

            <blockquote>Ontario has been early leader in accessibility</blockquote>

            <ul>
                <li>Enacted Accessibility for Ontarians with Disabilities (AODA)</li>
                <li>
                    Making sites compliant with WCAG 2.0 Level AA:
                    <ul>
                        <li>Government sites by 2012</li>
                        <li>Large public sector organizations, by 2013</li>
                        <li>Small public sector organizations, by 2014</li>
                        <li>Large organizations, existing sites by 2014</li>
                        <li>Small organizations, existing sites by 2015</li>
                        <li>All public websites and content by 2021</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="slide">
            <h2>Legal Enforcement</h2>

            <p>Failure to comply to AODA could result in fines of $50,000 per day for directors and officers and up to $100,000 per day for corporations.</p>
        </section>

        <section class="slide">
            <h2>Web Accessible Initiatives</h2>
            <ul>
                <li>AODA (Accessibility for Ontarians with Disabilities Act)</li>
                <li>ADA (Americans with Disabilities Act)</li>
                <li>Section 508: eliminate barriers in information technology</li>
                <li>PDF/UA: Universal Accessibility standards for documents</li>
                <li>...plus more from all over the world</li>
            </ul>
        </section>

        <section class="slide">
            <h2>Web Content Accessibility Guidelines (WCAG)</h2>

            <blockquote>WCAG 2.0 is an internationally accepted standard for web accessibility developed by the World Wide
                Web Consortium (W3C), an international team of experts
            </blockquote>

            <ul class="slide">
                <li>pronounced "wick-ag"</li>
                <li>provides guidelines for organizations to follow to make their websites more accessible</li>
                <li>each guideline has testable success criteria</li>
                <li>classified into 3 levels of accessibility: A, AA and AAA</li>
                <li>12 guides organized into 4 principles</li>
            </ul>

        </section>

        <section class="slide">
            <h2>Principles of Accessibility</h2>
            <ol>
                <li>Perceivable</li>
                <li>Operable</li>
                <li>Understandable</li>
                <li>Robust</li>
            </ol>
        </section>

        <section class="slide">
            <h3>Perceivable</h3>

            <blockquote>Information and user interface must be presented to users in ways they can perceive.</blockquote>

            <div class="slide">
                <ul>
                    <li><p><strong>Text Alternatives</strong><br />Provide alternatives for non-text content.<br/></p></li>
                    <li><p><strong>Time-based Media</strong><br />Provide alternatives for time-based media (audio/video).</p></li>
                    <li><p><strong>Adaptable</strong><br />Create content that can be presented in different ways without losing information.</p></li>
                    <li><p><strong>Distinguishable</strong><br />Make it easier for users to see and hear content.</p></li>
                </ul>
            </div>
        </section>

        <section class="slide">
            <h3>Operable</h3>

            <blockquote>Users must be able to use the interface. It cannot require interaction that a user cannot perform.</blockquote>

            <div class="slide">
                <ul>
                    <li><p><strong>Keyboard Accessible</strong><br />Make all functionality available from a keyboard.</p></li>
                    <li><p><strong>Enough Time</strong><br />Provide users enough time to read and use content.</p></li>
                    <li><p><strong>Seizures</strong><br />Do not design content in a way that is known to cause seizures.</p></li>
                    <li><p><strong>Navigable</strong><br />Provide ways to help users navigate, find content, and determine where they are.</p></li>
                </ul>
            </div>
        </section>

        <section class="slide">
            <h3>Understandable</h3>

            <blockquote>Users must be able to understand the information as well as how to use the interface</blockquote>

            <div class="slide">
                <ul>
                    <li><p><strong>Readable</strong><br />Make text content readable and understandable. </p></li>
                    <li><p><strong>Predictable</strong><br />Make Web pages appear and operate in predictable ways.</p></li>
                    <li><p><strong>Input Assistance</strong><br />Help users avoid and correct mistakes.</p></li>
                </ul>
            </div>
        </section>

        <section class="slide">
            <h3>Robust</h3>

            <blockquote>Content must be interpreted reliably by a wide variety of user agents</blockquote>

            <div class="slide">
                <ul>
                    <li><p><strong>Compatible</strong><br />Maximize compatibility with current and future user agents, including assistive technologies. </p></li>
                </ul>
            </div>
        </section>

        <section class="slide">
            <h2>Implementing Standards</h2>

            <p>Provide alternative text to describe images</p>
            <pre><code><?php echo htmlentities('<img src="logo.png" alt="Ekomodi Enterprises Inc. Logo" >'); ?></code></pre>

            <p>Provide alternative text to describe photos</p>
            <pre><code><?php echo htmlentities('<img src="lottery_winners.gif" alt="Husband and wife jumping for joy holding a winning lottery ticket" >'); ?></code></pre>

            <p>For purely decorative images use empty alt:</p>
            <pre><code><?php echo htmlentities('<img src="snowflake.png" alt="" >'); ?></code></pre>

        </section>

        <section class="slide">
            <p>Keep headers in order</p>
            <pre><code><?php echo htmlentities('<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h4>Heading 4</h4>
'); ?></code></pre>
        </section>

        <section class="slide">
            <h3>ARIA Landmarks</h3>


            <pre><code><?php echo htmlentities('
<header role="header">
    asd
</header>
            '); ?></code></pre>
        </section>

        <section class="slide">
            <h2>Testing Web Accessibility</h2>

            <p>Tools to scan websites:</p>
            <ul>
                <li><a href="http://achecker.ca/checker/index.php" target="_blank" aria-haspopup="true">http://achecker.ca/checker/index.php</a></li>
                <li><a href="http://wave.webaim.org/" target="_blank" aria-haspopup="true">WAVE (Web Accessibility Evaluation Tool</a></li>
            </ul>

            <p>Screen reader emulators:</p>
        </section>

        <section class="slide">
            <h2>Common Mistakes</h2>
            <ul>
                <li>Developers not including alternate text</li>
                <li>Colour Contrast</li>
                <li>Requiring a mouse to navigate</li>
                <li>Lack of understanding</li>
            </ul>
        </section>

        <section class="slide">
            <h2>Other Tools</h2>

            <ul>
                <li>Web Experience Toolkit (WET), available at https://github.com/wet-boew/wet-boew</li>
            </ul>
        </section>

        <section class="slide">
          <h1>Thank You</h1>
        </section>

        <!-- deck.navigation snippet -->
        <div aria-role="navigation">
          <a href="#" class="deck-prev-link" title="Previous">&#8592;</a>
          <a href="#" class="deck-next-link" title="Next">&#8594;</a>
        </div>

        <!-- deck.status snippet -->
        <p class="deck-status" aria-role="status">
          <span class="deck-status-current"></span>
          /
          <span class="deck-status-total"></span>
        </p>

        <!-- deck.goto snippet -->
        <form action="." method="get" class="goto-form">
          <label for="goto-slide">Go to slide:</label>
          <input type="text" name="slidenum" id="goto-slide" list="goto-datalist">
          <datalist id="goto-datalist"></datalist>
          <input type="submit" value="Go">
        </form>
      </div>

    <script src="jquery.min.js"></script>

    <!-- Deck Core and extensions -->
    <script src="core/deck.core.js"></script>
    <script src="extensions/menu/deck.menu.js"></script>
    <script src="extensions/goto/deck.goto.js"></script>
    <script src="extensions/status/deck.status.js"></script>
    <script src="extensions/navigation/deck.navigation.js"></script>
    <script src="extensions/scale/deck.scale.js"></script>
    <script src="extensions/notes/deck.notes.js"></script>
    <script src="extensions/clone/deck.clone.js"></script>

    <!-- Initialize the deck -->
    <script>
    $(function() {
      $.deck('.slide');
    });
    </script>

</body>
</html>