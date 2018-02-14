import sendgrid

import os

from sendgrid.helpers.mail import *


sg = sendgrid.SendGridAPIClient(apikey=os.environ.get('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'))

from_email = Email(input-lg.email)
to_email = Email("ChristopherH@risual.com")
subject = (input-lg.subject)
content = (input-lg, email, name, user_type, subject, details)
mail = Mail(from_email, subject, to_email, content)
