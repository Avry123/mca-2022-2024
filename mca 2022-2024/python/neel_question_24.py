#WRITE PYTHON CLASS TO IMPLEMENT POW(X,Y)

class power :
    def __init__(self,num1,num2) :
        self.num1 = num1
        self.num2 = num2
    #Method which returns power
    def power(self) :
        return pow(self.num1,self.num2)

startOrStop = input('Start Y/Stop N')

while startOrStop.lower() == 'y' :
    num1 = int(input('num1: '))
    num2 = int(input('num2: '))
    p = power(num1,num2)
    print(p.power())
    startOrStop = input('Start Y/Stop N')
    
