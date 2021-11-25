### Installing mpg-steamer on rPi

Why? Finding a software solution to smoothly, and timely, stream usb camera from the rpi to the network via http. This method also appears to have a low processing overhead so it may be able to run alongside applications without causing concern - more testing is required to confirm this.  



Information gathered from:  
https://snapcraft.io/install/mjpg-streamer/raspbian  
https://krystof.io/mjpg-streamer-on-a-raspberry-pi-zero-w-with-a-usb-webcam-streaming-setup/  
  
  
  
**Step 1: Enable snapd**  
-On a Raspberry Pi running the latest version of Raspbian snap can be installed directly from the command line:  
```sudo apt update```  
```sudo apt install snapd```  
  
-You will also need to reboot your device:  
```sudo reboot```  
  
-Once reboot is complete, install the core snap in order to get the latest snapd:  
```sudo snap install core```  
  
  
**Step 2: Install mjpg-streamer**  
-To install mjpg-streamer, use the following command:  
```sudo snap install mjpg-streamer```  


**Step 3: Verify usb cam is connected**  
-Verifiy usb camera is connected by using the following command, this will list all present usb devices:  
```lsusb```  
  
  
**Step 4: Get the webcam info**  
-To display the resolution and other details of usb cam, type:  
```v4l2-ctl -V```  
  
  
**Step 5: Start streaming usb camera video over http**  
-Use the following code to begin streaming video. If the above command presented a different resolution then 640x480, edit to match.  
```/usr/local/bin/mjpg_streamer -i "input_uvc.so -f 30 -r 640x480"  -o "output_http.so -w /usr/local/share/mjpg-streamer/www"```    
  
  
**Step 6: Watch the feed**  
-You can watch the video feed by navigating to the rpi's ip. In the following examples, my rpi is 10.0.1.141.  
```http://10.0.1.141:8080/?action=stream```  
  
-You can access the full interface, which will allow you to change video parameters by navigating to the following:  
```http://10.0.1.141:8080/stream.html```  
