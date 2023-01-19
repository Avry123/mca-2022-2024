#Write python class to reverse string word by word 
#Input string: 'hello.py'
#expected string: 'py.hello'

class Reverse:
    #Breaks the string to list by space.
    def __init__(self,name) :
        self.name = name.split(' ')

    #Reverse the list of strings
    def reverse(self) :
        return self.name[::-1]

startOrStop = input('Start Y or Stop N')

#Converts the list to a string.
def convert(word) :
    x = ''
    for i in word :
       x += i + ' '
    return x
       

while startOrStop.lower() == 'y' :
    string = input('Write your word')
    s1 = Reverse(string)
    print(convert(s1.reverse()))
    startOrStop = input('Start Y or Stop N')
