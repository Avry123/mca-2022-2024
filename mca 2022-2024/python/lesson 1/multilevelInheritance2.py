#Write a python program to implement multilevel inheritance using following classes
#Student, Test, Test

class Student():
    a = 'Neel '
class Test(Student): 
    b = ' You have Business Statistics exam tommorow'
class Marks(Test) :
    c = ' You have scored 30 marks'
    

s1 = Marks()
print(s1.a + s1.b + s1.c)
    
