# send_sms
This is a small project using Africas Talking API to send messages to end users.

# To Send an sms follow the steps 

# Step 1
Register with <a href="https://account.africastalking.com/auth/register">Africa's talking</a> and get a username plus an api key.

# Step 2
Access the sendSms.php file within this project. <b>sms africas talking</b> -> <b>sendSms.php</b>

# Step 3
change the <b>"$username"</b> and <b>"$apikey"</b> valuess according to the <b>username</b> and <b>api key</b> you have been given by Africa's Talking

# Step 4 
Input the receipient phone number by changing the <b>"$recipients"</b> variable value. 

# Step 5 
Input the message you want to send to the users by changing the value in the <b>"$message"</b>variable.

<b>Note</b>
To send to multiple users you can change the receipent to look as follows:
<b>$recipients = "+254yyyyxx,+254yyyyyxx"</b> 
The comma is used to seperate the various phone numbers.

# Step 6
Run the project

# POSSIBLE ERRORS 
<b>PHP - SSL certificate error: unable to get local issuer certificate</b>.
I encountered this error when trying to run the project 
this should not alarm you, Use this link from stack Overflow <a href="https://stackoverflow.com/questions/28858351/php-ssl-certificate-error-unable-to-get-local-issuer-certificate">Stack Overflow</a>.

<B>NOTE : IF YOU ARE USING XAMPP </B> To alter / access php.ini file click on the desktop <b>xampp app</b>. 
Under Apache there are four buttons on the right click on the <b>config button</b> then <b>PHP(php.ini)</b>

# More Information
There is so much you can do using this API and its not limited to sending, you can also recieve messages and so much more.
For the complete documentation <a href="http://docs.africastalking.com/sms/sending">click here</a>



