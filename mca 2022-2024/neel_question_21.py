#Write a python program to check the validity of the password input by user. 
#validation at least 1 letter between [a-z] and 1 letter between [A-Z]
#atleast 1 number between [0-5], Atleast 1 character from [$#@]
#Minimum length of characters.maximum length of characters must be at max 16.

import re 

#Lower case letters
lowerLetter = 0

#Upper case letters
upperLetter = 0

#Password 
password = ''

#Password length 
passwordLength = 0

#numbers in password between 0 - 9
passwordNumber = 0

#numbers in password between 0-5
passwordBetween = 0

#special characters in password
passwordCharacterLength = 0

passwordLength = len(password)

#Finding Numbers 
def number(m) :
    pattern = r'[0-9]'
    string = m 
    a = 0
    match = re.findall(pattern, string)
    for number in match :
        a += 1
    return a 

#Finding number between 0-5

def numberBetweenZeroAndFive(m) :
    pattern = r'[0-5]'
    string = m 
    a = 0
    match = re.findall(pattern, string)
    for number in match :
        a += 1
    return a

#Finding special characters in password
def specialCharacter(m) : 
    pattern = r'[^-a-zA-Z0-9]'
    string = m 
    a = 0
    match = re.findall(pattern, string)
    for specialCharacter in match :
        a += 1
    return a

#lowercase characters in password
def lowercase(m) : 
    pattern = r'[a-z]'
    string = m 
    a = 0
    match = re.findall(pattern, string)
    for lowercase in match :
        a += 1
    return a

#uppercase characters in password
def uppercase(m) :  
    pattern = r'[A-Z]'
    string = m 
    a = 0
    match = re.findall(pattern, string)
    for uppercase in match :
        a += 1
    return a

startOrStop = input('Start Y or Stop N')

while startOrStop.lower() == 'y' :
    password = input('Enter password: ')
    upperLetter = uppercase(password)
    lowerLetter = lowercase(password)
    passwordNumber = number(password)
    passwordBetween = numberBetweenZeroAndFive(password) 
    passwordCharacterLength = specialCharacter(password)
    passwordLength = len(password)
    # print('Upper letter ', upperLetter, 'Lower letter ' , lowerLetter, 'total numbers between 0 -9', passwordNumber, 'number between 0-5', passwordBetween, 'special characters in ' , passwordCharacterLength, 'password lenght is' , passwordLength)
    if (passwordLength <= 16) :
        if (upperLetter >= 1 and lowerLetter >= 1 and passwordCharacterLength >= 1 and passwordBetween - passwordNumber == 0) :
            print('You have a valid password')
        else :
            print('atleast one upper letter, at least one lower letter, atleast one special character and at least one number between 0 and 5')
    else :
        print('The length of the password cannot be more than 16 characters')
    startOrStop = input('Start Y or Stop N')
