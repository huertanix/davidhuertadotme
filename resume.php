<!DOCTYPE html>
<html>
<!--
  davidhuerta.me
  resume
  webmaster david{at}huerta.solutions
  http://www.davidhuerta.me
  copyright (c) <?php echo date("Y"); ?> David Huerta. Distributed under the CDL license: http://supertunaman.com/cdl/
-->
<head>
  <?php include("head.php"); ?>
</head>
<body>
  <?php include("header.php"); ?>
  <div class="contentContainer">
    <?php include("navigation.php"); ?>
    <article id="verbageContainer">
      <div class="descriptionContainer">
        <h2>work experience</h2>
        <h3>Digital Security Trainer, Freedom of the Press Foundation (2017-Now)</h3>
        <ul>
          <li>Led and participating in digital security sessions for over two thousand investigative journalists, documentary filmmakers and more.</li>
          <li>Coordinated with open source project developers on iterative design processes to help make the software we train journalists on easier for them to use.</li>
          <li>Wrote accessibly-written guides and articles on digital security tools, practices and related topics.</li>
        </ul>
        <h3>Full-stack Developer, Undisclosed AI Lab; New York, New York (2015-2016)</h3>
        <ul>
          <li>Created a single-page responsive site for the lab showcasing its team and its visualization work</li>
          <li>Developed JavaScript-based JSON data generators for creating mock financial data to use in testing data visualizations</li>
          <li>Set up a robust server architecture optimized for spikes in high volume traffic (mitigating virality) using NGINX on an AWS EC2 instance</li>
          <li>Visualized twenty years of historical financial publications, memos, newsletters and more into categories determined via machine learning with doc2vec.</li>
          <li>Partnered with a major UK newspaper to visualize a quarter century of publsished articles into 3D space with doc2vec.</li>
        </ul>
        <h3>Developer, Brooklyn Museum; Brooklyn, New York (2011-2015)</h3>
        <ul>
          <li>Coordinated and coded for a partial backend migration of the museum website from a mostly broken XML-based PHP CMS system into ExpressionEngine for its extensibility and solid security track record</li>
          <li>Responded and performed forensics operations in site breaches by scriptkiddies who were using Wordpress rootkits to attack our mostly broken XML-based PHP CMS system</li>
          <li>Hired and organized a team of developers to build an interactive messaging system consisting of a native iPhone app in Objective-C/Cocoa, REST API in Slim PHP, and web-based staff dashboard written mostly in Angular with a minimal PHP foundation</li>
          <li>Designed and architected an intranet web login system using combinations of photos that would be "stickier" in human memory than traditional PIN numbers or passwords</li>
          <li>Created a system for tracking check-ins to artist studios using FuelPHP and Twilio using an SMS shortcode which followed industry standard interaction and acount security practices</li>
          <li>Collaborated in the development of <a href="http://gobrooklynart.org">gobrooklynart.org</a> as a FuelPHP application</li>
          <li>Created a system to calculate the scale of artwork in the museum's online art collection and illustrate it using Brooklyn-centric elements to compare size to</li>
          <li>Modernized brooklynmuseum.org's homepage to display events, news, and information in a compelling and intuitive design using Mootools and modern, cross-browser CSS</li>
          <li>Developed web-based kiosk applications for browsing data for Judy Chicago's <i>The Dinner Party</i>, the centerpiece of the Elizabeth A. Sackler Center for Feminist Art, searching for art information in the LUCE center for American art, as well as a user friendly application to sign up for museum news</li>
          <li>Developed a PHP-based web application for aggregating and displaying data relating to a Lee Mingwei art exhibition using APIs from Flickr, Instagram, Twitter Search, and Twilio with internal moderation support</li>
          <li>Adjusted, tested, and shipped a native iPhone application to Apple and audited for Apple HIG compliance while optimizing our compatibility for iPad and Verizon iPhone users</li>
          <li>Created a replication script in Ruby to sync the video content of separate Youtube account, including a script for automating the process of enabling oauth access from one account to the other</li>
        </ul>
        <h3>Programmer-Analyst, U-Haul; Phoenix, Arizona - (2008-2011)</h3>
        <ul>
          <li>Enhanced the performance and scalability of an enterprise-level web-based CRM system used by over 9000 users across the US and Canada in English and French</li>
          <li>Developed a centralized ASP.NET-based email campaign management system and editor for use in international marketing promotions in compliance with ethical email practices and guidelines</li>
        </ul>
        <h3>.NET Developer, Realty DataTrust; Scottsdale, Arizona - (2008-2008)</h3>
        <ul>
          <li>Interfaced with company leaders and support staff to develop specific and unambiguous business requirements for improving existing applications</li>
          <li>Audited and corrected security vulnerabilities in a user-entry-heavy application to protect it against SQL Injections and other attack vectors</li>
          <li>Coordinated with support staff to investigate and solve software problems in existing applications in a fast-paced startup environment</li>
        </ul>
        <h3>Computer Analyst, Salt River Project; Tempe, Arizona - (2005-2008)</h3>
        <ul>
          <li>Developed and maintained station management applications for the Arizona Flood Warning System in a .NET environment</li>
          <li>Modified and customized open-source PHP groupware applications to meet company-specific requirements</li>
          <li>Rewrote a legacy hydrology application written in FORTRAN to a modern web application in ASP.NET/C#</li>
          <li>Maintained various proprietary and home-brewed applications (in C#, VB.NET, or Perl) and systems used in the aggregation of hydrology and meteorological data from a number of heterogeneous systems and sources both at SRP and off-site</li>
          <li>Configured and wrote automation scripts in Bash and Python for Red Hat AS Servers used internally and in the Arizona Flood Warning System</li>
        </ul>
        <h3>Tier 1 Technician, IPower; Phoenix, Arizona - (2004-2005)</h3>
        <ul>
          <li>Provided phone-based technical assistance to an international client&egrave;le</li>
          <li>Solved and assisted website configuration issues in a BAMP environment (BSD, Apache, MySQL, PHP)</li>
        </ul>
        <h2>tl;dr</h2>
        <p>I've been creating things from the web since 1999, when I predicted that the future web would be accessed in mobile devices <strike>and written in WML decks</strike>.  If you want to put stuff on the web, I have skills and experience to make it happen.</p>
      </div>
    </article>
    <script type="text/javascript">
      setIosOverlay('verbageContainer');
    </script>
    <?php include("props.php"); ?>
  </div>
  <?php include("footer.php"); ?>
  <?php include("woopra.php"); ?>
</body>
</html>
