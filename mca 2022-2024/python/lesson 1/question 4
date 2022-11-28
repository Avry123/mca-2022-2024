#Write a python program to get a string from a given string where all occurencess of its first char have been changed to '@', except the first char itself.
#Sample String: 'restart' Object Oriented Programming Language
#Expected Resykt: 'resta@t'


runOrStop = input('Start Y/Stop N ')

index = []

b = ''

while runOrStop.lower() == 'y' :
    a = list(input('Give a string '))
    initialLetter = a[0].lower()
    iterate0 = 1
    while iterate0 < len(a) :
        if (initialLetter == a[iterate0].lower()) :
            index.append(iterate0)
        iterate0 += 1
    iterate1 = 0 
    while iterate1 < len(index) :
        a[index[iterate1]] = '@'
        iterate1 += 1
    for i in a :
        b = b + i
    print(b)
    a  = []
    index = []
    initialLetter = ''
    b = ''
    runOrStop = input('Start Y/Stop N ')
    
