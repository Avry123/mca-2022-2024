#create an abstract class shape with two abstract methods.
#Calculate the shape are abstract double area().
#Calcualate the shape perimeter abstract double perimeter().
#Write following subclasses for the shape class rectangle, triangle, circle and rhombus.
#all these classes must implement the abstract method inherited from the parent class.
#Create class shape_test which contains the main() method.
#Create an object of each class and print out it's area and its perimeter.

from abc import ABC, abstractmethod

class shape(ABC) :
    @abstractmethod
    def area(self) :
        pass
    @abstractmethod
    def perimeter(self) :
        pass

class rectangle(shape) :
    def __init__(self,l,w) :
        self.l = l
        self.w = w

    #area
    def area(self) :
        return self.l * self.w
    #parameter
    def perimeter(self) :
        return 2 * (self.l + self.w)

class triangle(shape) :
    def __init__(self,h,b) :
        self.h = h
        self.b = b
        self.s1 = 0
        self.s2 = 0
        self.s3 = 0

    #area
    def area(self) :
        return (self.h * self.b) / 2
    #perimeter
    def perimeter(self,s1,s2,s3) :
        self.s1 = s1
        self.s2 = s2
        self.s3 = s3
        return self.s1 + self.s2 + self.s3

class circle(shape) :
    def __init__(self,r) :
        self.r = r
    #area
    def area(self) :
        return 3.14 * self.r ** 2
    #parameter
    def perimeter(self) :
        return 2 * 3.14 * self.r ** 2

class rhombus(shape) :
    def __init__(self,p,q) :
        self.p = p
        self.q = q
        self.a = 0
    #area
    def area(self) :
        return (self.p * self.q)/2
    #parameter
    def perimeter(self , a) :
        self.a = a
        return self.a * 4
    
#Creating objects
#r = rectangle(10,20)
#c = circle(10)
#print(c.perimeter())
#t = triangle(10,20)
#print(t.area())
#print(t.perimeter(10,20,30))
#r = rhombus(10,20)
#print(r.area())
#print(r.perimeter(10))

startOrStop = input('Start Y/Stop N')

while startOrStop.lower() == 'y' :
    operation = input('circle c, triangle t, rhombus rh, rectangle re')
    find = input('area a or perimeter p')
    if (operation.lower() == 're') :
        if (find.lower() == 'a' ) :
            value1 = int(input('Give me value: '))
            value2 = int(input('Give me value: '))
            r = rectangle(value1,value2)
            print(r.area())
        if (find.lower() == 'p') :
            value1 = int(input('Give me value: '))
            value2 = int(input('Give me value: '))
            r = rectangle(value1,value2)
            print(r.perimeter())
    if (operation.lower() == 'c') :
        if (find.lower() == 'a' ) :
            value1 = int(input('Give me value: '))
            r = circle(value1)
            print(r.area())
        if (find.lower() == 'p') :
            value1 = int(input('Give me value: '))
            r = circle(value1)
            print(r.perimeter())
    if (operation.lower() == 't') :
        if (find.lower() == 'a' ) :
            value1 = int(input('Give me value: '))
            value2 = int(input('Give me value: '))
            r = triangle(value1,value2)
            print(r.area())
        if (find.lower() == 'p') :
            value1 = int(input('Give me value: '))
            value2 = int(input('Give me value: '))
            value3 = int(input('give me value: '))
            r = triangle(10,20)
            print(r.perimeter(value1,value2,value3))
    if (operation.lower() == 'rh') :
        if (find.lower() == 'a' ) :
            value1 = int(input('Give me value: '))
            value2 = int(input('Give me value: '))
            r = rhombus(value1,value2)
            print(r.area())
        if (find.lower() == 'p') :
            value1 = int(input('Give me value: '))
            r = rhombus(10,20)
            print(r.perimeter(value1))          
    startOrStop = input('Start Y/Stop N')
