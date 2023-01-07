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
        for index , i in enumerate(self.nameList) :
            self.nameList
    def ageCheck(self) :
        if (15 <= self.age <= 21) :
            print('Great, you are elegible to apply')
        else :
            raise ageChk('You are not of appropriate age')
    def nameCheck(self) :
        for i in string.ascii_lowercase:
            print(i)
            self.aToZ.append(i)
        for i in self.nameList :
            if (i.lower() in self.aToZ) :
             #   print('the value of self.aTOz is ,', self.aToZ) 
                 self.a += 1
             #    print('the value of a ', self.a)
             #error happening here
        print(self.a)
        print(self.nameList)
#        if (len(self.nameList) == self.a) :
#            print('the length matches')
#        else :
#            raise nameChk('The name is not proper')

s1 = Student(1,'Neel Chalke', 20, 'MCA')
#s1.ageCheck()
s1.nameCheck()
                
                
        
