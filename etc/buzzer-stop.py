from gpiozero import Buzzer
from time import sleep

buzzer = Buzzer(17)

buzzer.on()
sleep(2)
buzzer.off()
