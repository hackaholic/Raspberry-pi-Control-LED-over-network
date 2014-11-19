import RPi.GPIO as gpio
import sys
gpio.setwarnings(False)
gpio.setmode(gpio.BOARD)
gpio.setup(18,gpio.OUT)
k=int(sys.argv[1])
if k==1:
    gpio.output(18,1)
elif k==0:
    gpio.output(18,0)
