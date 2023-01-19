#works

#Write down a program to calculate the number of charachters in a string.
#Sample String: google.com

repeatOrNo = input('To start the programme press y')

while repeatOrNo.lower() == 'y' :
    name10 = input('Enter a string value ')
    nameList = list(name10)
    nameResult = ()
    for c in nameList:
        print(c , ' is repeated ' , name10.count(c))
        
    repeatOrNo = input('Press Y to repeat or press N to close  ')


