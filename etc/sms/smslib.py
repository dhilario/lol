import urllib2
import urllib

def send_sms(mobile_numbers,msg):
  query_args = {
   'username':'username-here',
   'password':'password-here',
   'message':msg,
   'want_report':'1',
   'msisdn':mobile_numbers,
   'sender':'Kowalski'
  }

  url = 'http://bulksms.vsms.net:5567/eapi/submission/send_sms/2/2.0'
  data = urllib.urlencode(query_args)
  request = urllib2.Request(url, data)
  print 'Sent sms!'
  urllib2.urlopen(request).read()
