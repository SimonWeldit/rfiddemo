# RFID login system

---
colorlinks: true
---

## How it works
It's fairly simple. Each RFID tag has a number. When a tag gets scanned, it
fills the tag's number into the focused field and hits enter. When you do this
on a normal login form, it obviously dosen't work. So what we've done is that
we created an extra authentication method in Laravel where it grabs the RFID
number and authenticates with it. 

On the technical side, we used Laravel's
integrated loginUsingId method with the RFID tag number passed in. Right now we
have a separate page for the RFID authentication, and we want it to stay that
way. We also want the input field to be focused by default.

## What we need
We need a couple of things. Firstly, we need each user to be able to add this
number to their profile. Second, we also want to be able to add this number for
them. Third, we need the authentication method using this number on the login
page. 

On the security side, it's probably not a good idea for the users to be
able to add any arbitrary number as an authentication method. The tags we used
all have 10 digits, so a minimal number of digits around there should be 
sufficient. And the same number repeated many times should probably also be
avoided.

## Links
[Login method used in Laravel](https://laravel.com/docs/10.x/authentication#authenticate-a-user-by-id)

[GitHub repo(requires authentication)](https://github.com/SimonWeldit/weldcourse)
