import os
import time
import Adafruit_DHT

DHT_SENSOR = Adafruit_DHT.DHT22
DHT_PINI = 4
DHT_PINE = 10
TEMP_SET = 75
TEMP_H = 0.5


os.system('kasa --plug --alias Resin-heater reboot')
time.sleep(10)

try:
    f = open('/var/www/html/enviro.csv', 'a+')
    if os.stat('/var/www/html/enviro.csv').st_size == 0:
            f.write('Date,Time,TempI,HumI,TempE,HumE\r\n')

except:
    pass

while True:
    humidityI, temperatureI = Adafruit_DHT.read_retry(DHT_SENSOR, DHT_PINI)
    humidityE, temperatureE = Adafruit_DHT.read_retry(DHT_SENSOR, DHT_PINE)
    if humidityI is not None and temperatureI is not None and humidityE is not None and temperatureE is not None:

        f.write('{0} {1},{2:0.1f},{3:0.1f}%,{4:0.1f},{5:0.1f}%\r\n'.format(time.strftime('%m/%d/%y'), time.strftime('%H:%M:%S'), ((temperatureI * 1.8) + 32), humidityI, ((temperatureE * 1.8) + 32), humidityE))
        f.flush()

        f2 = open("/var/www/html/latest.php", "w")
        f2.write('Saturn: {0:0.1f}/{1:0.1f}% / Tent: {2:0.1f}/{3:0.1f}% / Set: {4:0.1f}/{5:0.1f}\r\n'.format(((temperatureI * 1.8) + 32), humidityI, ((temperatureE * 1.8) + 32), humidityE, TEMP_SET, TEMP_H))
        f2.close()
        f.flush()

        if ((temperatureE * 1.8) + 32) < (TEMP_SET - TEMP_H): 
            os.system('kasa --plug --alias Resin-heater on') 
        if ((temperatureE * 1.8) + 32) > (TEMP_SET + TEMP_H):
            os.system('kasa --plug --alias Resin-heater off')
    else:
        os.system('kasa --plug --alias Resin-heater off')

    time.sleep(10)
