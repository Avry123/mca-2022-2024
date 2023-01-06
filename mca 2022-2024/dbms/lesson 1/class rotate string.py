#Write a python class to reverse the string word by word?
#example: 'hello.py'
#output: 'yp.olleh

#Take the list, loop from the last index to 0 , and in that loop append everything to a list.
#Take that list and use join.
#_private
#__protected
#public

class Rotate:
    def __init__(self,aString):
        self.aString = aString
        self.b = []
        self.a = [*aString]
        self.carry = ''
        self.iterate0 = len(self.a) - 1
    def arrange(self) :
        while self.iterate0 >= 0 :
            self.b.append(self.a[self.iterate0])
            self.iterate0 -= 1
        self.carry = ''.join(self.b)
        print(self.carry)

#s1 = Rotate('TREADFASDGADGAERAS')
#s1.arrange()

yesOrNo = input('Yes/No')

while yesOrNo.lower() == 'y' :
    string = input('Give me your string')
    s1 = Rotate(string)
    s1.arrange()
    yesOrNo = input('Yes/No')


    
