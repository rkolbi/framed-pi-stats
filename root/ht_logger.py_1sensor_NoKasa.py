import os
import time
import Adafruit_DHT

DHT_SENSOR = Adafruit_DHT.DHT22
DHT_PINE = 10


try:
    f = open('/var/www/html/enviro.csv', 'a+')
    if os.stat('/var/www/html/enviro.csv').st_size == 0:
            #f.write('Date,Time,TempI,HumI,TempE,HumE\r\n')
            f.write('Date,Time,TempE,HumE\r\n')
except:
    pass

while True:
    humidityE, temperatureE = Adafruit_DHT.read_retry(DHT_SENSOR, DHT_PINE)
    if humidityE is not None and temperatureE is not None:

        f.write('{0} {1},{2:0.1f},{3:0.1f}%\r\n'.format(time.strftime('%m/%d/%y'), time.strftime('%H:%M:%S'), ((temperatureE * 1.8) + 32), humidityE))
        f.flush()

        f2 = open("/var/www/html/latest.php", "w")
        f2.write('Saturn Enclosure: {0:0.1f}/{1:0.1f}%\r\n'.format(((temperatureE * 1.8) + 32), humidityE))
        f2.close()
        f.flush()


    time.sleep(10)