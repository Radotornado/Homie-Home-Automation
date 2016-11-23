import serial
import time
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(8,GPIO.OUT)
ser = serial.Serial('/dev/ttyACM0', 9600)
val = 0
while 1 :
    val = ser.read()
    print val
    if val == '1':
        GPIO.output(8,True)
    else :
        GPIO.output(8,False)
    time.sleep(1)
    
