#Write a python program to add 'ing' at ehe end of a given string (length should be at least 3).
#If the given string already end with 'ing' then add 'ly' instead. If the string length of given string is less than 3, leave it unchanged.
#Sample String: 'abc'
#Expected Result: 'abcing'
#Sample String: 'string'
#Expected result: 'Stringly'

repeatOrNo = input('To start the programme press y ')

while repeatOrNo.lower() == 'y' :
    x = input('Please give us a string  ')
    x_length = len(x)
    if (x_length < 3) :
        print(x)
    else:
        x_leftSide = x_length - 3
        x_rightSide = x_length
        last_three_words = x[x_leftSide:x_rightSide]
        if (last_three_words == 'ing') : 
            x = x + 'ly'
            # print(x)
        else:
            x = x + 'ing'
        print(x)
    repeatOrNo = input('Press Y to repeat or press N to close  ')
    
