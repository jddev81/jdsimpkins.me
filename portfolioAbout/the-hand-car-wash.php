<p>I decided to build this one page website on WordPress with a custom theme and some custom functionality.</p>

<p>One of the primary features of the website is to tell the visitor if the car wash is currently open or closed. When open, we display a hero slider and bubbles float from the bottom of the screen to the top. When closed due to inclement weather, we stop the bubbles and in place of the slider, we display a simulated thunderstrom (javascript and css) with the words "Closed Due To Weather".</p>

<p>The coolness doens't stop there. The owner of the car wash has several businesses and is a fairly busy person. He didn't want to be taksed with logging in each morning and toggling the open/closed option on the website so I run a cron job each morning that sends out an email asking if the car wash will be open or closed that day. He simply clicks a button in the email and the magic happens.</p>

<p>Sometimes they will be open for the day and the weather turns bad though. I wanted to make this as easy as possible. I decided to write a script that runs every half hour during normal buisness hours and connect to a weather API and if it is raining or other "bad" weather, I send an email giving the details of the weather and a button to close the car wash.</p>

<h4>Unique Challenges</h4>

<p>One of the challenges with this project was setting the cron jobs to run at appropriate times. This site is hosted on Godaddy servers. Godaddy is in arizona. Arizona doesn't recognize daylight savings time. When I realized this, the first time the time changed, I realized what  pain in the butt it is going to be, changing up the cron job twice per year.</p>

<p>It needs to run at 8:00am EST so I'm running it at 5:00am and 6:00am Arizona time, which is 8:00am and 9:00am EST. I just set the timezone in the script itself and if it is 8:00am EST, we send the email. So during summer, the email sends at 5:00am Arizona time and 6:00am during daylight savings time.</p>