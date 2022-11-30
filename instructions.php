<?
include('template.inc.php');
G_header('Instructions');
?>
<div style='background-color: lightgray;'>
<h2>General Overview</h2>
August, 2014 New web site format - template driven PHP files with CSS on CEE server
<p>Questions: Will Schleter (<a href="mailto:wschleter@utk.edu?subject=Question about ACS web site">wschleter@utk.edu</a>)
<h2>System Files</h2>
<h3>/template.inc.php</h3>This is the file that has all the functions - it should be included by all php files. Those files can then call the common functions.
The G_header and G_footer functions create the template shown outside the light gray area on this page. A bare minimum file is:
<pre class=code>
  &lt;?
  include('template.inc.php');
  G_header('Title'); // the title of the page
  ?&gt;
  Content here...
  &lt;? G_footer(); ?&gt;
</pre>
<h3>css/acs.css.php</h3>
<p>
CSS is cascading style sheet. If you define 'styles' here they can be referenced in any page.
For example, if you are consistent and use the &lt;h2&gt; tags for all main headings,
you can change the style for h2 in this file and it will update the entire site. CSS is complicated, but very powerful.

<h2>Tools</h2>
<ul>
  <li><a href='http://komodoide.com/komodo-edit/'>Komodo Edit</a> : a very good free html/php editor.
  It can edit files directly on the server (built in sftp) and it runs on Mac and Windows. It is NOT a visual editor.
  If you already have it, Dreamweaver is also good. Here are the <a href='img/komodo-settings.png'>settings for Komodo</a>.
  <li><a href='https://filezilla-project.org/'>FileZilla</a> : a very good free file transfer program.
  Useful for moving images to/from the web site. There are several other free options available - needs to support SFTP.
  <li>UTK VPN : You need to connect to the VPN if you off campus (or on campus on the non-secure wifi) and want to edit the web site.
  Use the Network Connect option (lower right) from <a href='http://access.utk.edu'>access.utk.edu</a>
  <li>Images - if you upload pictures, you should try to avoid including high resultion pictures on the normal web pages.
  The best option is to resize the images before you upload them. An image width of 800 pixels is about the largest you want to use.
  Try to avoid using the width parameter of the img tag to resize images.
  <li>Scripting : If you have something repetative, it is better to create a script to display it rather than multiple copy/paste.
  See the people page for an example. This approach enforces consistency and makes it MUCH easier to modify the style and format of how it is displayed.
</ul>
<h2>To Do</h2>
<ul>
  <li>content
  <li>logo
  <li>header keywords
  <li>header description
  <li>google analytics? get ID
  <li>bad characters in pubs
</ul>
</div>
<? G_footer(); ?>