#Write a python clas to find a pair of element (indices of two number) from a given array whose sum equals to specific target number.
#input no: [10,20,10,40,50,60,70]
#Target: 50
#Output: 3,4

#Appending number to list
inputList = []


class Sum:
    def __init__(self,array,noToFind):
        self.array = array
        self.noToFind = noToFind
    def showCase(self) :
        a = self.array
        b = self.noToFind
        for index, i in enumerate(a) :
            if (b == a[index] + a[index + 1]) :
                print('the number lies between, ', index , ' and ' , index + 1)
                break

#s1 = Sum([1,2,3,4,5], 7)
#s1.showCase()
continueOrNot = input('Start Y/Stop N')

while continueOrNot.lower()== 'y' :
    noOfTimes = int(input('No of items to add '))
    for i in range(0,noOfTimes) :
        item = int(input('Item: '))
        inputList.append(item)
    noToFind = int(input('Give me a number to find '))
    try :
        s1 = Sum(inputList,noToFind)
        s1.showCase()
    except Exception as e :
        print(e)
    finally :
        inputList = []
        continueOrNot = input('Start Y/Stop N')
        
    
