### Installing mpg-steamer on rPi

Why? Finding a software solution to smoothly, and timely, stream the camera from the rpi to the network via http. This method also appears to have a low processing overhead so it may be able to run alongside applications without causing concern - more testing is required to confirm this.  



Information gathered from:  
https://snapcraft.io/install/mjpg-streamer/raspbian  
https://krystof.io/mjpg-streamer-on-a-raspberry-pi-zero-w-with-a-usb-webcam-streaming-setup/  
https://www.reddit.com/r/raspberry_pi/comments/qwwh7e/mjpeg_over_http_streaming_via_libcamera/  
https://www.raspberrypi.com/documentation/accessories/camera.html  
https://downloads.raspberrypi.org/raspios_armhf/images/raspios_armhf-2021-05-28/  



!!!For this setup, you need to be running raspios_armhf-2021-05-28!!!  


**Step 1: Enable raspberry pi cam**  
-Enable the rpi camera by using the following commands:  
```sudo raspi-config```, then select ```3. Interfacing Options```, ```P1 Camera```, select ```Yes```, and hit return.

  

**Step 2: Install mjpg-streamer**  
-Install git:  
```sudo apt-get install git```   

-Grab a copy of jpg-streamer  
```cd ~```  
```git clone https://github.com/jacksonliam/mjpg-streamer.git```  

-Compile mjpg-streamer  
```cd mjpg-streamer/mjpg-streamer-experimental/```  
```sudo apt-get update```   
```sudo apt-get install cmake ```  
```sudo apt-get install python-imaging``` (this may throw error, but ok)  
```sudo apt-get install libjpeg-dev```  
```make CMAKE_BUILD_TYPE=Debug```  
```sudo make install```  
```export LD_LIBRARY_PATH=.```  

**Step 3: Start streaming camera video over http**  
-Use the following code to begin streaming video.   
```./mjpg_streamer -o "output_http.so -w ./www" -i "input_raspicam.so -fps 30"```    

  

**Step 4: Watch the feed**  
-You can watch the video feed by navigating to the rpi's ip. In the following examples, my rpi is 10.0.1.141.  
```http://10.0.1.141:8080/?action=stream```  

-You can access the full interface, which will allow you to change video parameters by navigating to the following:  
```http://10.0.1.141:8080/stream.html```  
  
    

**Extra Step: Make command to start streaming**  
```nano livestream```  
  
```
cd /home/pi/mjpg-streamer/mjpg-streamer-experimental/  
./mjpg_streamer -o "output_http.so -w ./www" -i "input_raspicam.so -fps 30" &  
```
  
```chmod 777 livestream```  
```sudo cp livestream /bin/```  
  
Now you should be able to start streaming by using the command ```livestream```.  
  
  
  
<br>  

**Notes:**  
To reduce any studders or pauses, try lowering frame rate from 30 to 20, or 15. 
