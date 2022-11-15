import os
from sendgrid import SendGridAPIClient
from sendgrid.helpers.mail import Mail


message = Mail(
    from_email=:"durugabalamurugan@gmail.com",
    to_emails="chitrabanu1442002@gmail.com",
    subject="test",
    html_content="<p>hi</hi>"
)

try:
    sg = SendGridAPIClient("D2TlrY5DRQujRuMgxm3Xtg")
    response = sg.send(message)
except Exception as e:
    print(e)