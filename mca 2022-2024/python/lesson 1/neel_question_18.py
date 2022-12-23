#question 18
#Create a class student with attribute roll no, name, age and course.
#Initialize values through parameterical constructor.
#If age of student is not in between 15 and 21, then generate user-defined exception 'Age not within exception'
#If name contains numbers or special symbols raise exception. 'Name not valid exception'
#Define the two exception class.

#question 18

#question 18
#Create a class student with attribute roll no, name, age and course.
#Initialize values through parameterical constructor.
#If age of student is not in between 15 and 21, then generate user-defined exception 'Age not within exception'
#If name contains numbers or special symbols raise exception. 'Name not valid exception'
#Define the two exception class.

import string

class ageChk(Exception) :
    pass
class nameChk(Exception) :
    pass



class Student:
    global a
    def __init__(self,roll_no,name,age,course) :
        self.roll_no = roll_no
        self.name = name
        self.age = age
        self.course = course
        self.nameList = [*self.name]
        self.aToZ = []
        self.a = 0
    def ageCheck(self) :
        if (15 <= self.age <= 21) :
            print('Great, you are elegible to apply')
        else :
            raise ageChk('Age not within range')
    def nameCheck(self) :
        for i in string.ascii_lowercase:
            self.aToZ.append(i)
            self.aToZ.append(' ')
        for i in self.nameList :
            if (i.lower() in self.aToZ) : 
                 self.a += 1
        print(self.nameList)
        if (len(self.nameList) == self.a) :
            print('the length matches')
        else :
            raise nameChk('The name is not valid, Please avoid inserting symbols like @ or #')


#s1 = Student(1,'Neel Mangesh Chalke', 20, 'MCA')
#s1.ageCheck()
#s1.nameCheck()

continueOrNot = input('Start Y/Stop N')

while continueOrNot.lower()  == 'y' :
    roll_no = input('Give me your roll no')
    name = input('Give me a name')
    age = int(input('Give me your age'))
    course = input('Enter your course name')
    try :
        s1 = Student(roll_no,name,age,course)
        s1.ageCheck()
        s1.nameCheck()
    except Exception as e :
        print(e)
    finally :
        continueOrNot = input('Start Y/Stop N')
        
                
        

        
