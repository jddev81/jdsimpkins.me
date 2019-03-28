<p>The client for this project owns several businesses. He wanted one spot to gather and organize potential employees' applications. All of the businesses are on the same property so he set up a station where everyone will sit and apply.</p>

<p>The application process is broken into several sections, just like on a paper application. (Personal info, employment history, references, etc.) Once a section is finished, they can continue to the next section or choose to finish it later. Each application is tied to an email address so they an come back and finish at any time.</p>


<h4>Challenges Faced</h4>

<p>This is web based but he didn't want to allow access from anywhere. The main thing was he wanted them to be at one of these computers, set up solely to take applications so I restricted access to the app based on IP Address.</p>

<p>There was one problem though. He doesn't have a static IP Address. The solution I came up with was this: We created a shortcut on the desktop that will open up the browser and they can start their application but instead of linking that to the home page, I linked it to a script. The URL has a get variable in it (random, static string). This script checks that variable and if it matches, we update the database with the allowed IP Address to the current IP address.</p>

<p>This makes it so we don't have to go in and manually change the IP address each time their ISP changes it and also, with the random string in the URL, prohibits someone from accessing it online and changing the allowed IP to their own.</p>