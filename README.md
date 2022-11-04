# Ph/ishing Site Demo

Hello! In order to setup your own copy of this phi/shing site in your own local machine, follow these steps:

1. Download and install XAMPP from here: https://www.apachefriends.org/. Just click on Next. Next. Next. Like your normal installation.

2. Once you've installed XAMPP, open the app, and START the "Apache" server by clicking on the "Start" button.

![image](https://user-images.githubusercontent.com/38313687/199954258-eeb03656-aeb2-4d4b-a403-13f7eb5a21a2.png)

3. Download this code as ZIP ![image](https://user-images.githubusercontent.com/38313687/199954703-4cfd8076-341e-4709-ba75-ba84c51147e3.png)

4. Extract this ZIP file inside the htdocs folder inside the XAMPP folder. Usually, its here: C:\xampp\htdocs . It should be there if you didn't customize your installation.

![image](https://user-images.githubusercontent.com/38313687/199955353-5776c334-217f-4cc8-98a9-ed982501fcf6.png)

5. Visit this link from your computer: http://localhost/drive/signin/

Optional steps:

6. If you wanna share it with the world, download ngrok ZIP file from here: https://ngrok.com/download
It will just download a ZIP containing an .exe file. No need to install.

7. You need to create an account in order to use this, if you have no account it won't work properly. 
You can easily sign-up here: https://ngrok.com/ using your google account.

![image](https://user-images.githubusercontent.com/38313687/199956322-b40dc94a-3607-45a7-8875-28a74ef4735a.png)

8. Once you're done signing up. Follow the instructions here: https://dashboard.ngrok.com/get-started/setup . 
This page will also contain your UNIQUE auth token. Only you can have this key.

![image](https://user-images.githubusercontent.com/38313687/199956710-a757e033-637d-4387-96c6-7b132785ec7a.png)

9. Unzip the ngrok zip file anywhere in your PC. 
Open the command prompt in the unzipped folder by typing "cmd" in the address bar of Windows Explorer in that folder.

9. Once done, run this command in the command prompt to register the auth token you just recieved: 

ngrok config add-authtoken [your-auth-token]

10. Type in the command prompt:

ngrok http 80

11. Copy the link that was generated and add /drive/signin. Paste it into your browser address bar and now you have a working Phis/hing site.

![image](https://user-images.githubusercontent.com/38313687/199957759-9418aef8-7a79-4083-bc3b-3e12eb854384.png)





