#this is question 16.
import argparse

try : 
     parser = argparse.ArgumentParser()
     parser.add_argument('a', type=int, help='first number')
     parser.add_argument('b',type=int, help='second number')
     parser.add_argument('operator', type=str, help='Enter the operation you want to perfrom')
     args = parser.parse_args()
     a= args.a
     b= args.b
     operator = args.operator
     if (operator == '+') :
         c = a + b
         print('the value of c is ', c)
     elif (operator == '-') :
         c = a - b
         print('the value of c is ', c)
     elif (operator == '/') :
         c = a/b
         print('the value of c is ', c)
     elif (operator == '%') :
         c = a%b
         print('the value of c is ', c)
     elif (operator == '*') :
         c = a * b
         print('the value of c is ', c)
     else :
         raise TypeError('Illegal Number of argument')
except TypeError as t:
    print(t)
    

