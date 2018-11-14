## P3 Peer Review

+ Reviewer's name: Alex Caloggero
+ Reviwee's name: Ning Chen
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/ningchen8743/p3>*


## 1. Interface
+ Feels clean, understandable, and approachable. Good use of color and style across the site pages. The pages' font color, style, are different on each of the views.
+ The '>' symbols before each link on the nav bar could be a bit confusing. A user might think they indicate that the links are nested. 
+ An instruction that states numbers and symbols are not allowed in the text input would add clarity. I see there are instructions on the About page but a first-time user might not go to that page before trying it out for the first time.
+ The results box was very well-defined and looked good. It add to the smooth overall look and feel of the interface.
+ The layout and spacing of the inputs was good and improved interface's style. 
+ Associate the labels with their respective checkbox inputs so that a user can click on the label and it will toggle the associated checkbox.
+ Use consistent aligning of the checkbox and select inputs. Currently it is a checkbox then label and underneath, a label then select input. Change one of those so it is consistent with the other. 


## 2. Functional testing
+ Tried going to http://p3.ningchenbunny.com/count-word/ccount, got a 404 error page and a return link. 
+ Tried inputing number and symbols into the text input, got an error response.
+ Submitted with all inputs blank or untouched and got an error response. 


## 3. Code: Routes
+ All page views have an associated route; all look appropriate.


## 4. Code: Views
+ All separation of concerns is proper and template inheritance is used.


## 5. Code: General
+ As mentioned under Interface, associate the labels with their respective inputs by using for='input-name' or nest the input inside the label tag.


## 6. Misc
+ Nice use of the custom validation using regex to get alpha characters and spaces only!