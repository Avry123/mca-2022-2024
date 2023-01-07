#this is question 16.
#Write a python program which accepts two integer and an arithematic operator from the command line and performs the operation.
#If two of arguments are less than 3 then fire illegalNumber of arguments
#If the operator is not an Arithematic operator throw an invalid operator exception
#If the result is negative then throw NegativeResultException.
import argparse

#If proper number of arguments not provided
class InvalidNumberOfException(Exception):
    pass 

#If the operator is not an Arithematic operator
class InvalidOperatorException(Exception):
    pass

#If the result is negative then throw NegativeResultException
class NegativeResultException(Exception):
    pass  

try : 
     parser = argparse.ArgumentParser()
     parser.add_argument('a', type=int, help='first number')
     parser.add_argument('b',type=int, help='second number')
     parser.add_argument('operator', type=str, help='Enter the operation you want to perfrom')
     args = parser.parse_args()
     num1= args.a
     num2= args.b
     operator = args.operator
     if num1 is not None and num2 is not None and operator is not None:
        if operator == '+':
            result = num1 + num2
            print(result)
        elif operator == '-':
            result = num1 - num2
            if (result< 0) :
                raise NegativeResultException('The result is negative')
            else :
                  print(result)
        elif operator == '*':
            result = num1 * num2
            print(result)
        elif operator == '/':
            result = num1 / num2
            print(result)
        else:   
            raise InvalidOperatorException('We don not provide that operation')
     else :
         raise InvalidNumberOfException('Invalid number of arguments')
        #  print('One or more variables does not have a value')
except Exception as t:
    print(t)
    

