#Welcome to the OpFB wiki!
 
##Facebook is big data, and we are going to use it

*Notice*: This is an open development project. If you would like to submit code simply fork the repo, add your code, and initiate a pull request. 

**Questions/Comments/Ideas?** See the issue tracker tab in GitHub for this repo or join #OpFb  
 
**What is the goal?**
Facebook is a giant pool of data that can be used to filter out all kinds of noise and pinpoint specific targets. This tool will use a few key constants to spider outward from and find relationships that exist between FB users, pages, groups, and hashtags and rate the validity of those users using a ranking algorithm.
 
---
 
**What are the constants?**
The constants will be listed as they are found in a separate document. For development purposes use a benign constant that has no connection to the op. For instance, find everyone in Facebook that has a connection to "Hello Kitty". Use constants such as the official "Hello Kitty" fan page, unofficial fan pages, #hellokitty hashtags, and spider outward from there. You should be able to return a number of user ID's of people who are confirmed fans of the constant and rank them based on how often they talk about, like, or share such information.
 
---
 
**Rating assets** *( the algorithm )*
Connections to your constants can be strong or weak. We will create an algorithm that will rate the connection based on how many connections and the nature of the connections. For instance, using a known hashtag is 1 point on the rating scale. If someone makes a post with the hashtag they don't necessarily have a strong alliance to the constant, but if they post with the hashtag a number of times and also have connections to a page, group, or other known account their rankings will go up. A "like" on a page or an active member of a group will get a higher ranking than simply the use of a hashtag. The algorithm is still being hashed out.
 
---
 
**Data storage**
The data collected from the graph API will be stored in a mysql database of the script user's choosing. Each person who runs this script can enter their own database information and make it public via a data dump on pastebin.org (or similar). We are talking about possibly creating a "share this with a global database" option where the dev team will create an anonymous public storage database where each run script can put their data into for a second round of algorithm testing to create a new set of constants. The more data that exists and is shared the better our graph searches will become.
 
---
 
**The script**
This is a PHP powered script that can run on any PHP web server. Individuals can commit to it and install it on their own servers. They will need to enter the constants that they want to search for into the config file as well as their own facebook app API Secret key. **When committing back to the repo make sure to always scrub your facebook app API from your code each time**.
