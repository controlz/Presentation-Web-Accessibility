#Web Accessibility

* What it means and why it matters.
* Making websites compliant with guidelines and laws.
* Techniques and tools for developers.

##Web Accessibility

Is about making apps and websites that are inclusive to all users regardless of web browsing experience or their physical or mental capabilities

##Computer Use Challenges

* Reading Difficulties
* Difficulty Hearing
* Difficulty Seeing / Colour Blindness
* Issues with Dexterity
* Reduced Motor Skills
* Declined Cognitive Abilities

##Assistive Technologies

Hardware and Software to aid people's computer use

* Screen readers
	* JAWS (most popular)
    * Thunder
    * ORCA (linux)
    * Chrome (Chrome Extension)
* Voice recognication programs
* Braille displays
* Screen magnifiers
* Browser options/confirations
* Browser extensions

##Why Accessibility Matters

* So many of us with disabilities
* Social Inclusion - "no gets left behind"
* Equal access to information and equal opportunity
* It's the Law! (depending on jurisdiction and company size)

Additional considerations:

* Search Engine Optimization
* Accessibility and usability go hand in hand
* Entire world is moving to an accessible web, this decade!

# Canadian Accessibility Standards

* Approved Common Look and Feel (CLF) 1.0 standards in 2000
    mirrored Web Content Accessibility Guidelines (WCAG) 1.0
*  2011, CLF 2.0 was replaced with the Standard on Web Accessibility
    * Based on WCAG 2.0
    * Part of a group of official Web Standards for the Government of Canada
        Accessibility, Usability, Operability, Optimization for Mobile

##Ontario Accessibility Laws

Ontario has been early leader in accessibility

* Enacted Accessibility for Ontarians with Disabilities (AODA)
* Making sites compliant with WCAG 2.0 Level AA:
	* Government and non-profit, existing sites by 2012
    * Government and non-profit, all sites and content by 2016
    * Large organizations, new sites and content by 2014
    * All public websites and content by 2021

##Legal Enforcement?

Failure to comply to AODA could result in fines of:

* $50,000 per day for directors and officers
* up to $100,000 per day for corporations.

##Web Accessible Initiatives

* AODA (Accessibility for Ontarians with Disabilities Act)
* ADA (Americans with Disabilities Act)
* Section 508: eliminate barriers in information technology
* PDF/UA: Universal Accessibility standards for documents
* ...plus more from all over the world

##Web Content Accessibility Guidelines (WCAG)

WCAG 2.0 is an internationally accepted standard for web accessibility developed by the World Wide Web Consortium (W3C), an international team of experts 

* pronounced "wick-ag"
* provides guidelines for organizations to follow to make their websites more accessible
* each guideline has testable success criteria
* classified into 3 levels of accessibility: A, AA and AAA
* 12 guides organized into 4 principles

##Principles of Accessibility

* Perceivable
* Operable
* Understandable
* Robust

###Perceivable

Information and user interface must be presented to users in ways they can perceive.

* Text Alternatives
	* Provide alternatives for non-text content.

* Time-based Media
	* Provide alternatives for time-based media (audio/video).

* Adaptable
	* Create content that can be presented in different ways without losing information.

* Distinguishable
	* Make it easier for users to see and hear content.

### Operable

Users must be able to use the interface. It cannot require interaction that a user cannot perform.

* Keyboard Accessible
	* Make all functionality available from a keyboard.

* Enough Time
	* Provide users enough time to read and use content.

* Seizures
	* Do not design content in a way that is known to cause seizures.

* Navigable
	* Provide ways to help users navigate, find content, and determine where they are.

### Understandable

Users must be able to understand the information as well as how to use the interface

* Readable
	* Make text content readable and understandable.

* Predictable
	* Make Web pages appear and operate in predictable ways.

* Input Assistance
	* Help users avoid and correct mistakes.

###Robust

Content must be interpreted reliably by a wide variety of user agents

* Compatible
	* Maximize compatibility with current and future user agents, including assistive technologies.

##Making Websites Accessible

* Provide alternate text and formats
* Use headings correctly
* Use distinct and meaningful titles
* Simply navigation and consider keyboard only users, use skip navigation links
* Make all functionality available via keyboard, or skippable
* Make all form inputs have an associated label
* Have visible indication of focus
* Include captions audio/video clips

* Use strong contrast between text and background
* Avoid the use of colour indicators
* Avoid time limits when asking users to provide a response or information
* Avoid blinking images auto play content
* Avoid CAPTCHAs
* Provide data tables for graphs

##Accessibility Techniques

* Techniques for WCAG 2.0 provided by W3C
* Web Accessibility Initiative – Accessible Rich Internet Application (WAI-ARIA or just ARIA)
	* a set of attributes to help enhance the semantics of a web site or web application to help assistive technologies
    * ARIA Landmarks (role="navigation") gives us information about the purpose of an element
    * ARIA attributes (aria-*) gives information about the state of an element
    * Techniques for WAI-ARIA

Provide alternative text to describe images:

```
<img src="logo.png" alt="Ekomodi Enterprises: Vehicles your way." >
```

Provide alternative text to describe photos:

```
<img src="lottery_winners.gif" alt="Husband and wife jumping for joy holding a winning lottery ticket" >
```

For purely decorative images use empty alt:

```
<img src="snowflake.png" alt="" >
```

Highlight links when in focus:

```
[IMAGE: "Example of Focus"]

a:focus { 
    border: 1px solid #ffa500; 
}
```

Adding skip to links:

```
<div class="skip">
    <a href="#navigation">Skip to navigation</a> |
    <a href="#main-content">Skip to main content</a>
</div>

<nav id="navigation">
    <ul>
    ...
    </ul>
</nav>

<a name="main-content"></a>
<p>Main content</p>
```

Using ARIA Landmark Roles:

```
<header role="banner">
  <h1>Title of your document</h1>
  <nav role="navigation">
    <ul>
        <li><a href="#">Link 1</a></li>
        ...
    </ul>
  </nav>
</header>

<main role="main">
  <h2>Main Content</h2>
  <p>Juicy content</p>
</main>

<aside role="complementary">
  <h2>Sidebar</h2>
  <p>Complementary content</p>
</aside>

<footer role="contentinfo">
  <h2>Footer</h2>
  <p>Information about the document</p>
</footer>
```

##Testing Web Accessibility

When testing your websites:

* Try navigating without a mouse
* Test with CSS and JavaScript disabled
* Use assistive technologies or software that mimics them:
    * Browser extensions/plugins
    * Screen readers emulators, Chrome Vox
* Use online tools like validators or analyzers:
    * AChecker
    * WAVE (Web Accessibility Evaluation Tool
    * SortSite - Accessibility Checker and Validator

##Examples of Accessible Sites

Good sites:

* [Center for Disease Control Website](http://www.cdc.gov)
* [U.S Government's Offical Web Portal](http://www,usa.gov)
* [Government of Canada Website](http://www.canada.ca)

Thank You
