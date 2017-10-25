from gpiozero import Buzzer
from time import sleep

buzzer = Buzzer(17)

while True:
  sleep(1)
  buzzer.on()
