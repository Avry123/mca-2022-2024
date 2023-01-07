#Write a python programme to get a string made of first 2 and last 2 character from a given string , if the string lenght is less than 2, return instead of the empty string.
#Sample String: 'python programming'
#Expected result: 'pyng'
#Sample String: 'py'
#expected result: 'pypy'

runOrNo = input('To run press y to stop press n ')

while (runOrNo.lower() == 'y') : 
    x = input('Please give a string ')
    y = len(x)
    x_rightSide = y
    x_leftSide = y - 2
    print('The result  is ' , x[0:2] + x[x_leftSide : x_rightSide] )
    runOrNo = input('To run press y to stop press n')
