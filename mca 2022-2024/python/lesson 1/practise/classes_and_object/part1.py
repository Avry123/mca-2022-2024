#Classes example.
#Method to modify class

class Name:
    def __init__(self,name,age) :
        self.name = name
        self.age = age
        self.hobbies = []
    def add_skills(self , skills):
        self.hobbies.append(skills)
    def showcase(self):
        return 'the name is ' , self.name, 'the age is ' , self.age , ' the hobbies is  ' , self.hobbies

#Example of inheritance
class Name2(Name):
    pass

p1 = Name2('Neel Chalke', 20)
p2 = Name2('Reet Chalke', 20)
print(p1.showcase())
print(p2.showcase())
        

        

