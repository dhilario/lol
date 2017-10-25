from sms import smslib
from gpiozero import LightSensor, Buzzer
from time import sleep
from threading import Thread

def send_sms():
  global safe_to_send_sms
  if safe_to_send_sms:
    safe_to_send_sms = False
    smslib.send_sms('xxxxxxxxxxxx,xxxxxxxxxxxx','Intruder alert! Somebody opened the door!')

ldr = LightSensor(4)
buzzer = Buzzer(17)

safe_to_send_sms = True

while True:
  sleep(0.1)
  print ldr.value
  if ldr.value < 0.15:
    buzzer.on()
    Thread(target=send_sms).start()
  else:
    safe_to_send_sms = True
    buzzer.off()
