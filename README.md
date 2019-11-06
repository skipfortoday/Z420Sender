# Z420Sender
## Z420 Sender Bulk Email Spammed

## Requirements

- An API Key
    - Add from: https://www.facebook.com/riqalfa
- PHP 5.6 up
- PHP Server (XAMPP) / IIS
- Text Editor
- Command Line Interface (CLI)

## Feature
- Random Number
- Random String
- Random Sender Name
- Random Sender Mail
- Random Subject 
- Random Browser
- Random Country
- Random IP 
- Get Date
- Get Email 
- Add Attachment
- Remove Duplicate Email (Y/n)
- Remove Email After Send (Y/n)
- Multi Link (get random)
- Multi SMTP (only google relay)
- Sensor Email Received
- Ratio send email / a sec
- etc

## Usage

### Input Parameter Descriptions
# In your my.php
| Apikey       | Hostname    | Username | Password | Secure | Port |
| --------------- | ------- | -------- |--------|--------|--------|
|Z4209350-6fa-4200-91bb-xxxxxxxxxxxx|smtp-relay.gmail.com|admin@z420.com|xxxxxxxx|tls or ssl|587 (TLS) or 465 (SSL)|

### Running on CLI Mode
```ruby
# Open your directory sender
php Z420.php
```  

## Update step by step on date
| Date  | Version    | Status | Type | Description |
| ------- | ------- | -------- |-------- |-------- |
|17 December 2017 |`v1.0`|Complete|High|Add feature random and update header email|
|21 December 2017 |`v1.1`|Complete|Low|Update header email|
|07 January 2018 |`v1.2`|Complete|High|Update all system on sender|
|13 January 2018 |`v1.3`|Complete|High|Fix all bug after last update|
|22 February 2018 |`v1.4`|Complete|Medium|Add feature multiple relay|
|02 March 2018 |`v1.4.1`|Complete|Low|Header update from AssasinSpam|
|01 Juni 2018 |`v1.5`|Failed|Medium|Get score from email AssasinSpam with CURL <a href="http://spamcheck.postmarkapp.com/filter">http://spamcheck.postmarkapp.com/filter</a>|
|06 November 2019 |`v1.6`|Complete|High|Migration from Close Source to Open Source, API KEY DEPRECATED|

**APIKEY CHECKING Expired**

```ruby
https://z420sender.com/member/index.php/Z420S/expired/apikey/Z4209350-6fa-4200-91bb-xxxxxxxxxxxx
```
**Response**
```ruby
}
  "apikey": "Z4209350-6fa-4200-91bb-xxxxxxxxxxxx",
  "checking": true,
  "message": "Your api key valid!",
  "expired": "true"
}
```

**APIKEY CHECKING Information**

```ruby
https://z420sender.com/member/index.php/Z420S/checking/apikey/Z4209350-6fa-4200-91bb-xxxxxxxxxxxx
```
**Response**
```ruby
}
  "apikey": "Z4209350-6fa-4200-91bb-xxxxxxxxxxxx",
  "valid": true,
  "id": "1",
  "account": {
    "id": "1",
    "apikey": "Z4209350-6fa-4200-91bb-xxxxxxxxxxxx",
    "contact": "https://www.facebook.com/riqalfa",
    "active": "true",
    "expired": "2018-12-01",
    "date": "2018-04-01",
    "role": "superadmin"
  },
  "logs": [
    {
      "id": "195",
      "userid": "1",
      "ip": "36.xx.196.xxx",
      "country": "Indonesia",
      "countrycode": "ID",
      "city": "Surabaya",
      "logintype": "critical",
      "isp": "PT Telkom Indonesia",
      "proxy": "false",
      "date": "2018-06-15",
      "datetime": "2018-06-15 12:06:33"
    }
  ]
}
```

## Information Issues and Security Concerns
Contact zrav420@gmail.com

# Be Contributor?

## Contributor List
- [Thariq Alfa](https://github.com/alfaben12) Coder
