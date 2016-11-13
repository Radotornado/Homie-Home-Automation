import RPi.GPIO as GPIO
import urllib2
import time
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(23,GPIO.OUT)
GPIO.setup(14,GPIO.OUT)
GPIO.setup(15,GPIO.OUT)
GPIO.setup(18,GPIO.OUT)
GPIO.setup(24,GPIO.OUT)
GPIO.setup(25,GPIO.OUT)
true = 1
while(true):
                try:
                        response = urllib2.urlopen('http://192.168.0.102/xampp/buttonStatus.txt')
                        status = response.read()
                except urllib2.HTTPError, e:
                                        print e.code

                except urllib2.URLError, e:
                                        print e.args

                print status
                if status=='Laundry_ON':
                                GPIO.output(14,True)
                elif status=='Laundry_OFF':
                                GPIO.output(14,False)
                elif status=='Boiler_ON':
                                GPIO.output(23,True)
                elif status=='Boiler_OFF':
                                GPIO.output(23,False)
                elif status=='AirC_ON':
                                GPIO.output(15,True)
                elif status=='AirC_OFF':
                                GPIO.output(15,False)
                elif status=='c1_ON':
                                GPIO.output(18,True)
                elif status=='c1_OFF':
                                GPIO.output(18,False)
                elif status=='c2_ON':
                                GPIO.output(24,True)
                elif status=='c2_OFF':
                                GPIO.output(24,False)
                elif status=='c3_ON':
                                GPIO.output(25,True)
                elif status=='c3_OFF':
                                GPIO.output(25,False)
                time.sleep(1)
                

